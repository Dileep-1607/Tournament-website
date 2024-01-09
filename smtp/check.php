<?php
session_start();
    if(isset($_GET['login']))
     {
         header("location:https://google.com");

     }
     else
     echo "error occured";
?>