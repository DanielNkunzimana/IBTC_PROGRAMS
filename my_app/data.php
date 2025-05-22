<?php
$server = "localhost";
$username = "root";
$password = "";
$db = "my_app";
$data = mysqli_connect("$server", "$username", "$password", "$db");

$sql = "SELECT * FROM `users`";
$conn = mysqli_query($data, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>id</th>
            <th>name</th>
            <th>email</th>
            <th>age</th>
            <th>product_name</th>
            <th>price</th>
            <th span="2">Action</th>
        </tr>
        <?php while($row = mysqli_fetch_assoc($conn)):
        ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['age']; ?></td>
            <td><?php echo $row['product_name']; ?></td>
            <td><?php echo $row['price']; ?></td>
            <td><a href="update1.php?id=<?php echo $row['id'];?>">Update</a></td>
            <td><a href="delete.php?id=<?php echo $row['id'];?>">Delete</a></td>
            
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>