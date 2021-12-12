<?php
require_once(__DIR__ . "/db.php");
$BASE_PATH = '/Project/'; //This is going to be a helper for redirecting to our base project path since it's nested in another folder
function se($v, $k = null, $default = "", $isEcho = true)
{
    if (is_array($v) && isset($k) && isset($v[$k])) {
        $returnValue = $v[$k];
    } else if (is_object($v) && isset($k) && isset($v->$k)) {
        $returnValue = $v->$k;
    } else {
        $returnValue = $v;
        //added 07-05-2021 to fix case where $k of $v isn't set
        //this is to kep htmlspecialchars happy
        if (is_array($returnValue) || is_object($returnValue)) {
            $returnValue = $default;
        }
    }
    if (!isset($returnValue)) {
        $returnValue = $default;
    }
    if ($isEcho) {
        //https://www.php.net/manual/en/function.htmlspecialchars.php
        echo htmlspecialchars($returnValue, ENT_QUOTES);
    } else {
        //https://www.php.net/manual/en/function.htmlspecialchars.php
        return htmlspecialchars($returnValue, ENT_QUOTES);
    }
}
//TODO 2: filter helpers
function sanitize_email($email = "")
{
    return filter_var(trim($email), FILTER_SANITIZE_EMAIL);
}
function is_valid_email($email = "")
{
    return filter_var(trim($email), FILTER_VALIDATE_EMAIL);
}
//TODO 3: User Helpers
function is_logged_in($redirect = false, $destination = "login.php")
{
    $isLoggedIn = isset($_SESSION["user"]);
    if ($redirect && !$isLoggedIn) {
        flash("You must be logged in to view this page", "warning");
        die(header("Location: $destination"));
    }
    return $isLoggedIn; //se($_SESSION, "user", false, false);
}
function has_role($role)
{
    if (is_logged_in() && isset($_SESSION["user"]["roles"])) {
        foreach ($_SESSION["user"]["roles"] as $r) {
            if ($r["name"] === $role) {
                return true;
            }
        }
    }
    return false;
}
function get_username()
{
    if (is_logged_in()) { //we need to check for login first because "user" key may not exist
        return se($_SESSION["user"], "username", "", false);
    }
    return "";
}
function get_user_email()
{
    if (is_logged_in()) { //we need to check for login first because "user" key may not exist
        return se($_SESSION["user"], "email", "", false);
    }
    return "";
}
function get_user_id()
{
    if (is_logged_in()) { //we need to check for login first because "user" key may not exist
        return se($_SESSION["user"], "id", false, false);
    }
    return false;
}
//TODO 4: Flash Message Helpers
function flash($msg = "", $color = "info")
{
    $message = ["text" => $msg, "color" => $color];
    if (isset($_SESSION['flash'])) {
        array_push($_SESSION['flash'], $message);
    } else {
        $_SESSION['flash'] = array();
        array_push($_SESSION['flash'], $message);
    }
}

function getMessages()
{
    if (isset($_SESSION['flash'])) {
        $flashes = $_SESSION['flash'];
        $_SESSION['flash'] = array();
        return $flashes;
    }
    return array();
}
//TODO generic helpers
function reset_session()
{
    session_unset();
    session_destroy();
}
function users_check_duplicate($errorInfo)
{
    if ($errorInfo[1] === 1062) {
        //https://www.php.net/manual/en/function.preg-match.php
        preg_match("/Users.(\w+)/", $errorInfo[2], $matches);
        if (isset($matches[1])) {
            flash("The chosen " . $matches[1] . " is not available.", "warning");
        } else {
            //TODO come up with a nice error message
            flash("<pre>" . var_export($errorInfo, true) . "</pre>");
        }
    } else {
        //TODO come up with a nice error message
        flash("<pre>" . var_export($errorInfo, true) . "</pre>");
    }
}
function get_url($dest)
{
    global $BASE_PATH;
    if (str_starts_with($dest, "/")) {
        //handle absolute path
        return $dest;
    }
    //handle relative path
    return $BASE_PATH . $dest;
}

function get_Points(){
    $user_id = $_SESSION['user']['id'];
    $db = getDB();
    $query = "Select points from Users WHERE id = :id";
    $stmt = $db->prepare($query);
    try {
        $stmt->execute([":id" => $user_id]);
        $r = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if ($r) {
            $results = $r;
        }
    } catch (PDOException $e) {
        error_log("Error fetching points for $db: " . var_export($e->errorInfo, true));
    }
    return $results[0]['points'];
}

