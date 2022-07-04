<?php
include '../connection.php';
$id = $_GET['id'];
// $approve_query = "UPDATE `info-updates` SET `status` = 'Approved'";
// $approve = mysqli_query($conn, $approve_query);

$select_data_query = "SELECT * FROM `info-updates` WHERE `id` = $id";
$select_data = mysqli_query($conn, $select_data_query);
$data = mysqli_fetch_assoc($select_data);
// print_r(var_dump($data));
$final_update_query = "UPDATE `employees` SET `department`='".$data['department']."',`designation`='".$data['designation']."',`qualification`='".$data['qualification']."',`phone`='".$data['phone']."',`email`='".$data['email']."',`address`='".$data['address']."',`password`='".$data['password']."' WHERE `emp_id` = '".$data['emp_id']."'";

$final_update = mysqli_query($conn, $final_update_query);
if($final_update) {
    $status_update_query = "UPDATE `info-updates` SET `status`='Approved' WHERE `id` = '$id'";
    $status_update = mysqli_query($conn, $status_update_query);
    ?>
    <script>
        alert("Updated")
        window.open("update-requests.php", "_self")
    </script>
    <?php
}
else {
    die("Process cannot be completed at the moment<br>".mysqli_error($conn)."<br>Please try again");
}
?>