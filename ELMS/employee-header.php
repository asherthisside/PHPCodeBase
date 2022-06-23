<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/css/header-style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gentium+Plus:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <div class="emp_name">Hello,<span style="font-style: italic;">
                <?php
                session_start();
                echo $_SESSION['name'];
                $firstname = substr($_SESSION['name'], 0, strpos($_SESSION['name'], " "));
                // echo $firtname;
                ?>


            </span></div>
        <nav>
            <ul>
                <li>
                    <a href="update-details.php?id=<?php echo $data['id']?>"><i class="fa-solid fa-file-pen"></i> <br> Update Info</a>
                </li>
                <li>
                    <a href="apply-leave.php?name=<?php echo $firstname?>">
                        <i class="fa-solid fa-folder-plus"></i> <br> Apply Leave</a>
                </li>
                <li>
                    <a href="logout.php"><i class="fa-solid fa-right-from-bracket"></i> <br> Logout</a>
                </li>
            </ul>
        </nav>
    </header>
</body>

</html>