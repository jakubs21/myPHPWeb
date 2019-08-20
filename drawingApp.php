<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="shortcut icon" href="images/favico.ico" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <link rel="stylesheet" href="css/style_draw.css">
      <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/start/jquery-ui.css">

    <title>Jakub Sadowski</title>
  </head>
  <body>
<?php
include "header.php";
?>      

      <div id="header">
            Drawing App
        </div>
      <div class="inputContainer container-fluid">
            
            <div class="row">
                 <div class="input col-12" id="colorInput">
                <input type="color" list id="paintColor">
          </div>
          
          <div class="input col-12" id="thicknesInput">
                <div id="circle"></div>
          </div>
          </div>
            <div class="row">
                <div class="col-6 offset-3">
                    <div class="input">
                        <div id="slider"></div>
                    </div>
                </div>
            </div>
           <div id="modeBtnContainer">
          <div class="row">
            <button type="button" class="btn btn-danger" id="SizeChangeAllowance">
               Size Change Disabled
              </button>
          <button id="paintON" type="button" class="btn btn-success">
               Paint Mode ON
          </button>
          <button id="paintOFF" type="button" class="btn btn-danger">
               Paint Mode OFF
          </button>       
        </div>
          <button type="button" class="btn btn-default drawMode" id="lineMode">
               Line
          </button>
        <button type="button" class="btn btn-default drawMode" id="circleMode">
               Circle
          </button>
        <button type="button" class="btn btn-default drawMode" id="rectMode">
               Rectangle
          </button>
          <button type="button" class="btn btn-default btn-primary drawMode" id="pointMode">
               Pencil
          </button>
          </div>
      </div>
      <div id="container" class="container">
          <div id="widthCanvas">
          </div>
          <div class="row" id="rowCanvas">
          <div id="heightCanvas">
          </div>
<!--          <div id="canvas">-->
              <canvas id="paint" height="300px" width="300px"></canvas>
<!--              </div>-->
          </div>
          <div class="row" id="btnContainer">
              <button type="button" class="btn btn-lg col-2 offset-2" id="Erase">
               Erase
          </button>
            <button type="button" class="btn btn-lg btn-primary col-2 offset-1" id="Save">
               Save
          </button>
              <button type="button" class="btn btn-lg btn-primary col-2 offset-1" id="Load">
               Load
          </button>
          <button type="button" class="btn btn-lg  btn-danger col-2  offset-1" id="Reset">
               Reset
          </button>
          </div>
      </div>
      <button type="button" class="btn btn-lg btn-danger col-4 offset-4" id="Clear">
               Clear Saved Picture
          </button>
            <?php
include "footer.php";
?>
    <!-- Optional JavaScript -->
      
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
      <script src="js/drawapp.js"></script>
  </body>
</html>

