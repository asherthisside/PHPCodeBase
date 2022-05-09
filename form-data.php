<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML - Form</title>
</head>
<body>
    <form action="form-data.php" method="POST">
        <div>
            <label for="">Enter Name: </label> <br>
            <input type="text" name="username" id="" autocomplete="on">
        </div>

        <div>
            <label for="">Enter Password: </label> <br>
            <input type="password" name="pass" id="" autocomplete="off">
        </div>
        <input type="submit" value="Submit" name="sub">
    </form>
</body>
</html>

<?php
if(isset($_GET['sub'])) {
    $name = $_GET['username'];
    $password = $_GET['pass'];
    echo "Name: $name<br>Password: $password";
}
?>