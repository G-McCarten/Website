<?php
require(__DIR__ . "/../../partials/nav.php");
require(__DIR__ . "/../../lib/score_functions.php");
?>
<h1>Home</h1>
<?php
if (is_logged_in(true)) {
    echo "Welcome home, " . get_username() . "<br><br>";
    //comment this out if you don't want to see the session variables
    //echo "<pre>" . var_export($_SESSION, true) . "</pre>";
}



$last10Scores = get_last_10_scores();
if (!empty($last10Scores[0])){
    echo "<div class='w3-container'>";
    echo "<h2>Your last 10 scores</h2>";
    echo "<table class='table-auto w3-table-all'>
        <tr>
        <th>Score</th>
        <th>Date</th>
        </tr>";
    
    foreach ($last10Scores as $row) {
      echo "<tr>";
      echo "<td>" . $row['score'] . "</td>";
      echo "<td>" . $row['created'] . "</td>";
      }
    echo "</table>";
    echo "</div>";
}

$time_period = "week";
$leaderboard = get_top_10("$time_period");
if (!empty($leaderboard[0])){
    echo "<div class='w3-container'>";
    echo "<h2>Leaderboard</h2>";
    echo "<table class='table-auto w3-table-all'>
        <tr>
        <th>Username</th>
        <th>Score</th>
        <th>Date</th>
        </tr>";
    
    foreach ($leaderboard as $row) {
      echo "<tr>";
      echo "<td>" . $row['username'] . "</td>";
      echo "<td>" . $row['score'] . "</td>";
      echo "<td>" . $row['created'] . "</td>";
      }
    echo "</table>"; }
    else{
        echo "No " . $time_period . " scores to display";
    }
    echo "</div>";
?> 



<?php
require(__DIR__ . "/../../partials/flash.php");
?>
