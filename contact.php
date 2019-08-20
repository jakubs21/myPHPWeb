<?php
ob_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="shortcut icon" href="images/favico.ico" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <link rel="stylesheet" href="css/style_contact.css">

    <title>Contact me</title>
  </head>
  <body>

<?php
include "header.php";
?>
        <div class="jumbotron">
            <div class="container">
    <!--  create logo              -->
            <div>
            <img class="logo" src="images/jakublogowhite.png">
            </div>
                
            <div class="featured">
                <div>
                <div class="col-md-9"><!--use only 9 of 12  colummns im medium and large devices -->
                    <h1>Best worker in the world</h1>
                    <p>Need anything?<br/>You are in right place, just contact me and I will do my best for you</p>
                    
<div class="container-fluid">
    <div class="row">
        <div class="col-12 contactForm">
            <h5>Please use contact form</h5>
<?php
//get user input
if($_POST){
$name = $_POST["name"];
$email = $_POST["emailAdress"];
$message = $_POST["message"];
}
//error messages
$missingName = '<p><strong>Please enter your name!</strong></p>';
$missingEmail = '<p><strong>Please enter your email adress!</strong></p>';
$invalidEmail = '<p><strong>Please enter valid email adress!</strong></p>';
$missingMessage = '<p><strong>Please enter a message!</strong></p>';
$errors = null;
//if user has submited form
if($_POST)if($_POST["submit"]){
    //check for errors
    if(!$name){
        $errors .=$missingName;        
    }else{
        $name = filter_var($name,FILTER_SANITIZE_STRING);
    }
    if(!$email){
        $errors .= $missingEmail;
    }else{
        $email = filter_var($email,FILTER_SANITIZE_EMAIL);
            if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            $errors .=$invalidEmail;
        }
    }
    if(!$message){
        $errors .= $missingMessage;
    }else{
        $message = filter_var($message,FILTER_SANITIZE_STRING);
    } 
        //if there are errors
        if($errors){
            //print error message
            $resultMessage = '<div class="alert alert-danger">'. $errors .'</div>';
        }else{
            //no errors
            $to = "92jakub.sadowski@gmail.com";
            $subject = "Contact form from my WebSite";
            $message ="
            <p>Name: $name</p>
            <p>Email: $email</p>
            <p>Message:</p>
            <p><b>$message</b></p>";
            $headers = "Content-type: text/html";
            //send the email
            if(mail($to,$subject,$message,$headers)){
                //if success print success message
                header("Location: thanks.php");
                //$resultMessage = '<div class="alert alert-succes">Thanks for your message. I will get back to you as soon as possible</div>';
                
            }else{
                // fail print warning message
                $resultMessage = '<div class="alert alert-warning">Unable to send Email. Please use button "Email me" or try again</div>';
            }
        }
    //print resoult message
    echo $resultMessage;
}
?>
            <form action="contact.php" method="post">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name" placeholder="Name" class="form-control" value="<?php if($_POST)echo $_POST["name"];?>"><label for="emailAdress">Email:</label>
                    <input type="email" name="emailAdress" id="emailAdress" placeholder="Email" class="form-control" value="<?php if($_POST)echo $_POST["emailAdress"];?>">
                    <label for="message">Message:</label>
                    <textarea  name="message" id="message" placeholder="Message" rows="5" class="form-control"><?php if($_POST)echo $_POST["message"];?></textarea>
                    <input type="submit" name="submit" class="btn btn-success btn-lg" value="Send Message" >
                </div>
            </form>
        </div>
    </div>
</div>
                    <h5>or press "Email me" to use your own email program</h5>
                    <div class="row">
                        <div class="col-12 col-md-4"><a class="btn btn-default btn-lg" href="mailto:92jakub.sadowski@gmail.com">Email me</a></div>
                            <div class="col-12 col-md-4">
                        <a class="btn btn-default btn-lg" href="JakubSadowskiCV.pdf">Find out more</a></div>
                        <a class="btn btn-default btn-lg" href="JakubSadowskiCVPL.pdf">O mnie</a></div>
                        
                    </div>
                    <p>Do you want to know where did I learned web development? </p>
                    <div class="row">
                    <div class="col-12 col-md-4">
                       <a class="btn btn-default btn-lg" href="webdevcourse.html" id="checkbtn">Check my Course</a>        
                    </div></div>
                    </div>
                    </div>
                </div>
            </div>
            </div>
      <!--bottom of the page-->
      <div class="trial">
        <div class="container" >
            <h2>Find me now on</h2>
            <a class="logoiconslink" href="http://www.facebook.com/kuba.sadowski.984"><img class="logoiconsimg" src="images/logofacebook.png"></a>
            <a class="logoiconslink" href="http://www.linkedin.com/in/jakub-sadowski-33205995"><img class="logoiconsimg" src="images/logolinkedin.png"></a>
            
            <p></p>
</div>
            <p><a id="homebtn" href="index.php" class="btn btn-default">Home Page</a></p>
      </div>
      </div>
      <!--footer-->
            <?php
include "footer.php";
?>

    <!-- Optional JavaScript -->
      
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
<?php
ob_flush();
?>