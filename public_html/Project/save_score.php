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
}
?>


