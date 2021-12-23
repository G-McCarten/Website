<?php
require_once(__DIR__ . "/../../partials/nav.php");
is_logged_in(true);
?>

<?php

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

if (isset($_GET['id'])){
    $comp_id = $_GET['id'];
}
//get compeition
$competition = getCompetition($comp_id); 

$top_scores = get_top_scores_comp($comp_id, 10);
?>

<div class="container-fluid">
    <table class="table-auto w3-table-all text-black">
        <thead>
            <th>Title</th>
            <th>Participants</th>
            <th>Reward</th>
            <th>Min Score</th>
            <th>Paid Out</th>
            <th>Calculated Winners</th>
            <th>Created</th>
            <th>Duration</th>
            <th>Expires</th>
            <th>Actions</th>
        </thead>
        <tbody>
                <?php foreach ($competition as $row) : ?>
                    <tr>
                        <td><?php se($row, "title"); ?></td>
                        <td><?php se($row, "current_participants"); ?>/<?php se($row, "min_participants"); ?></td>
                        <td><?php se($row, "current_reward"); ?><br>Payout: <?php se($row, "place", "-"); ?></td>
                        <td><?php se($row, "min_score"); ?></td>
                        <td><?php se($row, "did_payout"); ?></td>
                        <td><?php se($row, "did_calc"); ?></td>
                        <td><?php se($row, "created", "-"); ?></td>
                        <td><?php se($row, "duration"); ?> Day  </td>
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
                            <?php if (has_role("Admin") and $row['did_payout'] == 0): ?>
                                <a class="btn btn-secondary" href="edit_competition.php?id=<?php se($row, 'id'); ?>">Edit</a>
                            <?php endif; ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php
if (!empty($top_scores[0])){
    echo "<div class='w3-container'>";
    echo "<h2>Leaderboard</h2>";
    echo "<table class='table-auto w3-table-all'>
        <tr>
        <th>Username</th>
        <th>Score</th>
        <th>Date</th>
        </tr>";
    
    foreach ($top_scores as $row) {
      $username = get_usernameFromId($row['user_id']);
      echo "<tr>";
      echo "<td><a href=\"view_profile.php?id=" . $row['user_id'] . "\">" .  $username . "</a></td>";
      echo "<td>" . $row['score'] . "</td>";
      echo "<td>" . $row['created'] . "</td>";
      }
    echo "</table>"; }
    else{
        echo "<h2>No top scores to display</h2>";
    }
    echo "</div>";
?> 
