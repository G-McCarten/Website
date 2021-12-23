<?php
require(__DIR__ . "/../../partials/nav.php");
require(__DIR__ . "/../../lib/score_functions.php");
?>

<?php
if (is_logged_in(true)) {
    //comment this out if you don't want to see the session variables
    //echo "<pre>" . var_export($_SESSION, true) . "</pre>";
}
$start = 0;  $per_page = 10;
$page_counter = 0;
$next = $page_counter + 1;
$previous = $page_counter - 1;

$scoreTableSize = get_ScoreRowCount(get_user_id());

if(isset($_GET['start'])){
    $start = $_GET['start'];
    $page_counter =  $_GET['start'];
    $start = $start *  $per_page;
    $next = $page_counter + 1;
    $previous = $page_counter - 1;
   }

$lastScores = get_last_scores($start, $per_page);
$paginations = ceil($scoreTableSize / $per_page);
?>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
</head>
<div class="container-fluid">
        <div class="table-responsive" style="width: 600px; border: 1px solid black; margin: 10px;">
            <table class="w3-table-all">
            <caption>Your Scores</caption>
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
                    }?> 
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
         
</div>  

<?php
$time_period = "week";
$leaderboard = get_top_10("$time_period");
if (!empty($leaderboard[0])){
    include 'leaderboard.php'; }
    else{
        echo "No " . $time_period . " scores to display";
    }
    

$time_period = "month";
$leaderboard = get_top_10("$time_period");
if (!empty($leaderboard[0])){
    include 'leaderboard.php'; }
    else{
        echo "No " . $time_period . " scores to display";
    }
    


$time_period = "lifetime";
$leaderboard = get_top_10("$time_period");
if (!empty($leaderboard[0])){
    include 'leaderboard.php'; }
    else{
        echo "No " . $time_period . " scores to display";
    }
    
?> 
 
<?php
//ch = competition history 
$ch_start = 0;  $ch_per_page = 10;
$ch_page_counter = 0;
$ch_next = $ch_page_counter + 1;
$ch_previous = $ch_page_counter - 1;

//$ch_scoreTableSize = get_rowCount("");

if(isset($_GET['ch_start'])){
    $ch_start = $_GET['ch_start'];
    $ch_page_counter =  $_GET['ch_start'];
    $ch_start = $ch_start *  $ch_per_page;
    $ch_next = $ch_page_counter + 1;
    $ch_previous = $ch_page_counter - 1;
   }

$compHistory = get_competition_history($ch_start, $ch_per_page, (int)get_user_id(), false);
$ch_Size = get_competition_history($ch_start, $ch_per_page, (int)get_user_id(), true);
//$lastScores = get_last_scores($start, $per_page);
$ch_paginations = ceil($ch_Size / $ch_per_page);?>


<body style="color:red;">
<div class="container-fluid mt-5" style="margin-top:auto;">
<div class="table-responsive" style="width: 600px; border: 1px solid black; margin: 10px;">
        <table class="w3-table-all">
        <caption>Your Past Competitions</caption>
                <thead class="table-info">
                 <th scope="col" class="bg-primary" >Title</th>
                 <th scope="col" class="bg-primary">Expired</th>
                 <th scope="col" class="bg-primary">Actions</th>
                </thead>
                <tbody>
                <?php 
                if (count($compHistory) > 0) : 
                    foreach($compHistory as $data) { 
                        debug_to_console($data);
                        echo '<tr>';
                        echo '<td>'.$data['title'].'</td>';
                        echo '<td>'.$data['expires'].'</td>';
                        echo "<td><a href=\"view_competition.php?id=" . $data['id'] . "\">" . "View" . "</a></td>";
                        echo '</tr>';
                    }?>
                </tbody>
            </table>
            <ul class="pagination">
            <?php
                if($ch_page_counter == 0){
                    echo "<li><a href=?ch_start='0' class='active'>0</a></li>";
                    for($j=1; $j < $ch_paginations; $j++) { 
                      echo "<li><a href=?ch_start=$j>".$j."</a></li>";
                   }
                }else{
                    echo "<li><a href=?ch_start=$ch_previous>Previous</a></li>"; 
                    for($j=0; $j < $ch_paginations; $j++) {
                     if($j == $ch_page_counter) {
                        echo "<li><a href=?ch_start=$j class='active'>".$j."</a></li>";
                     }else{
                        echo "<li><a href=?ch_start=$j>".$j."</a></li>";
                     } 
                  }if($j != $ch_page_counter+1)
                    echo "<li><a href=?ch_start=$next>Next</a></li>"; 
                } 
            ?>
            <?php else: ?>
                <tr>
                    <td colspan="100%">No past competitions</td>
                </tr>
            <?php endif ?>
            </ul> 
        </div>  
</div>

<?php
require(__DIR__ . "/../../partials/flash.php");
?>
