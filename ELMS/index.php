<?php
include 'connection.php';
$email_error = $password_error = "";
if (isset($_POST['sub'])) {
    $useremail = $_POST['form_email'];
    if (empty($useremail)) {
        $email_error = "Email cannot be empty";
    } else if (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $useremail)) {
        $email_error = "Incorrect format for Email";
    }

    $userpass = $_POST['form_pass'];
    if (empty($userpass)) {
        $password_error = "Password cannot be empty";
    } else if (!preg_match("/[a-z0-9@!*&#,']{8,20}/", $userpass)) {
        $password_error = "Incorrect format for password";
    }

    $select_query = "SELECT * FROM `employees` WHERE `email` = '$useremail' AND `password` = '$userpass'";

    $select = mysqli_query($conn, $select_query);
    // echo mysqli_num_rows($select);
    $row_number = mysqli_num_rows($select);
    if ($row_number <= 0) {
?>
        <script>
            alert("Incorrect email or password")
        </script>
<?php
    } else {
        session_start();
        $data = mysqli_fetch_assoc($select);
        $_SESSION['id'] = $data['id'];
        $_SESSION['name'] = $data['firstname'] . " " . $data['lastname'];
        header("location:dashboard.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <h1>Please Log in</h1>
    <form action="index.php" method="post">
        <div>
            <label for="">Enter Email: </label> <br>
            <input type="email" name="form_email" id="" class="form-control">
            <small id="email_error"><?php echo $email_error; ?></small>
        </div>

        <div>
            <label for="">Enter Password</label> <br>
            <input type="password" name="form_pass" id="" class="form-control">
            <small id="password_error"><?php echo $password_error; ?></small>
        </div>

        <div>
            <input type="submit" value="Log In" name="sub" class="form-control">
        </div>
        <div>
            Not a user yet? <a href="signup.php">Sign Up</a> instead
        </div>
    </form>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>