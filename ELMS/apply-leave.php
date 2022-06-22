<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apply for leave here</title>
</head>
<body>
    <?php 
    include 'employee-header.php';
    include 'connection.php';
    $username = $_GET['name'];
    // echo $username;
    $select_data_query = "SELECT * FROM `employees` WHERE `firstname` = '$username'";
    $select_data = mysqli_query($conn, $select_data_query);
    $data = mysqli_fetch_assoc($select_data);
    $e_id = $data['id'];
    // echo $e_id;
    ?>

    <div class="container">
        <form action="apply-leave.php?name=<?php echo $username?>" method="post">
            <div>
                <label for="">No. of leaves: </label> <br>
                <input type="number" name="leave_num" id="">
            </div>
            <div>
                <label for="">Type of leave: </label> <br>
                <select name="leave_type" id="">
                    <option value="Casual Leave">Casual Leave</option>
                    <option value="Sick Leave">Sick Leave</option>
                    <option value="Loss of pay">Loss of pay</option>
                    <option value="Maternity Leave">Maternity Leave</option>
                    <option value="Others">Others</option>
                </select>
            </div>
            <div>
                <label for="">Leave Date: </label> <br>
                <input type="date" name="leave_date" id="">
            </div> 

            <input type="submit" value="Apply" name="sub">
        </form>
    </div>
</body>
</html>

<?php
if(isset($_POST['sub'])) {
    $leave_num = $_POST['leave_num'];
    $leave_type = $_POST['leave_type'];
    $leave_date = $_POST['leave_date'];

    $apply_leave_query = "INSERT INTO `leaves`(`e_id`, `leave_num`, `leave_type`, `start_date`) VALUES ('$e_id','$leave_num','$leave_type','$leave_date')";

    $apply_leave = mysqli_query($conn, $apply_leave_query);

    if ($apply_leave) {
        ?>
        <script>
            alert("Leave Applied Successfully. Please wait for admin to approve")
            window.open("dashboard.php", "_self")
        </script>
        <?php
    }
    die("An error occured".mysqli_error($conn));
}
?>