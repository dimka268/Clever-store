<?php
$login = $_POST['login'];
$password1 = $_POST['password1'];
$connect = new mysqli('localhost', 'root', '', 'clever_store');
$select = "SELECT `user_id` FROM `users` WHERE email = '$login' AND password = '$password1'";
$addendum = $connect->query($select)->fetch_all(MYSQLI_ASSOC);

header('Location: index.php');