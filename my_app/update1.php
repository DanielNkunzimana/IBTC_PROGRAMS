<?php
$server = "localhost";
$username = "root";
$password = "";
$db = "my_app";
$data = mysqli_connect("$server", "$username", "$password", "$db");

$id=$_GET['id'];
$sql = "SELECT * FROM `users` where `id`='$id'";
$slct = mysqli_query($data, $sql);



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form{
            text-align: center;
            border: 1;
            border-radius: 20px;
            margin: 20px;
            background-color: aliceblue;
            margin-left: 400px;
            margin-right: 400px;
        }
        input{
            height: 30px;
            width: 300px;
        }
    
    </style>
</head>
<body>
    <?php $row = mysqli_fetch_assoc($slct);
        
    ?>
    
    <form method="POST">
        
        <label>Name:</label><br>
        <input type="text" name="name" value="<?php echo $row['name'];?>"><br>
        
        <label>Email:</label><br>
        <input type="email" name="email" value="<?php echo $row['email'];?>"><br>
        
        <label>Age:</label><br>
        <input type="date" name="age" value="<?php echo $row['age'];?>"><br><br>

        <label>product_name:</label><br>
        <input type="text" name="product_name" value="<?php echo $row['product_name'];?>"><br><br>

        <label>price:</label><br>
        <input type="text" name="price" value="<?php echo $row['price'];?>"><br><br>
        
        <button type="submit" name="access">Submit</button>
        
    </form>

</body>
</html>


<?php


if (isset($_POST["access"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $age = $_POST["age"];
    $product_name = $_POST["product_name"];
    $price = $_POST["price"];

    $upd = "UPDATE `users` SET `name`='$name', `email`='$email', `age`='$age', `product_name`='$product_name', `price`='$price' WHERE `id`='$id'";

    $result = mysqli_query($data, $upd);

    if ($result) {
        header("Location: data.php");
        exit();
    } else {
        die("Something is wrong in your code! Error: " . mysqli_error($data));
    }
}
?>


