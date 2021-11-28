<?php

?>
<head>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<style> 
    body{ margin: 0;}
</style>

<div class="fixed text-black ml-2 mt-1 select-none"><span>Score: </span><span id="scoreEl">0</span></div>

<button class="fixed bottom-0 left-0" id="endGame">End Game</button>

<canvas>
    
</canvas>

<body>
    <form id="myForm" method="post" action="" class="fixed bottom-5">
        Score:
        <input type="text" name="score" required />
        <br/>
        <input type="submit" name="submit" value="save" id="sub"/> 
    </form>
</body>
<script src="./shooter.js"></script>
 