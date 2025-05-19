<?php
$server = "localhost";
$username = "root";
$password = "";
$db = "my_app";
$data = mysqli_connect($server, $username, $password, $db);

$age = $_GET["age"];
$sql = "update table `users` set age='$age' ";
?>