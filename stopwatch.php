<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="shortcut icon" href="images/favico.ico" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <link href="https://fonts.googleapis.com/css?family=Vollkorn" rel="stylesheet">
      <link rel="stylesheet" href="css/style_stopwach.css">

    <title>Stopwatch</title>
  </head>
  <body>
<?php
include "header.php";
?>
<!--      title     -->
      <div class="container-fluid" id="header"><span id="title">Stopwatch</span>
<!--       lap time     -->
      <div id="lap"><span id="lapminute">00</span>:<span id="lapsecond">00</span>:<span id="lapcentisecond">00</span></div>
<!--        timer controls up      -->   
            <div id="timerControlUp">
                <i class="arrow up" id="minutUp"></i><i class="arrow up" id="secondUp"></i><i class="arrow up" id="centisecondUp"></i>
            </div>
<!--        time        -->
      <div id="time"><span id="timeminute">00</span>:<span id="timesecond">00</span>:<span id="timecentisecond">00</span></div>
<!--        time control down-->
          <div id="timerControlDown">
                <i class="arrow down" id="minutDown"></i><i class="arrow down" id="secondDown"></i><i class="arrow down" id="centisecondDown"></i>
            </div>
<!--       Control buttons     -->
      <div class="row" id="controlsContainer">
        <div class="col-2 offset-4">
            <div id="startButton" class="control">
                Start
            </div>
            <div id="stopButton" class="control">
                Stop
            </div>
            <div id="resumeButton" class="control">
                Resume
            </div>
        </div>
        <div class="col-2">
            <div id="lapButton" class="control">
                Lap
            </div>
            <div id="resetButton" class="control">
                Reset
            </div>
        </div>
          
<!--     laps  -->
          
      </div>
      <div id="timerRow" class="row">
          <div id="timerBtn">
                Timer
          </div>
      </div>    
      </div>
      <div id="laps"></div>
            <?php
include "footer.php";
?>
      <audio loop id="alarmSound">
            <source src="audio/Annoying_Alarm.mp3" type="audio/mpeg">
          Your browser does not support the audio element.
      </audio>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      <script src="js/stopwatch.js">
      </script>
  </body>
    </html>