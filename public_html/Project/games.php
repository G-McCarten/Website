<?php
require(__DIR__ . "/../../partials/nav.php");
?>
<h1>My Games</h1>

<?php
if (is_logged_in(true)) {
    echo "Here are your games, " . get_username();
    //echo "<pre>" . var_export($_SESSION, true) . "</pre>";
}
?>

<ul>
        <?php if (is_logged_in()) : ?>
            <li><a href="<?php echo get_url('shooter.php'); ?>">Shooter Game</a></li>
        <?php endif; ?>
</ul>

<?php
require(__DIR__ . "/../../partials/flash.php");
?>