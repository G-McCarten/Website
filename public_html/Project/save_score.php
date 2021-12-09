<?php
require_once('../../lib/functions.php');
session_start();

//$json = file_get_contents('php://input');
//$data = json_decode($json, true)["data"];
$data = $_POST;
if(isset($_POST)){
    $score = (int)se($data, 'score', 0, false);
    //$score = $_POST['score'];
    $user_id = $_SESSION['user']['id'];
    $db = getDB();
    $stmt = $db->prepare("INSERT INTO Scores (score, user_id) VALUES(:score, :user_id)");
    try {
        $stmt->execute([":score" => $score, ":user_id" => $user_id]);
        flash("Saved score");
    } catch (Exception $e) {
        flash("error Saving score");
        //users_check_duplicate($e->errorInfo);
    }

    //convert score to points and insert into PointsHistory
    $point_change = (0.1) * $score;
    $stmt = $db->prepare("INSERT INTO PointsHistory (point_change, user_id, reason) VALUES(:point_change, :user_id, :reason)");
    try {
        $stmt->execute([":point_change" => $point_change, ":user_id" => $user_id, ":reason" => "finished game"]);
        flash("Saved score");
    } catch (Exception $e) {
        flash("error converting score");
        //users_check_duplicate($e->errorInfo);
    }

    debug_to_console("updating points");
    update_points($user_id);
}
?>


