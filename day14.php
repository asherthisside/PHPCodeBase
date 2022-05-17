<?php
// $conn = mysqli_connect("localhost", "root", "admin", "9ambatch");
// if(!$conn) {
//     die("Connection to database could not be established");
// }

// $update_query = "UPDATE `second` SET `name`='Owais Lakhani',`email`='owais@gmail.com' WHERE `id`=5";

// $update = mysqli_query($conn, $update_query);
// if($update) {
//     echo "Data Updated";
// }
// else {
//     die("Data cannot be updated. Error -".mysqli_error($conn));
// }

// $delete_query = "DELETE FROM `second` WHERE `id` = '1' OR `email` = 'fdkgf@ymail.com'";

// $delete = mysqli_query($conn, $delete_query);
// if($delete) {
//     echo "Data deleted";
// }
// else {
//     die("Data cannot be deleted. Error -".mysqli_error($conn));
// }


// $cat = $_COOKIE['category'];
// echo "The favourite category of the user is ".$cat;
session_start();

$name = $_SESSION['name'];
$password = $_SESSION['password'];

echo "Hey, $name. Your entered password is $password";
?>