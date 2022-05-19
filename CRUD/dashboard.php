<?php
session_start();
include 'connection.php';
if(!isset($_SESSION['name'])) {
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Data Display</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Dashboard - All the details you need are here</h1>
    <a href="insert.php"><button>+ Add New</button></a>
    <a href="logout.php"><button style="background-color: rgba(255, 0, 0, 0.8); color: white">Logout</button></a>
    <table border="1" style="margin-top: 20px;">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>

        <?php
        $select_query = "SELECT * FROM `second`";
        $select = mysqli_query($conn, $select_query);
        if (!$select) {
            echo "Data wasn't selected " . mysqli_error($conn);
        }

        while ($data = mysqli_fetch_assoc($select)) {
        ?>
            <tr>
                <td><?php echo $data['id'] ?></td>
                <td><?php echo $data['name'] ?></td>
                <td><?php echo $data['email'] ?></td>
                <td>
                    <a href="update.php?id=<?php echo $data['id'] ?>"><button id="update">Update</button></a>
                    <a href="delete.php?id=<?php echo $data['id'] ?>"><button id="delete">Delete</button></a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>