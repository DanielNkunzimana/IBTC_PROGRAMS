<?php
session_start();
if(!isset($_SESSION['user'])){
     
        header("location:login.html");
    

}else{
    
$host = "localhost";
$user = "root";
$pass = "";
$db = "login_system";

$conn = mysqli_connect($host, $user, $pass, $db);

$sql = "SELECT * FROM `users`"; 
$conn = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<a href="logout.php">logout</a>
    <table border="1">
        <tr>
            <th>id</th>
            <th>email</th>
            <th>password</th>
            
        </tr>
        <?php while($row = mysqli_fetch_assoc($conn)):
        ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['password']; ?></td>
          
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
     <?php }?>

