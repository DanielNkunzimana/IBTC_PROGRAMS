<?php
session_start();
$server = "localhost";
$username = "root";
$password = "";
$db = "my_app";
$data = mysqli_connect("$server", "$username", "$password", "$db");
if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POSST['password'];
    $sql =  "SELECT * FROM `login` where `username`='$username' and `password`='$password'";
    $res = mysqli_query($data, $sql);
    if(mysqli_num_rows($res)==1){
        $_SESSION['user']=$username;
        $_SESSION['password']=$password;
        echo"you are welcome back benn";
        header("location:/IBTC_PROGRAMS/IBTC_PROGRAMS/my_app/data.php");
    }else{
        echo"you getout here, you are not allowed to be here";
        header("location:login.html");
    }
}

?>