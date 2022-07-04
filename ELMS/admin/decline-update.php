<?php
include '../connection.php';
$id = $_GET['id'];
$status_update_query = "UPDATE `info-updates` SET `status`='Declined' WHERE `id` = '$id'";
$status_update = mysqli_query($conn, $status_update_query);
if($status_update) {
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