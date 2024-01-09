<?php
require "./../db_connection/connection.php";
mysqli_select_db($con,"test");
$query = "select id from user_details where email = '{$_POST['email']}' AND status=1";
$result = mysqli_query($con,$query) or die("error");

if(mysqli_num_rows($result)<1)
{
  echo 1;
}

?>