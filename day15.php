<?php
// echo time();
// if(setcookie("category", "Book", time() + 20)) {
//     echo "cookie set";
// }
// else {
//     die("Error Occured ").mysqli_error($conn);
// }
// $_COOKIE['cookie_one'] = "Haaris";


session_start();

$_SESSION['name'] = "Haaris";
$_SESSION['password'] = "!h@a#ar%i^s";

if(isset($_SESSION['name']) && isset($_SESSION['password'])) {
    echo "Session started";
}
else {
    echo "Session Expired";
}
?>