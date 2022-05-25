<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View All Employees</title>
</head>
<body>

<a href="admin-dashboard.php"> Back to Dashboard</a>
<a href="add-employee.php"> + Add New</a>
<table border="1">
    <tr>
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
if(!$select) {
    die("Error while executing the query. ".mysqli_error($conn));
}
else {
    while($data = mysqli_fetch_assoc($select)) {
        ?>
        <tr>
            <td><?php echo $data['emp_id']?></td>
            <td><?php echo $data['firstname']?></td>
            <td><?php echo $data['lastname']?></td>
            <td><?php echo $data['department']?></td>
            <td><?php echo $data['designation']?></td>
            <td><?php echo $data['qualification']?></td>
            <td><?php echo $data['phone']?></td>
            <td><?php echo $data['email']?></td>
            <td><?php echo $data['address']?></td>
            <td>
                <a href=""><button>update</button></a>    
                <a href=""><button>Delete</button></a>    
            </td>
        </tr>
        <?php
    }
}
?>

</table>
    
</body>
</html>