<?php
require_once(__DIR__ . "/../../partials/nav.php");
is_logged_in(true);
?>
<?php
if (isset($_POST["save"])) {
    $email = se($_POST, "email", null, false);
    $username = se($_POST, "username", null, false);
    $hasError = false;
    //sanitize
    $email = sanitize_email($email);
    //validate
    if (!is_valid_email($email)) {
        flash("Invalid email address", "danger");
        $hasError = true;
    }
    if (!preg_match('/^[a-z0-9_-]{3,16}$/i', $username)) {
        flash("Username must only be alphanumeric and can only contain - or _", "danger");
        $hasError = true;
    }
    if (!$hasError) {
        $params = [":email" => $email, ":username" => $username, ":id" => get_user_id()];
        $db = getDB();
        $stmt = $db->prepare("UPDATE Users set email = :email, username = :username where id = :id");
        try {
            $stmt->execute($params);
        } catch (Exception $e) {
            users_check_duplicate($e->errorInfo);
        }
    }
    //select fresh data from table
    $stmt = $db->prepare("SELECT id, email, IFNULL(username, email) as `username` from Users where id = :id LIMIT 1");
    try {
        $stmt->execute([":id" => get_user_id()]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($user) {
            //$_SESSION["user"] = $user;
            $_SESSION["user"]["email"] = $user["email"];
            $_SESSION["user"]["username"] = $user["username"];
        } else {
            flash("User doesn't exist", "danger");
        }
    } catch (Exception $e) {
        flash("An unexpected error occurred, please try again", "danger");
        //echo "<pre>" . var_export($e->errorInfo, true) . "</pre>";
    }


    //check/update password
    $current_password = se($_POST, "currentPassword", null, false);
    $new_password = se($_POST, "newPassword", null, false);
    $confirm_password = se($_POST, "confirmPassword", null, false);
    if (!empty($current_password) && !empty($new_password) && !empty($confirm_password)) {
        if ($new_password === $confirm_password) {
            //TODO validate current
            $stmt = $db->prepare("SELECT password from Users where id = :id");
            try {
                $stmt->execute([":id" => get_user_id()]);
                $result = $stmt->fetch(PDO::FETCH_ASSOC);
                if (isset($result["password"])) {
                    if (password_verify($current_password, $result["password"])) {
                        $query = "UPDATE Users set password = :password where id = :id";
                        $stmt = $db->prepare($query);
                        $stmt->execute([
                            ":id" => get_user_id(),
                            ":password" => password_hash($new_password, PASSWORD_BCRYPT)
                        ]);

                        flash("Password reset", "success");
                    } else {
                        flash("Current password is invalid", "warning");
                    }
                }
            } catch (Exception $e) {
                echo "<pre>" . var_export($e->errorInfo, true) . "</pre>";
            }
        } else {
            flash("New passwords don't match", "warning");
        }
    }
}
?>

<?php
$email = get_user_email();
$username = get_username();
$points = get_Points();
?>
<div class="row">
  <div class="column left" style="background-color:#aaa;">
    <div class="form-box position1">
<h2>Update Information</h2> 
<form method="POST" onsubmit="return validate(this);">
    <div class="input-box">
        <input type="email" name="email" id="email" value="<?php se($email); ?>" />
        <label for="email">Email</label>
    </div>
    <div class="input-box">
        <input type="text" name="username" id="username" value="<?php se($username); ?>" />
        <label for="username">Username</label>
    </div>
    <!-- DO NOT PRELOAD PASSWORD input-box -->
    <div>Password Reset </div> <br><br>
    <div class="input-box">
        <input type="password" name="currentPassword" id="cp" />
        <label for="cp">Current Password</label>
    </div>
    <div class="input-box">
        <input type="password" name="newPassword" id="np" />
        <label for="np">New Password</label>
    </div>
    <div class="input-box">
        <input type="password" name="confirmPassword" id="conp" />
        <label for="conp">Confirm Password</label>
    </div>
    <a href="#">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <input type="submit" value="Update Profile" name="save" />
    </a>
</form>
</div>
  </div>
  <div class="column middle" style="background-color:#bbb;">
  <br>
    <div class="inline pl-5 ml-5 inset-0 flex items-center justify-center">
        <div class="bg-white max-w-md w-full p-6 text-center"> <p>Your points: <?php echo($points)?></p>
    </div>
  </div>
        <br><li><a href="<?php echo get_url('create_competition.php'); ?>">Create Competition</a></li>
  </div>
  <div class="column right" style="background-color:#ccc;">
    <p>Some text..</p>
  </div>
</div>



  
<script>
    function validate(form) {
        let pw = form.newPassword.value;
        let con = form.confirmPassword.value;
        let isValid = true;
        //TODO add other client side validation....

        //example of using flash via javascript
        //find the flash container, create a new element, appendChild
        if (pw !== con) {
            //find the container
            let flash = document.getElementById("flash");
            //create a div (or whatever wrapper we want)
            let outerDiv = document.createElement("div");
            outerDiv.className = "row justify-content-center";
            let innerDiv = document.createElement("div");
            //apply the CSS (these are bootstrap classes which we'll learn later)
            innerDiv.className = "alert alert-warning";
            //set the content
            innerDiv.innerText = "Password and Confirm password must match";
            outerDiv.appendChild(innerDiv);
            //add the element to the DOM (if we don't it merely exists in memory)
            flash.appendChild(outerDiv);
            flash("Password and Confirm password must match", "warning");
            isValid = false;
        }
        return isValid;
    }
</script>
<?php
require_once(__DIR__ . "/../../partials/flash.php");
?>
