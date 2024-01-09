<?php

$pass="dfafdafdafdasfdafdsafdsadasfdsa";


$pass=password_hash($pass,PASSWORD_BCRYPT);
echo "{$pass}";


?>