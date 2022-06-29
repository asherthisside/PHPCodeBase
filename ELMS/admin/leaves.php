<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Leaves</title>
</head>

<body>
    <?php include 'admin-header.php' ?>

    <h1 class="text-center display-1">Employees Leave Record</h1>
    <p class="text-center">All the leaves of employee are shown here</p>
    <table class="table table-striped">
        <tr class="table-dark">
            <th>Employee Name</th>
            <th>Department</th>
            <th>Leave Type</th>
            <th>No. of Leaves</th>
            <th>Date of Leave</th>
            <th>Status</th>
        </tr>
        <?php
        include '../connection.php';
        $select_leaves_query = "SELECT * FROM `leaves`";
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
                <?php
                if ($data['status'] == 'Declined') {
                    echo "<td class='text-danger'>" . $data['status'] . "</td>";
                } else {
                    echo "<td class='text-success'>" . $data['status'] . "</td>";
                }
                ?>

            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>