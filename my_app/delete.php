<?php
$server = "localhost";
$username = "root";
$password = "";
$db = "my_app";
$data = mysqli_connect($server, $username, $password, $db);

$id = $_GET["id"];
$sql = "delete from `users` where id='$id'";
$conn = mysqli_query($data, $sql);

if($conn == True){
    header("location:data.php");
}

?>