<?php
$server = "localhost";
$username = "root";
$password = "";
$db = "my_app";
$data = mysqli_connect($server, $username, $password, $db);

if($data == True){
    echo"successful done";
}else{
    die("something is wrong");
}

if(isset($_POST["Enter"])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    $sql = mysqli_query($data, "INSERT INTO `contact`(`id`, `name`, `email`, `subject`,`message`) VALUES('', '$name', '$email', '$subject', '$message')");

    if($sql == True){
        header("location:contact.html");
    }else{
        die("something went wrong");
    }
}
?>