<?php
include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup here</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Please Register here</h1>
    <form action="signup.php" method="post">
        <div>
            <label for="">Enter Username</label> <br>
            <input type="text" name="form_name" id="">
        </div>

        <div>
            <label for="">Enter Password</label> <br>
            <input type="password" name="form_pass" id="">
        </div>
        
        <div>
            <label for="">Confirm Password</label> <br>
            <input type="password" name="form_pass2" id="">
        </div>

        <div>
            <input type="submit" value="Register" name="sub">
        </div>
    </form>
</body>

</html>

<?php
if(isset($_POST['sub'])) {
    $username = $_POST['form_name'];
    $userpass = $_POST['form_pass'];
    $userpass2 = $_POST['form_pass2'];

    if($userpass == $userpass2) {
        $register_query = "INSERT INTO `login_credentials`(`username`, `password`) VALUES ('$username','$userpass')";

        $register = mysqli_query($conn, $register_query);
        if($register) {
            ?>
            <script>
                alert("Registration successful")
                window.location.href = "login.php"
            </script>
            <?php
        }
        else {
            die("Error while creating the account, ".mysqli_error($conn));
        }
    }
    else {
        ?>
        <script>
            alert("Passwords don't match. Please try again")
        </script>
        <?php
    }
}
?>