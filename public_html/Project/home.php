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
$start = 0;  $per_page = 4;
$page_counter = 0;
$next = $page_counter + 1;
$previous = $page_counter - 1;

$scoreTableSize = get_scoreTableSize();

if(isset($_GET['start'])){
    $start = $_GET['start'];
    $page_counter =  $_GET['start'];
    $start = $start *  $per_page;
    $next = $page_counter + 1;
    $previous = $page_counter - 1;
   }

$lastScores = get_last_scores($start, $per_page);
$paginations = ceil($scoreTableSize / $per_page);

$time_period = "week";
$leaderboard = get_top_10("$time_period");
?>

<head>
        <title >Pagination</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    </head>
    <body style="color:red;">
       
        <div class="table-responsive" style="width: 600px; border: 1px solid black; margin: 10px;">
            <table class="table table-striped" class="table table-hover">
                <thead class="table-info">
                 <th scope="col" class="bg-primary" >Score</th>
                 <th scope="col" class="bg-primary">Date</th>
                </thead>
                <tbody>
                <?php 
                    foreach($lastScores as $data) { 
                        echo '<tr>';
                        echo '<td>'.$data['score'].'</td>';
                        echo '<td>'.$data['created'].'</td>';
                        echo '</tr>';
                    }
                 ?>
                </tbody>
            </table>
            <ul class="pagination">
            <?php
                if($page_counter == 0){
                    echo "<li><a href=?start='0' class='active'>0</a></li>";
                    for($j=1; $j < $paginations; $j++) { 
                      echo "<li><a href=?start=$j>".$j."</a></li>";
                   }
                }else{
                    echo "<li><a href=?start=$previous>Previous</a></li>"; 
                    for($j=0; $j < $paginations; $j++) {
                     if($j == $page_counter) {
                        echo "<li><a href=?start=$j class='active'>".$j."</a></li>";
                     }else{
                        echo "<li><a href=?start=$j>".$j."</a></li>";
                     } 
                  }if($j != $page_counter+1)
                    echo "<li><a href=?start=$next>Next</a></li>"; 
                } 
            ?>
            </ul> 
        </div>  
    </body>

<?php
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
      echo "<td><a href=\"view_profile.php?id=" . $row['user_id'] . "\">" .  $row['username'] . "</a></td>";
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
