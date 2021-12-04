<?php
require(__DIR__ . "/../../partials/nav.php");
require(__DIR__ . "/../../lib/score_functions.php");
?>
<h1>Home</h1>
<?php
if (is_logged_in(true)) {
    echo "Welcome home, " . get_username();
    //comment this out if you don't want to see the session variables
    echo "<pre>" . var_export($_SESSION, true) . "</pre>";
}

$last10Scores = get_last_10_scores();
echo "Your last 10 scores";
echo "<table border=4 bgcolor='white' class='table-auto'>
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
?> 



<?php
require(__DIR__ . "/../../partials/flash.php");
?>
