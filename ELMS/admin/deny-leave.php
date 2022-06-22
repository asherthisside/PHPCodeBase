<?php
include '../connection.php';
$leave_id = $_GET['leave'];
echo $leave_id;
$leave_approval_query = "UPDATE `leaves` SET `status`='Declined' WHERE `id` = $leave_id";
$leave_approval = mysqli_query($conn, $leave_approval_query);
header("location:admin-dashboard.php")
?>