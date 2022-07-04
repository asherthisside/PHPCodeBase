<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View All Employees</title>
</head>

<body>
    <?php include 'admin-header.php' ?>
    <div class="container">
    <h1 class="text-center display-1">Employee Details</h1>
    <p class="text-center">All the details of employees are shown here</p>
    <div class="button mb-2" style="float: right;">
        <a href="add-employee.php">
            <button class="btn btn-primary">Add New</button>
        </a>
    </div>
    <table class="table table-striped">
        <tr class="table-dark">
            <th>Employee ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Department</th>
            <th>Designation</th>
            <th>Qualification</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Address</th>
            <th>Actions</th>
        </tr>


        <?php
        include '../connection.php';
        $select_all_query = "SELECT * FROM `employees`";
        $select = mysqli_query($conn, $select_all_query);
        if (!$select) {
            die("Error while executing the query. " . mysqli_error($conn));
        } else {
            while ($data = mysqli_fetch_assoc($select)) {
        ?>
                <tr>
                    <td><?php echo $data['emp_id'] ?></td>
                    <td><?php echo $data['firstname'] ?></td>
                    <td><?php echo $data['lastname'] ?></td>
                    <td><?php echo $data['department'] ?></td>
                    <td><?php echo $data['designation'] ?></td>
                    <td><?php echo $data['qualification'] ?></td>
                    <td><?php echo $data['phone'] ?></td>
                    <td><?php echo $data['email'] ?></td>
                    <td><?php echo $data['address'] ?></td>
                    <td>
                        <a href="update-employee.php?id=<?php echo $data['id'] ?>"><button class="btn btn-warning">update</button></a>
                        <a href="delete-employee.php?id=<?php echo $data['id'] ?>"><button class="btn btn-danger">Delete</button></a>
                    </td>
                </tr>
        <?php
            }
        }
        ?>

    </table>

    </div>
</body>

</html>