<?php
require_once(__DIR__ . "/../../partials/nav.php");
is_logged_in(true);
if (isset($_GET['id'])){
    $comp_id = $_GET['id'];
}
?>

<?php
if (isset($_POST["edit_competition"])) {
    $comp_name = se($_POST, "comp_name", null, false);
    $comp_winnings = se($_POST, "comp_winnings", null, false);
    $comp_join_cost = se($_POST, "comp_join_cost", null, false);
    $comp_duration = se($_POST, "comp_duration", null, false);
    $comp_min_score = se($_POST, "comp_min_score", null, false);
    $comp_min_participants = se($_POST, "comp_min_participants", null, false);
    $comp_current_reward = se($_POST, "comp_current_reward", null, false);
    $hasError = false;

    //isolate winning percentages
    $percentages = explode(',', $comp_winnings);
    $firstPlace = $percentages[0];
    $secondPlace = $percentages[1];
    $thirdPlace = $percentages[2];

    if ($firstPlace + $secondPlace + $thirdPlace != 100){
        flash("Percentages do not add up to 100");
        $hasError = true;
    }

    if (!$hasError) {
        $params = [":title" => $comp_name, ":min_participants" => $comp_min_participants, ":join_cost" => $comp_join_cost, 
        ":current_reward" => $comp_current_reward, ":first_place_per" => $firstPlace, "second_place_per" => $secondPlace, ":third_place_per" => $thirdPlace, 
        ":duration" => $comp_duration, ":min_score" => $comp_min_score, ":id" => $comp_id];
        $db = getDB();
        $stmt = $db->prepare("UPDATE Competitions set title = :title, min_participants = :min_participants, join_cost = :join_cost, 
        current_reward = :current_reward, first_place_per = :first_place_per, second_place_per = :second_place_per, 
        third_place_per = :third_place_per, duration = :duration, min_score = :min_score where id = :id");
        try {
            $stmt->execute($params);
        } catch (Exception $e) {
            debug_to_console("error");
            //users_check_duplicate($e->errorInfo);
        }
    }   
}
?>

<?php 
//get compeition
$competition = getCompetition($comp_id)[0]; 
//var_dump($competition);
?>
<?php
if (is_logged_in(true)) {?>
    <div class="form-box position2">
        <h2>Edit Competition</h2> 
        <form method="POST">
        <div class="input-box">
            <input type="text" name="comp_name" id="comp_name" value="<?php se($competition, "title"); ?>   "/>
            <label for="comp_name">Competition Name</label>
        </div>
        <div class="input-box">
            <input type="text" name="comp_winnings" id="comp_winnings" value="<?php se($competition, "first_place_per")?>,<?php se($competition, "second_place_per")?>,<?php se($competition, "third_place_per")?>" oninput="validity.valid||(value='');"/>
            <label for="comp_winnings">1st, 2nd, 3rd place winnings</label>
        </div>
        <div class="input-box">
            <input type="number" name="comp_join_cost" id="comp_join_cost" value="<?php se($competition, "join_cost") ?>" min="0"  oninput="validity.valid||(value='');"/>
            <label for="comp_join_cost">Cost to Join (0 => Free)</label>
        </div>
        <div class="input-box">
            <input type="number" name="comp_duration" id="comp_duration" value="<?php se($competition, "duration"); ?>" min="1" oninput="validity.valid||(value='');"/>
            <label for="np">Duration in Days</label>
        </div>
        <div class="input-box">
            <input type="number" name="comp_min_score" id="comp_min_score" value="<?php se($competition, "min_score"); ?>" min="1" oninput="validity.valid||(value='');"/>
            <label for="comp_min_score">Minimum score to qualify</label>
        </div>
        <div class="input-box">
            <input type="number" name="comp_min_participants" id="comp_min_participants" value="<?php se($competition, "min_participants"); ?>" min="3" oninput="validity.valid||(value='');" />
            <label for="comp_min_particpants">Minimum particpants for payout</label>
        </div>
        <div class="input-box">
            <input type="number" name="comp_current_reward" id="comp_current_reward" value="<?php se($competition, "current_reward"); ?>" min="1" oninput="validity.valid||(value='');"/>
            <label for="comp_current_reward">Current Reward</label>
        </div>
        
        <a href="#">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <div style="display:inline-block;">
            <input type="submit" value="Edit Competition" name="edit_competition" id="create_competition"/> 
          </div>
        </a>
        </form>
    </div>
<?php } ?>