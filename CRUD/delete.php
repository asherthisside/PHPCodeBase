<?php
include 'connection.php';

$id = $_GET['id'];
echo $id;

$delete_query = "DELETE FROM `second` WHERE `id` = '$id'";
$delete = mysqli_query($conn, $delete_query);

if ($delete) {
    ?>
    <script>
        alert("Data deleted");
        window.location.href = "dashboard.php";
    </script>
    <?php
}
else {
    die("Error Occured while deleting the record ".mysqli_error($conn));
}
?>