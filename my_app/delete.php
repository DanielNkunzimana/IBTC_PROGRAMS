<?php
$server = "localhost";
$username = "root";
$password = "";
$db = "my_app";
$data = mysqli_connect($server, $username, $password, $db);

$id = $_GET["id"];
$sql = "DELETE FROM `users` WHERE id='$id'";
$conn = mysqli_query($data, $sql);

if($conn == True){
    header("location:data.php");
}

?>