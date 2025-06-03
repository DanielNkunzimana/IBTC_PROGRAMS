<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "login_system";

$conn = mysqli_connect($host, $user, $pass, $db);

$email = "user@example.com";
$password = password_hash("12345678", PASSWORD_DEFAULT);

$sql = "INSERT INTO users (email, password) VALUES ('$email', '$password')";
if (mysqli_query($conn, $sql)) {
    header("location:login.html");
} else {
    echo "Error: " . mysqli_error($conn);
}
?>
