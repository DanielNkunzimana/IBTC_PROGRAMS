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

if(isset($_POST["access"])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $age = $_POST["age"];
    $product_name = $_POST["product_name"];
    $price = $_POST["price"];

    $sql = mysqli_query($data, "INSERT INTO `users`(`id`, `name`, `email`, `age`, `product_name`, `price`) VALUES('', '$name', '$email', '$age', '$product_name', '$price')");

    if($sql == True){
        header("location:data.php");
    }else{
        die("something went wrong");
    }
}
?>