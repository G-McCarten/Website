<?php
    echo "<table class='w3-table-all leaderboard' style='width: 400px; border: 1px solid black; margin: 10px;'>
        <caption>Leaderboard: $time_period</caption>
        <tr>
        <th>Username</th>
        <th>Score</th>
        <th>Date</th>
        </tr>";
    
    foreach ($leaderboard as $row) {
      echo "<tr>";
      echo "<td><a href=\"view_profile.php?id=" . $row['user_id'] . "\">" .  $row['username'] . "</a></td>";
      echo "<td>" . $row['score'] . "</td>";
      echo "<td>" . $row['created'] . "</td>";
      }
    echo "</table>"; 
?> 

<style>caption { 
  display: table-caption;
  text-align: center;
}</style>