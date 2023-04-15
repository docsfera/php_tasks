<?php

$connect = mysqli_connect('localhost', 'root', '', "myData");
if (!$connect){
    die("Failed to connect to MySQL: " . mysqli_connect_error());
}
