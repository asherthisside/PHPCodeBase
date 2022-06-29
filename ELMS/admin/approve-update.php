<?php
include '../connection.php';
$id = $_GET['id'];
// $approve_query = "UPDATE `info-updates` SET `status` = 'Approved'";
// $approve = mysqli_query($conn, $approve_query);

$select_data_query = "SELECT * FROM `info-updates` WHERE `id` = $id";
$select_data = mysqli_query($conn, $select_data_query);
$data = mysqli_fetch_assoc($select_data);
print_r($data);
?>