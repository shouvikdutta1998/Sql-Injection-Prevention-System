<?php

error_reporting(0);

$mysqli = new mysqli('localhost', 'root', '', 'joker');

if ($mysqli->connect_error) {
    die('Connection Error');
}

$email = $_POST['email'];
$password = $_POST['password'];

$query = "SELECT * FROM `users` where users.email = '{$email}' and users.password = '{$password}' ;";
var_dump($query);
$result = mysqli_query($mysqli, $query);
//$result = mysqli_multi_query($mysqli, $query);
$data = mysqli_fetch_all($result);


var_dump($data);
