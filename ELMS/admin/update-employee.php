<?php
$id = $_GET['id'];
// echo $id;
include '../connection.php';
$select_query = "SELECT * FROM `employees` WHERE `id` = $id";
$select = mysqli_query($conn, $select_query);
$data = mysqli_fetch_assoc($select);
// print_r($data);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Employee Record</title>
    <style>
        .container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .container form div {
            margin: 10px;
            border: solid 2px;
            padding: 10px;
        }

    </style>
</head>

<body>
    <div class="container">
    <h1>Please Fill the details here</h1>
    <form action="update-employee.php?id=<?php echo $id?>" method="post">
        <div>
            <label for="">Enter First Name</label>
            <input type="text" name="form_first_name" id="" value="<?php echo $data['firstname']?>">

            <label for="">Enter Last Name</label>
            <input type="text" name="form_last_name" id="" value="<?php echo $data['lastname']?>">
            
            <label for="">Enter Employee ID: </label>
            <input type="text" name="form_emp_id" id="" value="<?php echo $data['emp_id']?>">
        </div>

        <div>
            <label for="">Department: </label>
            <select name="form_department" id="">
                <option value="IT">IT</option>
                <option value="Marketing">Marketing</option>
                <option value="Sales">Sales</option>
                <option value="Finance">Finance</option>
                <option value="Legal">Legal</option>
                <option value="HR">HR</option>
                <option value="Accounts">Accounts</option>
                <option value="Other">Other</option>
            </select>

            <label for="">Enter Designation</label>
            <input type="text" name="form_designation" id="" value="<?php echo $data['designation']?>">
        </div>

        <div>
            <label for="">Enter Qualification: </label>
            <input type="text" name="form_qualification" id="" value="<?php echo $data['qualification']?>">

            <label for="">Enter Phone Number: </label>
            <input type="number" name="form_phone" id="" value="<?php echo $data['phone']?>">
        </div>
        
        <div>
            <label for="">Enter Email: </label>
            <input type="text" name="form_email" id="" value="<?php echo $data['email']?>">

            <label for="">Enter Address: </label>
            <textarea name="form_address" id="" cols="70" rows="10"><?php echo $data['address']?></textarea>
        </div>

        <div>
            <input type="submit" value="Update" name="sub">
            <button><a href="admin-dashboard.php" style="text-decoration: none; color: black;">Go to dashboard</a></button>
        </div>
    </form>
    </div>
</body>

</html>

<?php
if (isset($_POST['sub'])) {
    $firstname = $_POST['form_first_name'];
    $lastname = $_POST['form_last_name'];
    $emp_id = $_POST['form_emp_id'];
    $department = $_POST['form_department'];
    $designation = $_POST['form_designation'];
    $qualification = $_POST['form_qualification'];
    $phone = $_POST['form_phone'];
    $email = $_POST['form_email'];
    $address = $_POST['form_address'];

    // echo $firstname, $lastname, $emp_id, $department, $designation, $qualification, $phone, $email, $address;

    $update_query = "UPDATE `employees` SET `firstname`='$firstname',`lastname`='$lastname',`emp_id`='$emp_id',`department`='$department',`designation`='$designation',`qualification`='$qualification',`phone`='$phone',`email`='$email',`address`='$address' WHERE `id` = $id";

    $update = mysqli_query($conn, $update_query);
    if($update) {
        ?>
        <script>
            alert("Record Updated successfuly")
            location.href = "employee-details.php"
        </script>
        <?php
    }
    else {
        die("Update cannot be completed at the moment. Error - ".mysqli_error($conn));
    }
}
?>