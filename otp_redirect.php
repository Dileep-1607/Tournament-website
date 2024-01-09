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
        // mysqli_query($con,"delete from user_details where id='{$_SESSION['otp_id']}'") or die("connection error");
       
       header("location:otp_verification.php?msg=1");
      
    }
    else
    {     
      header("location:otp_verification.php?msg=0");
    }
   
 ?>
