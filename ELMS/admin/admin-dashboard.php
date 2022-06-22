<?php
session_start();
echo "Hello, ".$_SESSION['name'].".";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    <style>
        .container {
            display: flex;
        }

        .container .btn {
            flex: 1;
            text-align: center;
            border: 1px solid black;
            padding: 10px; 
            margin: auto 10px;
        }
    </style>

</head>
<body>
    <div class="container">
        <div class="btn">
            <a href="employee-details.php"><button>View Employees</button></a>
        </div>
        <div class="btn">
            <a href="leave-requests.php"><button>Leave Requests</button></a>
        </div>
        <div class="btn">
            <a href="update-requests.php"><button>Update Requests</button></a>
        </div>
        <div class="btn">
            <a href="leaves.php"><button>Leaves History</button></a>
        </div>
    </div>
</body>
</html>