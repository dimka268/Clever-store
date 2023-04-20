<?php
session_start();
$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
$password1 = filter_var(trim($_POST['password1']), FILTER_SANITIZE_STRING);

$connect = new mysqli('localhost', 'root', '', 'clever_store');

$result2 = $connect->query("SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password1'");
$user2 = $result2->fetch_assoc();
if(is_null($user2)){
    echo "Логин или пароль не правильный";
    exit();
}

$_SESSION['user_id'] = $user2['user_id'];
$connect->close();
header('Location: index.php');