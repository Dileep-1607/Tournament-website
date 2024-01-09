<?php
session_start();
if(isset($_SESSION['uname']))
{
echo "welcome {$_SESSION['uname']}";

 echo "<a href='logout.php'> Logout </a>";



}
else 
 header('location:index.php');
?>