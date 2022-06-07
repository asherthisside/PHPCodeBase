<?php
include '../connection.php';
$id = $_GET['id'];
$delete_query = "DELETE FROM `employees` WHERE `id` = $id";
$delete = mysqli_query($conn, $delete_query);
if($delete) {
    ?>
    <script>
        alert("Record deleted successfully");
        location.href = "employee-details.php"
    </script>    
    <?php
}
else {
    die("Record cannot be deleted at the moment. Error - ".mysqli_error($conn));
}
?>