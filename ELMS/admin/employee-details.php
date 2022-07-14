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
            $limit = 1;
            if(isset($_GET['page'])) {
                $page_number = $_GET['page'];
            }
            else {
                $page_number = 1;
            }
            $offset = ($page_number - 1) * $limit;
            $limited_select_query = "SELECT * FROM `employees` LIMIT {$offset}, {$limit}";
            $limited_select = mysqli_query($conn, $limited_select_query);
            $select_all_query = "SELECT * FROM `employees`";
            $select = mysqli_query($conn, $select_all_query);
            $total_records = mysqli_num_rows($select);
            $total_pages = $total_records / $limit;
            if (!$select) {
                die("Error while executing the query. " . mysqli_error($conn));
            } else {
                while ($data = mysqli_fetch_assoc($limited_select)) {
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
        <div class="row d-flex justify-content-center">
            <nav aria-label="...">
                <ul class="pagination">
                    
                    <?php
                        if ($page_number > 1) {
                            echo '<li class="page-item"><a class="page-link" href="employee-details.php?page='.($page_number - 1).'">Previous</a></li>';
                        }
                    for ($i = 1; $i <= $total_pages; $i++) {
                        if ($page_number == $i) {
                            echo '<li class="page-item active"><a class="page-link" href="employee-details.php?page='.$i.'">'.$i.'</a></li>';
                        }
                        else {
                            echo '<li class="page-item"><a class="page-link" href="employee-details.php?page='.$i.'">'.$i.'</a></li>';
                        }
                    }
                    if($total_pages > $page_number) {
                        echo '<li class="page-item"><a class="page-link" href="employee-details.php?page='.($page_number + 1).'">Next</a></li>';
                    }
                    ?>
                    <!-- <li class="page-item active" aria-current="page">
                    <a class="page-link" href="#">2</a>
                </li> -->
                    
                </ul>
            </nav>
        </div>
    </div>
</body>

</html> 
