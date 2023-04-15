<?php

require_once '../config/connect.php';

$name = $_POST['name'];
$email = $_POST['email'];
$age = $_POST['age'];
$pass = $_POST['pass'];

mysqli_query($connect, "INSERT INTO `Users` (`id`, `name`, `age`, `email`, `password`) VALUES (NULL, '$name', '$age', '$email', '$pass')");

header('Location: /');