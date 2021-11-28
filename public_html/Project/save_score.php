<?php
require_once('../../lib/functions.php');
session_start();

if(isset($_POST)){
    //$score = se($_POST, "score", "", false);
    
    $score = $_POST['score'];
    $user_id = $_SESSION['user']['id'];
    $db = getDB();
    
    $stmt = $db->prepare("INSERT INTO Scores (score, user_id) VALUES(:score, :user_id)");
    try {
        $stmt->execute([":score" => $score, ":user_id" => $user_id]);
        flash("Successfully registered!");
    } catch (Exception $e) {
        users_check_duplicate($e->errorInfo);
    }
}
?>


