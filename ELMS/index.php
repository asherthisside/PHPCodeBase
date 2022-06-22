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
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <h1>Please Log in</h1>
    <form action="index.php" method="post">
        <div>
            <label for="">Enter Email: </label> <br>
            <input type="email" name="form_email" id="">
        </div>

        <div>
            <label for="">Enter Password</label> <br>
            <input type="password" name="form_pass" id="">
        </div>

        <div>
            <input type="submit" value="Log In" name="sub">    
        </div>
        <div>
            Not a user yet? <a href="signup.php">Sign Up</a> instead
        </div>
    </form>
</body>

</html>

<?php
if(isset($_POST['sub'])) {
    $useremail = $_POST['form_email'];
    $userpass = $_POST['form_pass'];

    $select_query = "SELECT * FROM `employees` WHERE `email` = '$useremail' AND `password` = '$userpass'";

    $select = mysqli_query($conn, $select_query);
    // echo mysqli_num_rows($select);
    $row_number = mysqli_num_rows($select);
    if($row_number <= 0) {
        ?>
        <script>
            alert("Incorrect email or password")
        </script>
        <?php
    }
    else {
        session_start();
        $data = mysqli_fetch_assoc($select);
        $_SESSION['id'] = $data['id'];
        $_SESSION['name'] = $data['firstname']. " ".$data['lastname'] ;
        header("location:dashboard.php");
    }
}
?>