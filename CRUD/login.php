<?php
include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Please Log in</h1>
    <form action="login.php" method="post">
        <div>
            <label for="">Enter Username</label> <br>
            <input type="text" name="form_name" id="">
        </div>

        <div>
            <label for="">Enter Password</label> <br>
            <input type="password" name="form_pass" id="">
        </div>

        <div>
            <input type="submit" value="Log In" name="sub">
            <button><a href="signup.php" style="text-decoration: none; color: black;">Create new account</a></button>
        </div>
    </form>
</body>

</html>

<?php
if(isset($_POST['sub'])) {
    $username = $_POST['form_name'];
    $userpass = $_POST['form_pass'];

    $select_query = "SELECT * FROM `login_credentials` WHERE `username` = '$username' AND `password` = '$userpass'";

    $select = mysqli_query($conn, $select_query);
    // echo mysqli_num_rows($select);
    $row_number = mysqli_num_rows($select);
    if($row_number <= 0) {
        ?>
        <script>
            alert("Incorrect username or password")
        </script>
        <?php
    }
    else {
        session_start();
        $_SESSION['name'] = $username;
        header("location:dashboard.php");
    }
}
?>