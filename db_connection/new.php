<?php
$cone=mysqli_connect("localhost","root","","test");

if($cone)
{
    echo "succesfull";
}

else
{
    echo "failed";
}

?>