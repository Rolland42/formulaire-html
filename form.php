<?php
$name = $_POST['user_name'];
$password = $_POST['user_password'];
$email = $_POST['user_mail'];
$message = $_POST['user_message'];
$birthdate = $_POST['user_birthdate'];

echo '<br>'. $birthdate;

$currentdate = date('Y');
echo '<br>'. $currentdate;

$age = $currentdate - $birthdate;
echo '<br>'. $age;
echo 24 + 1894;