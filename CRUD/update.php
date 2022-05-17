<?php
include 'connection.php';
$id = $_GET['id'];
// echo $id;
$select_query = "SELECT * FROM `second` WHERE `id`= $id";
$data_select = mysqli_query($conn, $select_query);
$data = mysqli_fetch_assoc($data_select);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Your data here</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Please Fill the details here</h1>
    <a href="dashboard.php"><button>Go to Dashboard</button></a>
    <form action="update.php?id=<?php echo $data['id'] ?>" method="post" style="margin-top: 20px;">
        <div>
            <label for="">Enter Name</label> <br>
            <input type="text" name="form_name" id="" value="<?php echo $data['name']?>">
        </div>

        <div>
            <label for="">Enter Email</label> <br>
            <input type="email" name="form_email" id="" value="<?php echo $data['email']?>">
        </div>

        <div>
            <input type="submit" value="Update" name="sub">
        </div>
    </form>
</body>

</html>

<?php
if (isset($_POST['sub'])) {
    include 'connection.php';
    $name = $_POST['form_name'];
    $email = $_POST['form_email'];

    $update_query = "UPDATE `second` SET `name`='$name',`email`='$email' WHERE `id` = $id";

    $update = mysqli_query($conn, $update_query);
    if ($update) {
?>
        <script>
            alert("Data Updated");
            // window.open("dashboard.php", _self)
        </script>
<?php
header("location:dashboard.php");
    } else {
        echo "Error " . mysqli_error($conn);
    }
}
?>