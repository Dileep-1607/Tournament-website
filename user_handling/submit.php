<?php

session_start();
require "./../db_connection/connection.php";
date_default_timezone_set("Asia/Kolkata");

$name=$_POST['name'];
$email=$_POST['email'];
$pass=$_POST['pass'];

$otp = rand(1000,9999);
$pass=password_hash($pass,PASSWORD_BCRYPT);

if(mysqli_select_db($con,"test"))
{
    $query = "insert into user_details(name,email,password,otp,time) values('$name','$email','$pass','$otp','".date("Y-m-d H:i:s")."')";
    if(mysqli_query($con,$query))
      {
           $_SESSION['otp_id']=$con->insert_id;
           $_SESSION['otp']=$otp;
           $_SESSION['email']=$email;
           echo 1;
      }
      else 
       echo 0;



}
else{
    echo " error occured";
    die();
}
$con->close();


?>
