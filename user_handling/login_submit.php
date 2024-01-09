<?php
session_start();

require "./../db_connection/connection.php";
mysqli_select_db($con,"test") or die("connection error");

$query = "select id,name,password from user_details where status=1 AND email='{$_POST['email']}' ";
$result=mysqli_query($con,$query) or die("query error");
if(mysqli_num_rows($result)>0)
{
   $row=mysqli_fetch_assoc($result);

   if(password_verify($_POST['pass'],$row['password']))
   {
   $_SESSION['id']=$row['id'];
   $_SESSION['name']=$row['name'];
   echo 1;
   }
}
?>