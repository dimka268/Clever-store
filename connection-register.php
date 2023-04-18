<?php
$name = $_POST['name'];
$login = $_POST['login'];
$password1 = $_POST['password1'];
$connect = new mysqli('localhost', 'root', '', 'clever_store');
$insert = "INSERT INTO `users`(`name`, `email`, `password`) VALUES ('$name','$login','$password1')";
$addendum = $connect->query($insert);
header('Location: register.php');