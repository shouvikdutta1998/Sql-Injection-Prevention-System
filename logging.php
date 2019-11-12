<?php

error_reporting(0);

$mysqli = new mysqli('localhost', 'root', '', 'joker');

if ($mysqli->connect_error) {
    die('Connection Error');
}

$email = $_POST['email'];
$password = $_POST['password'];

$rawQuery = "SELECT * FROM `users` where users.email = '%s' and users.password = '%s' ;";
$query = sprintf($rawQuery, mysqli_real_escape_string($mysqli, $email), mysqli_real_escape_string($mysqli, $password));
$result = mysqli_query($mysqli, $query);
// $result = mysqli_multi_query($mysqli, $query);
$data = mysqli_fetch_all($result);


var_dump($data);
