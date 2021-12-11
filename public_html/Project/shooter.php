<?php
require_once(__DIR__ . "/../../partials/nav.php");
is_logged_in(true);
?>
<head>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<style> 
    body{ margin: 0; background-color: black;}
</style>

<div class="fixed text-white ml-2 mt-1 select-none"><span>Score: </span><span id="scoreEl">0</span></div>

<!--<button class="fixed bottom-0 left-0" id="endGame">End Game</button>-->

<div id="modalEL" class="fixed inset-0 flex items-center justify-center">
    <div class="bg-white max-w-md w-full p-6 text-center">
        <h1 id="modalScoreEL" class="text-4xl font-bold leading-none">0</h1>
        <p class="text-sm text-gray-700 mb-4">Points</p>
        <div>
            <button id="startGameBtn" class="text-black bg-blue-500 w-full py-2 rounded-full">Start Game</button>
        </div>
    </div>
</div>
<canvas></canvas>

<!--<body>
    <form id="myForm" method="post" action="" class="fixed bottom-5">
        Score:
        <input type="text" name="score" required />
        <br/>
        <input type="submit" name="submit" value="save" id="sub"/> 
    </form>
</body>-->
<script src="./shooter.js"></script>
 