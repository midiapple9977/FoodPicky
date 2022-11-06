
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #Themaintihle{
            color: white;
            background-color: black;
            padding: 10px;
          
        }
    </style>
</head>
<body>
    
</body>
</html>







<?php


session_start(); //temp session
error_reporting(0); // hide undefine index
include("connection/connect.php"); // connection

  $userNameeee = $_SESSION['NewUserF_name'];
  $userlastName = $_SESSION['NewUserL_name'];
  $Emailur = $_SESSION['NewUserE_mail'];

  $username = $_SESSION['username'];
  $phone = $_SESSION['phone'];
  $password = $_SESSION['password'];
  $addresss= $_SESSION['address'];
  $date = $_SESSION['date'];





  $verification_code  = sha1($Emailur . time());
  $verification_URL = 'http://localhost/Foodpicky/phpfiles/verify.php?code=' . $verification_code;

    $query = "UPDATE users SET verification_code = '$verification_code', status='0' WHERE phone='$phone'";

   
    $result = mysqli_query($db,$query);



use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require "../vendor/autoload.php";


$mail = new PHPMailer(true);

try {
 
                  
    $mail->isSMTP();                                           
    $mail->Host       = 'smtp.gmail.com';                     
    $mail->SMTPAuth   = true;                                   
    $mail->Username   = 'dilshanwickramaarachchi99@gmail.com';                    
    $mail->Password   = 'dmlfdecskgublcyt';                             
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            
    $mail->Port       = 465;                                    

  
    $mail->setFrom($Emailur , 'Food Picky');

    $mail->addAddress( $Emailur);   
            


    $mail->isHTML(true);                                 
    $mail->Subject = 'Food Picky'.time();
    $mail->Body    =    '<h1 id="themailheading">WELCOME TO FOODPICKEY</h1>  <br>
                           <p>Hi ! '.$userNameeee.' ' .$userlastName.' </p>
               <h3>Thank you for choosing Us,</h3> <br>
               <p>You are welcomed to the Saegis campus Food Picky system. You have successfully 
               register to our service. From here you can order 
               meals at your hand. We are here to provide service as soon as possible.We have many items to provide you. Short eats, beverages, bites and much more.Your code is <a href="#">majTy^%GSIndjiodp09Tueb$#qrej</a>.Please enjoy.
               <br>

               </p>
               <h3>THANK YOU..</h3>
                <p>You will get all the new notifications via this E-mail : ' .$Emailur.'</p>
               <br>
                
               <h4>Developed By Saegis Campus Smarter Team @2022 / Saegis Campus</h4>

               <h5>You received this email to let you know about important changes to your Account and services.</h5><br>
               <p id="Themaintihle">Your verfication code is :."<b>" ' .$verification_URL . '"</b>."</p>
               © 2022 Saegis LLC, 1600 Amphitheatre Parkway, Mountain View, CA 94043, Sri Lanka</h6>
          
    ';


    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();

    echo 'Message has been sent';
} 

catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";

}



?>