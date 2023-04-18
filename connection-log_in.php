<?php
$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$password1 = filter_var(trim($_POST['password1']), FILTER_SANITIZE_STRING);
$connect = new mysqli('localhost', 'root', '', 'clever_store');
$select = "SELECT `user_id` FROM `users` WHERE email = '$login' AND password = '$password1'";
$addendum = $connect->query($select)->fetch_all(MYSQLI_ASSOC);

header('Location: index.php');