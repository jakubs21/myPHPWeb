<!DOCTYPE html>
<html>

    <head>
        <title>Balloon Game</title>
        <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="shortcut icon" href="images/favico.ico" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style_balloon.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script>
    </head>

    <body>
        <?php
include "header.php";
?>
        <div id="container">
            <div id="score">
                Score: <span id="scorevalue">0</span> LVL: <span id="lvlvalue">1</span>   
            </div>
             <div id="instruction">
                <p>Balloon Shooter</p>
            </div>
            <div id="gameScreen">
                <img id="playball1" class="balloon" z-index="101">
                <img id="playball2" class="balloon" z-index="102">
                <img id="playball3" class="balloon" z-index="103">
                <img src="images/balloon1t.png" width=100 class="gameoverballoon" id="balon1"><img src="images/balloon2t.png" width=100 class="gameoverballoon" id="balon2"><img src="images/balloon3t.png" width=100 class="gameoverballoon" id="balon3"><img src="images/balloon4t.png" width=100 class="gameoverballoon" id="balon4"><img src="images/balloon5t.png" width=100 class="gameoverballoon" id="balon5">
            </div>
            <div id="startreset">
            Start Game
            </div>
            <div id="trialsleft">
            </div>
            <div id="timeremaining">Time remaining: <span id="timeremainingvalue">60</span> sec</div>
            <div id="gameover">
            </div>
            <a id="goHome" href="index.php" >Home Page</a>
            
        </div>
              <?php
include "footer.php";
?>
        <audio id="popsound">
        <source src="audio/pop.mp3">
        <source src="audio/pop.ogg">
        </audio>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
         <script src="js/balloonGame.js"></script>
    </body>
</html>