<?php
require(__DIR__ . "/../../partials/nav.php");
?>
<ul>
    <li><a class = "game" href="<?php echo get_url('shooter.php'); ?>">Shooter Game </a></li>
</ul>

<style>
    .game{
    display:inline-block;
    width:200px;
    height:200px;
    margin-left: 10%;
    padding: 5%;
    background-color:#ccc;
    border:1px solid #ff0000;
}
</style>
<?php
require(__DIR__ . "/../../partials/flash.php");
?>