<?php 

require "./db_connection/connection.php";
require "./smtp/index.php";

session_start();
$otp=$_SESSION['otp'];
$email=$_SESSION['email'];
 $otp2 = password_hash($otp,PASSWORD_BCRYPT);

  $html="verification code is :- 
 <h1 align='center'>{$otp}</h1>
 or 
 link to active your account : -
 http://localhost/new/otp_verifier.php?id={$otp2}";

  
    $send = _mailer($email,'Account Registration',$html);
    if($send)
    {
         echo 0;
      
      
    }
    else
    {     
       echo 1;
      
    }
 ?>
