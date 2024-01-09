<?php
session_start();
if(isset($_SESSION['uname']))
{ header('location:dashbord.php');
}
else if(isset($_GET['id']))
{
    session_start();
    $_SESSION['uname']=$_GET['id'];
    header('location:dashbord.php');

}
else
  echo "index.php page";
   
?>