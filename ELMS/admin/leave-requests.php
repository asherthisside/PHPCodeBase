<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leave Requests</title>
</head>

<body>
    <?php include 'admin-header.php' ?>
    <h1 class="text-center display-1">Employees Leave Requests</h1>
    <p class="text-center">All the leave requests of employees are shown here</p>
    <table class="table table-striped">
        <tr class="table-dark">
            <th>Employee Name</th>
            <th>Department</th>
            <th>Leave Type</th>
            <th>No. of Leaves</th>
            <th>Date of Leave</th>
            <th>Actions</th>
        </tr>
        <?php
        include '../connection.php';
        $select_leaves_query = "SELECT * FROM `leaves` WHERE `status`='N/A' ORDER BY `start_date`";
        $select_leaves = mysqli_query($conn, $select_leaves_query);
        while ($data = mysqli_fetch_assoc($select_leaves)) {
            $emp_id = $data['e_id'];
            // echo $emp_id;
            $employee_data_query = "SELECT `firstname`, `lastname`, `department` FROM `employees` WHERE `id` = $emp_id";
            $employee_data = mysqli_query($conn, $employee_data_query);
            $data2 = mysqli_fetch_assoc($employee_data);
        ?>
            <tr>
                <td><?php echo $data2['firstname'] . " " . $data2['lastname'] ?></td>
                <td><?php echo $data2['department'] ?></td>
                <td><?php echo $data['leave_type'] ?></td>
                <td><?php echo $data['leave_num'] ?></td>
                <td><?php echo $data['start_date'] ?></td>
                <td>
                    <a href="confirm-leave.php?leave=<?php echo $data['id'] ?>"><button>Approve</button></a>
                    <a href="deny-leave.php?leave=<?php echo $data['id'] ?>"><button>Decline</button></a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>