<?php
$name = $_POST['user_name'];
$password = $_POST['user_password'];
$email = $_POST['user_mail'];
$message = $_POST['user_message'];
$birth_date = $_POST['user_birthdate'];

echo '<br>'. $birth_date;

$current_date = date('Y');
echo '<br>'. $current_date;

$age = $current_date - $birth_date;
echo '<br>'. $age;
echo 24 + 1894;