<?php
$server = "localhost";
$username = "root";
$password = "";
$db = "student_project";
$data = mysqli_connect($server, $username, $password, $db);

if($data == True){
    echo"connection successful done";
}else{
    die("connection failed");
}

if(isset($_POST["Enter"])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $sql = mysqli_query($data, "INSERT INTO `contacts`(`id`, `name`, `email`,`message`) VALUES('', '$name', '$email', '$message')");

    if($sql == True){
        header("location:contact.html");
    }else{
        die("something went wrong");
    }
}
?>