<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <link rel="shortcut icon" type="image/x-icon" href="/images/jakublogo.ico" />  
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js">
</script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js">
</script>
<![endif]-->
      <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-110835004-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-110835004-1');
</script>
        <title>Maths Game</title>
        
        <link rel="stylesheet" href="css/style_game.css">
    
    </head>

    <body>
        <?php
include "header.php";
?>
        <div id="container" class="container-fluid">
            <div id="score">
                Score: <span id="scorevalue">0</span>   
            </div>
            <div id="correct">
                Correct
            </div>
            <div id="wrong">
                Wrong
            </div> 
            <div id="emptytop"></div>
            <div id="question">
                
            </div>
            <div id="instruction">
                <p id="whatToDo">Click on the correct answer</p>
            </div>
            <div id="choices">
            <div id="box1" class="box">
            </div>
            <div id="box2" class="box">
            </div>
            <div id="box3" class="box">
            </div>
            <div id="box4" class="box">
            </div>
                </div>
            <div id="startreset">
            Start game
            </div>
            <div id="timeremaining">Time remaining: <span id="timeremainingvalue">60</span> sec</div>
            <div id="gameover">
            </div>
            <a id="goHome" class="btn btn-warning" href="index.html">Home Page</a>
            
        </div>
              <?php
include "footer.php";
?>
    <script src="js/mathGame.js"></script>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js">
    </script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js">
    </script>
    </body>
</html>