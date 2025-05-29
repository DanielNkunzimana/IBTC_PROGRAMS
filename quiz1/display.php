<?php
$server = "localhost";
$username = "root";
$password = "";
$db = "student_project";
$data = mysqli_connect("$server", "$username", "$password", "$db");

$sql = "SELECT * FROM `contacts`"; 
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
            <th>message</th>
            <th span="2">Action</th>
        </tr>
        <?php while($row = mysqli_fetch_assoc($conn)):
        ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['message']; ?></td>
            <td><a href="db.php?id=<?php echo $row['id'];?>">Delete</a></td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>