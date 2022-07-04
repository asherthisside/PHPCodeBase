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

        .container .button {
            flex: 1;
            text-align: center;
            /* border: 1px solid black; */
            padding: 10px;
            margin: auto 10px;
        }
    </style>

</head>

<body>
    <?php 
    include 'admin-header.php'; 
    include '../connection.php';
    $employees_query = "SELECT * FROM `employees`";
    $employees = mysqli_query($conn, $employees_query);
    $employees_num = mysqli_num_rows($employees); 

    $leave_requests_query = "SELECT * FROM `leaves` WHERE `status` = 'N/A'";
    $leave_requests = mysqli_query($conn, $leave_requests_query);
    $leave_requests_num = mysqli_num_rows($leave_requests);
    
    $update_requests_query = "SELECT * FROM `info-updates`";
    $update_requests = mysqli_query($conn, $update_requests_query);
    $update_requests_num = mysqli_num_rows($update_requests);
    
    $leave_history_query = "SELECT * FROM `leaves`  WHERE `status` != 'N/A'";
    $leave_history = mysqli_query($conn, $leave_history_query);
    $leave_history_num = mysqli_num_rows($leave_history);
    ?>
    <div class="container">
        <div class="button">
            <a href="employee-details.php">
                <button class="btn btn-primary">View Employees
                <span class="badge badge-dark bg-dark"><?php echo $employees_num ?></span>
                </button>
            </a>
        </div>
        <div class="button">
            <a href="leave-requests.php">
                <button class="btn btn-primary">Leave Request
                <span class="badge badge-dark bg-dark"><?php echo $leave_requests_num ?></span>
                </button>
            </a>
        </div>
        <div class="button">
            <a href="update-requests.php">
                <button class="btn btn-primary">Update Requests
                <span class="badge badge-dark bg-dark"><?php echo $update_requests_num ?></span>
            </button>
                </a>
                
        </div>
        <div class="button">
            <a href="leaves.php">
                <button class="btn btn-primary">Leaves History
                    <span class="badge badge-dark bg-dark"><?php echo $leave_history_num ?></span>
                </button>
                </a>
        </div>
    </div>
</body>

</html>