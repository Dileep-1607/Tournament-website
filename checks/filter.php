<?php
$check = $_POST['str'];
if($check == "")
{
    echo 1;
  
}
 else if($check == "try")
 {
     echo 2;
 }
 else{
     echo 0;
 }
?>