<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
<?php
require_once(__DIR__ . "/../../partials/nav.php");
is_logged_in(true);
?>

<?php
$start = 0;  $per_page = 10;
$page_counter = 0;
$next = $page_counter + 1;
$previous = $page_counter - 1;

if(isset($_GET['start'])){
    $start = $_GET['start'];
    $page_counter =  $_GET['start'];
    $start = $start *  $per_page;
    $next = $page_counter + 1;
    $previous = $page_counter - 1;
   }

if (isset($_POST["join"])) {
    $user_id = get_user_id();
    $comp_id = se($_POST, "comp_id", 0, false);
    $cost = se($_POST, "cost", 0, false);
    if(get_Points() >= $cost){
        add_to_competition($comp_id, $user_id);
        change_points($user_id, -$cost, "Joined competition id: " . $comp_id);
    }
else{ flash("Not enough points"); }
}

$competitions = get_ActiveCompetitions($start, $per_page, false);
$comp_Size = get_ActiveCompetitions($start, $per_page, true);
//$lastScores = get_last_scores($start, $per_page);
$paginations = ceil($comp_Size / $per_page);?>

<div class="container-fluid">
<h3 display="inline">Active Competitions</h3>
<h3 class="ml-20" display="inline"><a href="<?php echo get_url('create_competition.php'); ?>">Create Competition</a></h3>
    <table class="table-auto w3-table-all text-black">
        <thead>
            <th>Title</th>
            <th>Participants</th>
            <th>Reward</th>
            <th>Min Score</th>
            <th>Expires</th>
            <th>Actions</th>
        </thead>
        <tbody>
            <?php if (count($competitions) > 0) : ?>
                <?php foreach ($competitions as $row) : ?>
                    <tr>
                        <td><?php se($row, "title"); ?></td>
                        <td><?php se($row, "current_participants"); ?>/<?php se($row, "min_participants"); ?></td>
                        <td><?php se($row, "current_reward"); ?><br>Payout: <?php se($row, "place", "-"); ?></td>
                        <td><?php se($row, "min_score"); ?></td>
                        <td><?php se($row, "expires", "-"); ?></td>
                        <td>
                            <?php if (se($row, "joined", 0, false)) : ?>
                                <button class="btn btn-primary disabled" onclick="event.preventDefault()" disabled>Already Joined</button>
                            <?php else : ?>
                                <form method="POST">
                                    <input type="hidden" name="comp_id" value="<?php se($row, 'id'); ?>" />
                                    <input type="hidden" name="cost" value="<?php se($row, 'join_cost', 0); ?>" />
                                    <input type="submit" name="join" class="btn btn-primary" value="Join (Cost: <?php se($row, "join_cost", 0) ?>)" />
                                </form>
                            <?php endif; ?>
                            <a class="btn btn-secondary" href="view_competition.php?id=<?php se($row, 'id'); ?>">View</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else : ?>
                <tr>
                    <td colspan="100%">No active competitions</td>
                </tr>
            <?php endif; ?>
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

