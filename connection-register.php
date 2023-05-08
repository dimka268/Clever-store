<?php
$name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
$password1 = filter_var(trim($_POST['password1']), FILTER_SANITIZE_STRING);

$connect = new mysqli('localhost', 'root', '', 'clever_store');

$result1 = $connect->query("SELECT * FROM `users` WHERE `email` = '$email'");
$user1 = $result1->fetch_assoc();
if(!empty($user1)){
    echo "Пользователь с такой почтой уже существует";
    exit();
}

$connect->query("INSERT INTO `users`(`name`, `email`, `password`) VALUES ('$name','$email','$password1')");
$connect->close();

header('Location: index.php');