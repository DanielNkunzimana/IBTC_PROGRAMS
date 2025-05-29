<?php
$server = "localhost";
$username = "root";
$password = "";
$db = "student_project";
$data = mysqli_connect($server, $username, $password, $db);

$id = $_GET["id"];
$sql = "DELETE FROM `contacts` WHERE id='$id'";
$conn = mysqli_query($data, $sql);

if($conn == True){
    header("location:display.php");
}

?>