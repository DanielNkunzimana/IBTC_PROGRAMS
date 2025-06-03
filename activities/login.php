<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "login_system";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];


    $sql = "SELECT * FROM `users` WHERE `email`='$email' AND `password`='$password'";
    $result = $conn ->query($sql);
    
    if ($result->num_rows >0) {
        

            header("Location: dashboard.php"); 
            
        } else {
            echo "Incorrect password!";
        
        }
    } 

?>
