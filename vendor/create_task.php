<?php

require_once '../config/connect.php';

$name = $_POST['name'];
$desc = $_POST['desc'];
$user_id = $_POST['user_id'];
$status = $_POST['status'];


mysqli_query($connect, "INSERT INTO `Tasks` (`id`, `name`, `description`, `status`, `user_id`) VALUES (NULL, '$name', '$desc', '$status', '$user_id')");

header('Location: /');