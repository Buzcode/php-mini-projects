<?php

$correctUsername = "admin";
$correctPass = "1234";

echo "Username: ";
$inputUsername = readline();

echo "Password: ";
$inputPassword = readline();

if ($inputUsername == $correctUsername && $inputPassword == $correctPass) {
    echo "Login Successful\n";
} else {
    echo "Invalid username or password\n";
}

?>