<?php
error_reporting(0);
include 'connection.php';
session_start();
$id = $_SESSION['id'];
$select_data_query = "SELECT * FROM employees WHERE id = $id";
$select_data = mysqli_query($conn, $select_data_query);
$data = mysqli_fetch_assoc($select_data)
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/employee-dashboard.css">
</head>

<body>
    <?php include 'employee-header.php';?>
    <div class="container">
        <div class="top-section">
            <div class="emp_pic">
                <img src="<?php echo 'upload/'.$data['image']?>" alt="Unable to load image" height="100%" width="100%">
            </div>

            <div class="emp_name"><?php echo $_SESSION['name']?></div>
            <div class="emp_id"><?php echo $data['emp_id']?></div>
            <div class="emp_designation"><?php echo $data['designation']?></div>
        </div>

        <div class="department"><span>Deptt: </span><?php echo $data['department']?></div>
        <div class="qualification"><span>Qualification: </span><?php echo $data['qualification']?></div>

        <h2>Contact Inforrmation</h2>

        <div class="phone"><span>Phone: </span><?php echo $data['phone']?></div>
        <div class="email"><span>Email: </span><?php echo $data['email']?></div>
        <div class="address"><span>Address: </span><?php echo $data['address']?></div>
        <div class="leave-table">
            <table>
                <tr>
                    <th>Leave Type</th>
                    <th>No. of Leaves</th>
                    <th>Starting Date</th>
                    <th>Status</th>
                </tr>
                <?php
                $leave_record_query = "SELECT * FROM `leaves` WHERE `e_id` = $id";
                $leave_record = mysqli_query($conn, $leave_record_query);
                while($data2 = mysqli_fetch_assoc($leave_record)) {
                    ?>
                    <tr>
                        <td><?php echo $data2['leave_type']?></td>
                        <td><?php echo $data2['leave_num']?></td>
                        <td><?php echo $data2['start_date']?></td>
                        <td><?php echo $data2['status']?></td>
                    </tr>
                    <?php
                }
                ?>
            </table>
        </div>
    </div>
</body>

</html>