<?php

require_once '../config/connect.php';

$id = $_GET["id"];

mysqli_query($connect, "DELETE FROM Tasks WHERE `Tasks`.`id` = '$id'");

header('Location: /');