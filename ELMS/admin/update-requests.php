<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Requests</title>
</head>

<body>
    <?php
    include 'admin-header.php';
    include '../connection.php';
    $select_requests_query = "SELECT * FROM `info-updates`";
    $select_requests = mysqli_query($conn, $select_requests_query)
    ?>
    <div class="container">
        <h1 class="text-center display-1">Data update requests</h1>
        <p class="text-center">All the requests for employee data update are shown here</p>
        <table class="table table-striped">
            <tr class="table-dark">
                <th>Department</th>
                <th>Designation</th>
                <th>Qualification</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>

            <?php
            while ($data = mysqli_fetch_assoc($select_requests)) {
            ?>
                <tr>
                    <td><?php echo $data['department'] ?></td>
                    <td><?php echo $data['designation'] ?></td>
                    <td><?php echo $data['qualification'] ?></td>
                    <td><?php echo $data['email'] ?></td>
                    <td><?php echo $data['phone'] ?></td>
                    <td><?php echo $data['address'] ?></td>
                    <td><?php echo $data['status'] ?></td>
                    <td>
                        <?php
                        if ($data['status'] == 'Pending') {
                            echo "<a href='approve-update.php?id=".$data['id']."'><button class='btn btn-sm btn-warning'>Approve</button> <button class='btn btn-sm btn-danger'>Decline</button>";
                        }
                        else {
                            echo "N/A";
                        }
                        ?>
                    </td>
                </tr>
            <?php
            }
            ?>
        </table>
    </div>

</body>

</html>