<?php
for($i = 1; $i <= 10; $i++) {
    ?>
    <p>This is paragraph <?php echo $i?> </p>
    <?php
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML Form</title>
</head>

<body>
    <form action="day11.php" method="post">
        <div>
            <label for="">Enter Name: </label> <br>
            <input type="text" name="username" id="" autocomplete="on">
        </div>

        <div>
            <label for="">Enter Password: </label> <br>
            <input type="password" name="pass" id="" autocomplete="off" value="<?php echo $result ?>">
        </div>

        <select name="operation" id="">
            <option value="1">Addition</option>
            <option value="2">Subtraction</option>
        </select>
        <input type="submit" value="Submit" name="sub">
    </form>
</body>

</html>

<?php
if(isset($_REQUEST['sub'])) {
    // $name = $_REQUEST['username'];
    // $password = $_REQUEST['pass'];
    $passoperation = $_REQUEST['operation'];
    $value = (int) $passoperation;
    // echo var_dump($passoperation)."<br>";
    // echo var_dump($value)."<br>";

    // echo "Name: $name<br>Password: $password";
}
// WAP to take 2 number inputs from the user, then ask for the choice. If the user's choice is 1, the add the two numbers. If it is 2, then subtract, multiply, if 3 and divide, if 4. 
?>


<!-- How to take values from a check box list -->
<!-- Create a text area where user can enter various names separating by a comma, then we have to print those names individually. -->
<!-- PHP explode() and implode() functions will be used -->

<!-- Git Password :- TbasketNeetu@1234! -->