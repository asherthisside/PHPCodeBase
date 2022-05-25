<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Employee</title>
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
    <form action="add-employee.php" method="post">
        <div>
            <label for="">Enter First Name</label>
            <input type="text" name="form_first_name" id="">

            <label for="">Enter Last Name</label>
            <input type="text" name="form_last_name" id="">
            
            <label for="">Enter Employee ID: </label>
            <input type="text" name="form_emp_id" id="">
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
            <input type="text" name="form_designation" id="">
        </div>

        <div>
            <label for="">Enter Qualification: </label>
            <input type="text" name="form_qualification" id="">

            <label for="">Enter Phone Number: </label>
            <input type="number" name="form_phone" id="">
        </div>
        
        <div>
            <label for="">Enter Email: </label>
            <input type="text" name="form_email" id="">

            <label for="">Enter Address: </label>
            <textarea name="form_address" id="" cols="70" rows="10"></textarea>
        </div>

        <div>
            <input type="submit" value="Insert" name="sub">
            <button><a href="admin-dashboard.php" style="text-decoration: none; color: black;">Go to dashboard</a></button>
        </div>
    </form>
    </div>
</body>

</html>

<?php
if (isset($_POST['sub'])) {
    include '../connection.php';
    $firstname = $_POST['form_first_name'];
    $lastname = $_POST['form_last_name'];
    $emp_id = $_POST['form_emp_id'];
    $department = $_POST['form_department'];
    $designation = $_POST['form_designation'];
    $qualification = $_POST['form_qualification'];
    $phone = $_POST['form_phone'];
    $email = $_POST['form_email'];
    $address = $_POST['form_address'];

    echo $firstname, $lastname, $emp_id, $department, $designation, $qualification, $phone, $email, $address;
}
?>