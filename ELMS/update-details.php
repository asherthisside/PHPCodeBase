<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update your details here</title>
    <style>
        .container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .container form div > input {
            margin: 1em auto;
        }

    </style>
</head>
<body>
    <?php 
    include 'employee-header.php';
    include 'connection.php';
    $id = $_GET['id'];
    // echo $id
    $select_data_query = "SELECT * FROM `employees` WHERE `id` = $id";
    $select_data = mysqli_query($conn, $select_data_query);
    $data = mysqli_fetch_assoc($select_data);
    ?>
    <div class="container">
    <h1>Enter your details</h1>
    <form action="update-details.php?id=<?php echo $data['id']?>" method="post" enctype="multipart/form-data"> 
        <div>
            <label for=""><strong>Employee ID:</strong></label>
            <input class="form-control" type="text" name="form_emp_id" id="" value="<?php echo $data['emp_id']?>" readonly>

            <label for=""><strong>Department:</strong></label>
            <select name="form_department" id="" class="form-control">
                <option value="IT">IT</option>
                <option value="Marketing">Marketing</option>
                <option value="Sales">Sales</option>
                <option value="Finance">Finance</option>
                <option value="Legal">Legal</option>
                <option value="HR">HR</option>
                <option value="Accounts">Accounts</option>
                <option value="Other">Other</option>
            </select>

            <label for=""><strong>Designation:</strong></label>
            <input class="form-control" type="text" name="form_designation" id="" value="<?php echo $data['designation']?>">
        <div>
            <label for=""><strong>Qualification:</strong></label>
            <input class="form-control" type="text" name="form_qualification" id="" value="<?php echo $data['qualification']?>">

            <label for=""><strong>Phone Number:</strong></label>
            <input class="form-control" type="number" name="form_phone" id="" value="<?php echo $data['phone']?>">

            <label for=""><strong>Email:</strong></label>
            <input class="form-control" type="text" name="form_email" id="" value="<?php echo $data['email']?>">
        </div>
        
        <div>
            <label for=""><strong>Address:</strong></label>
            <textarea class="form-control" name="form_address" id="" cols="50" rows="10"><?php echo $data['address']?></textarea>

            <label for=""><strong>Password:</strong></label>
            <input class="form-control" type="text" name="form_password" id="" value="<?php echo $data['password']?>">
        </div>
        <div>
            <input class="form-control btn btn-success" type="submit" value="Update" name="sub">
        </div>
    </form>
    </div>
</body>

</html>

<?php
if (isset($_POST['sub'])) {
    include 'connection.php';
    $emp_id = $_POST['form_emp_id'];
    $department = $_POST['form_department'];
    $designation = $_POST['form_designation'];
    $qualification = $_POST['form_qualification'];
    $phone = $_POST['form_phone'];
    $email = $_POST['form_email'];
    $address = $_POST['form_address'];
    $password = $_POST['form_password'];

    $insert_query = "INSERT INTO `info-updates`(`emp_id`, `department`, `designation`, `qualification`, `phone`, `email`, `address`, `password`) VALUES ('$emp_id', '$department','$designation','$qualification','$phone','$email','$address','$password')";

    $update = mysqli_query($conn, $insert_query);

    if($update) {
        ?>
        <script>
            alert("Request sent to admin. . .")
            window.open("dashboard.php", "_self")
        </script>
        <?php
    }
    else {
        die("Cannot be updated at the moment. Try again after some time. ".mysqli_error($conn));
    }
}
?>
