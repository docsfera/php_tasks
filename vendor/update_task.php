<?php

require_once '../config/connect.php';

$name = $_POST['name'];
$desc = $_POST['desc'];
$user_id = $_POST['user_id'];
$status = $_POST['status'];
$id = $_GET["id"];


mysqli_query($connect, "UPDATE `Tasks` SET `name` = '$name', `description` = '$desc', `status` = '$status',`user_id` = '$user_id' WHERE `Tasks`.`id` = '$id'");

header('Location: /');