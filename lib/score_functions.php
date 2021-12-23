<?php
require_once(__DIR__ . "/db.php");
$BASE_PATH = '/Project/'; //This is going to be a helper for redirecting to our base project path since it's nested in another folder

function get_last_scores($start, $per_page){
    $user_id = $_SESSION['user']['id'];
    $db = getDB();
    $query = "Select score, created from Scores WHERE user_id = :id ORDER BY created desc LIMIT $start, $per_page";
    $stmt = $db->prepare($query);
    try {
        $stmt->execute([":id" => $user_id]);
        $r = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if ($r) {
            $results = $r;
        }
    } catch (PDOException $e) {
        error_log("Error fetching scores for $db: " . var_export($e->errorInfo, true));
    }
    return $results;

}

function get_scoreTableSize(){
    $user_id = $_SESSION['user']['id'];
    $db = getDB();
    $query = "Select * FROM Scores WHERE user_id = :id" ;
    $stmt = $db->prepare($query);
    try {
        $stmt->execute([":id" => $user_id]);
        $count = $stmt->rowCount();
    } catch (PDOException $e) {
        error_log("Error fetching scores for $db: " . var_export($e->errorInfo, true));
    }
    return $count;
}

function get_top_10($duration = "day")
{
    $d = "day";
    if (in_array($duration, ["day", "week", "month", "lifetime"])) {
        //variable is safe
        $d = $duration;
       }
       $db = getDB();
       $query = "SELECT user_id,username, score, Scores.created from Scores join Users on Scores.user_id = Users.id";
       if ($d !== "lifetime") {
           //be very careful passing in a variable directly to SQL, I ensure it's a specific value from the in_array() above
           $query .= " WHERE Scores.created >= DATE_SUB(NOW(), INTERVAL 1 $d)";
       }
       //remember to prefix any ambiguous columns (Users and Scores both have created)
       $query .= " ORDER BY score Desc, Scores.created desc LIMIT 10"; //newest of the same score is ranked higher
       error_log($query);
       $stmt = $db->prepare($query);
       $results = [];
       try {
           $stmt->execute();
           $r = $stmt->fetchAll(PDO::FETCH_ASSOC);
           if ($r) {
               $results = $r;
           }
       } catch (PDOException $e) {
           error_log("Error fetching scores for $d: " . var_export($e->errorInfo, true));
       }
       return $results;
}
