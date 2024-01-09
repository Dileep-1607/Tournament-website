<?php
require "db_connection/connection.php";
session_start();
mysqli_select_db($con,"test") or die("error occured");
date_default_timezone_set("Asia/Kolkata");


if(isset($_SESSION['otp_id']))
{
    $result = mysqli_query($con,"select otp,name from user_details where id='{$_SESSION['otp_id']}' AND status!=1 AND NOW() <= DATE_ADD(time,INTERVAL 10 MINUTE)") or die("query failed");
   
    if(mysqli_num_rows($result)<1)
   {   
         if(isset($_GET['id']))
         {
             echo "OTP Is Expired";
         }
         else echo -1;

         unset($_SESSION['otp_id']);
         exit();
   }
   $row= mysqli_fetch_assoc($result);
   
}
else{
    
    exit();
}
if(isset($_GET['id']))
{
    $v1 = $_GET['id'];
    if(password_verify($row['otp'],$v1))
    {
        $_SESSION['id']= $_SESSION['otp_id'];
        $_SESSION['name']=$row['name'];
        mysqli_query($con,"update user_details set status=1 where id='{$_SESSION['id']}'");
        unset($_SESSION['otp_id']);
        header("location:otp_verification.php");

    }
   else 
 {  echo "OTP Is Expired";    }
}
 


else{

$v2 = $_POST['otp_id'];

if($v2==$row['otp'])
{

  $_SESSION['id']= $_SESSION['otp_id'];
  $_SESSION['name']=$row['name'];
  mysqli_query($con,"update user_details set status=1 where id='{$_SESSION['id']}'");
  unset($_SESSION['otp_id']);
  echo 1;
}
else 
echo 0;

}
