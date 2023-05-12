<?php
$name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
$password1 = filter_var(trim($_POST['password1']), FILTER_SANITIZE_STRING);

if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
    http_response_code(400);
    echo "Почта $email введена неверно, убедитесь в правильности ввода и попробуйте ввести почту заново";
    die;
}

if (strlen($password1) < 4){
    http_response_code(400);
    echo "Пароль слишком короткий";
    die;
}

if (strlen($password1) > 16){
    http_response_code(400);
    echo "Пароль слишком длинный";
    die;
}

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