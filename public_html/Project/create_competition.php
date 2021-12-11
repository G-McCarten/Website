<?php
require(__DIR__ . "/../../partials/nav.php"); 
is_logged_in(true); 

//echo '<pre>'; var_dump($_SESSION); echo '</pre>';
if (isset($_POST["create_competition"])) {
    $comp_name = se($_POST, "comp_name", null, false);
    $comp_winnings = se($_POST, "comp_winnings", null, false);
    $comp_join_cost = se($_POST, "comp_join_cost", null, false);
    $comp_duration = se($_POST, "comp_duration", null, false);
    $comp_min_score = se($_POST, "comp_min_score", null, false);
    $comp_min_participants = se($_POST, "comp_min_participants", null, false);
    $comp_startings_reward = se($_POST, "comp_starting_reward", null, false);
    $hasError = false;

    $user_id = get_user_id();
    $user_points = $_SESSION['user']['points'];
    $create_cost = ($comp_startings_reward+1) + $comp_join_cost;

    //isolate winning percentages
    $percentages = explode(',', $comp_winnings);
    $firstPlace = $percentages[0];
    $secondPlace = $percentages[1];
    $thirdPlace = $percentages[2];

    if ($firstPlace + $secondPlace + $thirdPlace != 100){
        flash("Percentages do not add up to 100");
        $hasError = true;
    }

    if($user_points < $create_cost){
        flash("Not enough points to create competition");
        $hasError = true;
    }

    if (!$hasError){
        //create 1 competition entry
        $db = getDB();
        $query = "INSERT INTO Competitions (title, min_participants, current_participants, join_cost, create_cost, starting_reward, 
        first_place_per, second_place_per, third_place_per, did_calc, did_payout, duration, creator_id, min_score, current_reward) 
        VALUES(:title, :min_participants, :current_participants, :join_cost, :create_cost, :starting_reward, 
        :first_place_per, :second_place_per, :third_place_per, :did_calc, :did_payout, :duration, :creator_id, :min_score, :current_reward)";
        
        $params = [":title" => $comp_name, ":min_participants" => $comp_min_participants, ":current_participants" => 1, ":join_cost" => $comp_join_cost, 
        ":create_cost" => $create_cost, ":starting_reward" => $comp_startings_reward, ":first_place_per" => $firstPlace, "second_place_per" => $secondPlace, ":third_place_per" => $thirdPlace, 
        ":did_calc" => 0, ":did_payout" => 0, ":duration" => $comp_duration, ":creator_id" => $user_id, ":min_score" => $comp_min_score, 
        ":current_reward" => $comp_startings_reward];
        $stmt = $db->prepare($query);
        try {
            $stmt->execute($params);
            flash("Competition was created");
        } catch (Exception $e) {
            flash("Error creating competition");
        }
        $comp_id = $db->lastInsertId();
        //add user to competition
        //get id of competition just created
        add_to_competition($comp_id, $user_id);
        deduct_points($user_id, -$create_cost, "Created and joined own competition");
    }   
}
?>
<?php
$email = get_user_email();
$username = get_username(); ?>
<?php
if (is_logged_in(true)) {?>
    <div class="form-box position2">
        <h2>Create Competition</h2> 
        <form method="POST">
        <div class="input-box">
            <input type="text" name="comp_name" id="comp_name"/>
            <label for="comp_name">Competition Name</label>
        </div>
        <div class="input-box">
            <input type="text" name="comp_winnings" id="comp_winnings" value="70,20,10" oninput="validity.valid||(value='');"/>
            <label for="comp_winnings">1st, 2nd, 3rd place winnings</label>
        </div>
        <div class="input-box">
            <input type="number" name="comp_join_cost" id="comp_join_cost" value="0" min="0" onchange="updateCost()" oninput="validity.valid||(value='');"/>
            <label for="comp_join_cost">Cost to Join (0 => Free)</label>
        </div>
        <div class="input-box">
            <input type="number" name="comp_duration" id="comp_duration" value="1" min="1" oninput="validity.valid||(value='');"/>
            <label for="np">Duration in Days</label>
        </div>
        <div class="input-box">
            <input type="number" name="comp_min_score" id="comp_min_score" value="1" min="1" oninput="validity.valid||(value='');"/>
            <label for="comp_min_score">Minimum score to qualify</label>
        </div>
        <div class="input-box">
            <input type="number" name="comp_min_participants" id="comp_min_participants" value="3" min="3" oninput="validity.valid||(value='');" />
            <label for="comp_min_particpants">Minimum particpants for payout</label>
        </div>
        <div class="input-box">
            <input type="number" name="comp_starting_reward" id="comp_starting_reward" value="1" min="1" oninput="validity.valid||(value='');" onchange="updateCost()"/>
            <label for="comp_starting_reward">Starting Reward</label>
        </div>
        
        <a href="#">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <div style="display:inline-block;">
            <input type="submit" value="Create Competition" name="create_competition" id="create_competition"/> 
          </div>
        </a>
        <label id="costLabel" class="ml-8 text-white font-bold text-3xl" for="create_competition">Cost: 0</label>
        </form>
    </div>
<?php } ?>

<script>
        function updateCost() {
            console.log("Change");
            let cost_text = document.getElementById("costLabel");
            let starting = parseInt(document.getElementById("comp_starting_reward").value) + 1;
            let join = parseInt(document.getElementById("comp_join_cost").value || 0);
            if (join < 0) {
              join = 1;
            }
            let cost = starting + join;
            cost_text.innerHTML = `Cost: ${cost}`;
        }
    </script>

<?php
require(__DIR__ . "/../../partials/flash.php");
?>