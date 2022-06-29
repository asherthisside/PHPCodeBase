<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link rel="stylesheet" href="../assets/css/header-style.css">
</head>

<body>
    <header>
        <div class="emp_name">
            <?php
            session_start();
            echo "Hello, " . $_SESSION['name'] . ".";
            ?>
        </div>
        <div class="logout">
        <a href="logout.php" style="font-size: 1.25em; color: white"><i class="fa-solid fa-right-from-bracket"></i> <br> Logout</a>
        </div>
    </header>
</body>

</html>