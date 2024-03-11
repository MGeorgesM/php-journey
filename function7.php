<?php

function validateEmailAndPassword($email, $password) {
    $emailRegex = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';
    $passwordRegex = '/^.{8,}$/';

    if (!preg_match($emailRegex, $email)) {
        return 'Invalid email';
    }

    if (!preg_match($passwordRegex, $password)) {
        return 'Invalid password';
    }

    return 'Valid email and password';
}

$email = 'user@ example.com';
$password = 'Passw0rd!';

$result = validateEmailAndPassword($email, $password);
echo $result;

?>