function update_points($user_id){
    $db = getDB();
    $stmt = $db->prepare("UPDATE Users SET points = (SELECT SUM(point_change) FROM PointsHistory WHERE Users.id = PointsHistory.user_id)
    WHERE id=:user_id");
    try {
        $stmt->execute([":user_id" => $user_id]);
        //flash("Saved points");
    } catch (Exception $e) {
       flash("Error updating users points");
    }
}

function change_points($user_id, $point_change, $reason){
    $db = getDB();
    $stmt = $db->prepare("INSERT INTO PointsHistory (point_change, user_id, reason) VALUES(:point_change, :user_id, :reason)");
    try {
        $stmt->execute([":point_change" => $point_change, ":user_id" => $user_id, ":reason" => $reason]);
        //flash("Changed points");
    } catch (Exception $e) {
        flash("Error channging points");
    }
    update_points($user_id);
}

function add_to_competition($comp_id, $user_id){
    $db = getDB();
    $stmt = $db->prepare("INSERT INTO UserComps (user_id, competition_id) VALUES (:uid, :cid)");
    try {
        $stmt->execute([":uid" => $user_id, ":cid" => $comp_id]);
        update_participants($comp_id);
        return true;
    } catch (PDOException $e) {
        error_log("Join Competition error: " . var_export($e, true));
    }
    return false;
}

function update_participants($comp_id)
{
    $db = getDB();
    $stmt = $db->prepare("UPDATE Competitions set current_participants = (SELECT IFNULL(COUNT(1),0) FROM UserComps WHERE competition_id = :cid), 
    current_reward = IF(join_cost > 0, current_reward + CEILING(join_cost * 0.5), current_reward) WHERE id = :cid");
    try {
        $stmt->execute([":cid" => $comp_id]);
        return true;
    } catch (PDOException $e) {
        error_log("Update competition participant error: " . var_export($e, true));
    }
    return false;
}

function calc_winners(){
    $db = getDB();
    $calced_comps = [];
    $stmt = $db->prepare("select c.id,c.title, first_place_per, second_place_per, third_place_per, current_reward 
    from Competitions c where expires <= CURRENT_TIMESTAMP() AND did_calc = 0 AND current_participants >= min_participants LIMIT 10");
    try {
        $stmt->execute();
        $r = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if ($r) {
            $rc = $stmt->rowCount();
            foreach ($r as $row) {
                $fp = floatval(se($row, "first_place_per", 0, false) / 100);
                $sp = floatval(se($row, "second_place_per", 0, false) / 100);
                $tp = floatval(se($row, "third_place_per", 0, false) / 100);
                $reward = (int)se($row, "current_reward", 0, false);
                $title = se($row, "title", "-", false);
                $fpr = ceil($reward * $fp);
                $spr = ceil($reward * $sp);
                $tpr = ceil($reward * $tp);
                $comp_id = se($row, "id", -1, false);
               
                $r = get_top_scores_comp($comp_id);
                if ($r) {
                    $atleastOne = false;
                    foreach ($r as $index => $row) {
                        //$aid = se($row, "account_id", -1, false);
                        $score = se($row, "score", 0, false);
                        $user_id = se($row, "user_id", -1, false);
                        if ($index == 0) {
                            change_points($user_id, $fpr, "First place in $title with score of $score");
                            update_points($user_id);
                            $atleastOne = true;       
    
                        } else if ($index == 1) {
                            change_points($user_id, $spr, "Second place in $title with score of $score");
                            update_points($user_id);
                            $atleastOne = true;

                        } else if ($index == 2) {
                            change_points($user_id, $tpr, "Third place in $title with score of $score");
                            update_points($user_id);
                            $atleastOne = true;
                        }
                    }
                    if ($atleastOne) {
                        array_push($calced_comps, $comp_id);
                    }
                } else {
                    //elog("No eligible scores");
                    debug_to_console("No eligible scores");
                    flash("No eligible scores");
                }
                
            }
        }   
    }
    catch (PDOException $e) {
        error_log("Getting Expired Comps error: " . var_export($e, true));
    }
    if (count($calced_comps) > 0) {
        $query = "UPDATE Competitions set did_calc = 1, did_payout = 1 WHERE id=:comp_id";
        foreach($calced_comps as $comp_id){
            $stmt = $db->prepare($query);
            try {
                $stmt->execute([":comp_id" => $comp_id]);
                $updated = $stmt->rowCount();
                debug_to_console($updated . " comps complete and calced");
                //elog("Marked $updated comps complete and calced");
            } catch (PDOException $e) {
                error_log("Closing valid comps error: " . var_export($e, true));
            }        
        }
    
    } else {
        //elog("No competitions to calc");
    }
    //close invalid comps
    $stmt = $db->prepare("UPDATE Competitions set did_calc = 1 WHERE expires <= CURRENT_TIMESTAMP() AND current_participants < min_participants AND did_calc = 0");
    try {
        $stmt->execute();
        $rows = $stmt->rowCount();
        debug_to_console("Closed " . $rows);
    } catch (PDOException $e) {
        error_log("Closing invalid comps error: " . var_export($e, true));
    }
    //elog("Done calc winners");
}
  

function get_top_scores_comp($comp_id){
    $db = getDB();
    $query = "SELECT DISTINCT score, Scores.user_id FROM Scores JOIN UserComps ON UserComps.competition_id = :comp_id 
    WHERE Scores.created > UserComps.created ORDER by score desc LIMIT 3";
    $stmt = $db->prepare($query);
    $results=[];
    try {
        $stmt->execute([":comp_id" => $comp_id]);
        $r = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if ($r) {
            $results = $r;
        }
    } catch (PDOException $e) {
        error_log("Error fetching top scores for competition: ${comp_id}" . var_export($e->errorInfo, true));
    }
    return $results;
}


function debug_to_console($data) {
    $output = $data;
    if (is_array($output))
        $output = implode(',', $output);

    echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
}