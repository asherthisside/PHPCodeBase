<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Your data here</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Please Fill the details here</h1>
    <form action="insert.php" method="post">
        <div>
            <label for="">Enter Name</label> <br>
            <input type="text" name="form_name" id="">
        </div>

        <div>
            <label for="">Enter Email</label> <br>
            <input type="email" name="form_email" id="">
        </div>

        <div>
            <input type="submit" value="Insert" name="sub">
            <button><a href="dashboard.php" style="text-decoration: none; color: black;">Go to dashboard</a></button>
        </div>
    </form>
</body>

</html>

<?php
if (isset($_POST['sub'])) {
    include 'connection.php';
    $name = $_POST['form_name'];
    $email = $_POST['form_email'];

    $insert_query = "INSERT INTO `second`(`name`, `email`) VALUES ('$name','$email')";

    $insert = mysqli_query($conn, $insert_query);
    if ($insert) {
?>
        <script>
            alert("Data Inserted")
            window.location.href = "dashboard.php";
        </script>
<?php
    } else {
        echo "Error " . mysqli_error($conn);
    }
}
?>