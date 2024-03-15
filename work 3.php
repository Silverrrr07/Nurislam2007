<?php

$correctUsername = "USER12345";
$correctPassword = "PASSWORD12345";


$userUsername =  $_POST["username"]; 

$userPassword = $_POST["password"]; 


if ($userUsername == $correctUsername && $userPassword == $correctPassword) {
    echo "Добро пожаловать!";
} 
else {
echo "Ошибка входа.";
}


?>



