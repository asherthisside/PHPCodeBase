<!-- Database - Organised collection of data. Stored in such a way that it can be accessed, modified, retreived and deleted in future. -->
<?php
// $conn = mysqli_connect("localhost", "root", "admin");
// if($conn) {
//     echo "Database connection successful";
// }
// else {
//     echo "Couldn't connect to database. An Error Occured".mysqli_connect_error();
// }

// $db_con = mysqli_select_db($conn, "9ambatch");
// if($db_con) {
//     echo "<br>Connected to Database 9ambatch";
// }
// else {
//     echo "<br>Error occured while connecting to database ".mysqli_error($conn); 
// }

// $create_table_query = "CREATE TABLE third (id int, name VARCHAR(35) , address VARCHAR (200))";

// $create_table = mysqli_query($conn, $create_table_query);
// if($create_table) {
//     echo "<br>table created";
// }
// else {
//     echo "<br>Error: - ".mysqli_error($conn);
// }

// $insert_query = "INSERT INTO `second`(`name`) VALUES ('Naman')";

// $insert = mysqli_query($conn, $insert_query);
// if($insert) {
//     echo "<br>Data inserted";
// }
// else {
//     echo "Error ".mysqli_error($conn);
// }


// $select_query = "SELECT * FROM `second`";
// $select = mysqli_query($conn, $select_query);
// if($select) {
//     echo "<br>Data Selected";
// }
// else {
//     echo "Data wasn't selected ".mysqli_error($conn);
// }
// echo "<br>";
// $data = mysqli_fetch_assoc($select);
// print_r($data);
// echo "ID:- ".$data['id']." Name :- ".$data['name']." Address :- ".$data['email'];

// ?>
// <table border="1">
//     <tr>
//         <th>ID</th>
//         <th>Name</th>
//         <th>Email</th>
//     </tr>

// <?php

// while($data = mysqli_fetch_assoc($select)) {
//     ?>
//     <tr>
//         <td><?php echo $data['id']?></td>
//         <td><?php echo $data['name']?></td>
//         <td><?php echo $data['email']?></td>
//     </tr>
//     <?php
//     // echo "ID:- ".$data['id']." Name :- ".$data['name']." Address :- ".$data['email']."<br>";
// }

session_start();
session_unset();
echo "Hey, $name. Your entered password is $password";
?>
</table>