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

//get activ compeitions
$db = getDB();
$stmt = $db->prepare("SELECT Competitions.id, title, min_participants, current_participants, current_reward, expires, 
creator_id, min_score, join_cost, IF(competition_id is null, 0, 1) as joined,  CONCAT(first_place_per,'% - ', second_place_per, 
'% - ', third_place_per, '%') as place FROM Competitions LEFT JOIN (SELECT * FROM UserComps WHERE user_id = :uid) as uc 
ON uc.competition_id = Competitions.id WHERE expires > current_timestamp() AND did_payout < 1 AND did_calc < 1 ORDER BY expires desc");

$results = [];
try {
    $stmt->execute([":uid" => get_user_id()]);
    $r = $stmt->fetchAll();
    if ($r) {
        $results = $r;
    }
} catch (PDOException $e) {
    flash("There was a problem fetching competitions, please try again later", "danger");
    error_log("List competitions error: " . var_export($e, true));
}

?>
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
            <?php if (count($results) > 0) : ?>
                <?php foreach ($results as $row) : ?>
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
</div>

