<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee - Sign Up</title>
    <style>
        .container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .container form div {
            margin: 10px;
            padding: 10px;
        }

    </style>
</head>

<body>
    <div class="container">
    <h1>Sign Up here</h1>
    <form action="signup.php" method="post" enctype="multipart/form-data">
        <fieldset>
            <legend>Please fill the Information here</legend>
        <div>
            <label for="">Enter Employee ID: </label>
            <input type="text" name="form_emp_id" id="">

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
            <input type="text" name="form_designation" id="">
        <div>
            <label for="">Enter Qualification: </label>
            <input type="text" name="form_qualification" id="">

            <label for="">Enter Phone Number: </label>
            <input type="number" name="form_phone" id="">

            <label for="">Enter Email: </label>
            <input type="text" name="form_email" id="">
        </div>
        
        <div>
            <label for="">Enter Address: </label>
            <textarea name="form_address" id="" cols="50" rows="10"></textarea>

            <label for="">Create Password</label>
            <input type="password" name="form_password" id="">
        </div>
        <div>
            <label for="abc">Upload Image: </label>
            <input type="file" name="form_image" id="abc">
        </div>

        </fieldset>
        
        <div>
            <input type="submit" value="SignUp" name="sub">
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
    $image = $_FILES['form_image'];
    $imagename = $_FILES['form_image']['name'];

    $signup_query = "UPDATE `employees` SET `department`='$department',`designation`='$designation',`qualification`='$qualification',`phone`='$phone',`email`='$email',`address`='$address',`password`='$password',`image`='$imagename' WHERE `emp_id`= '$emp_id'";

    $signup = mysqli_query($conn, $signup_query);

    move_uploaded_file($image['tmp_name'], 'upload/'.$imagename);
}
?>