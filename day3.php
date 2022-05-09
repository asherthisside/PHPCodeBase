<?php
$a = 1232;
$b = 403;
$c = 156;

$greatest = 0;
$middle = 0;
$smallest = 0;

// if($a > $b and $a > $c) {
//     echo "$a is greatest <br>";
//     if($b > $c) {
//         echo "$b is middle one <br>";
//         echo "$c is smallest <br>";
//     }
//     else {
//         echo "$c is middle one <br>";
//         echo "$b is smallest <br>";
//     }
// }
// else if($b > $a and $b > $c){
//     echo "$b is greatest<br>";
//     if($a > $c){
//         echo "$a is middle one<br>";
//         echo "$c is smallest<br>";
//     }
//     else{
//         echo "$c is middle one<br>";
//         echo "$a is smallest<br>";
//     }
// }
// else if($c > $a and $c > $b) {
//     echo "$c is greatest<br>";
//     if ($a > $b) {
//         echo "$a is middle one";
//         echo "$b is smallest";
//     }
//     else {
//         echo "$b is middle one";
//         echo "$a is smallest";
//     }
// }
// else {
//     echo "Equal<br>";
// }


if($a > $b and $a > $c) {
    $greatest = $a;
    if($b > $c) {
        $middle = $b;
        $smallest = $c;
    }
    else {
        $middle = $c;
        $smallest = $b;
    }
}
else if($b > $a and $b > $c){
    $greatest = $b;
    if($a > $c){
        $middle = $a;
        $smallest = $c;
    }
    else{
        $middle = $c;
        $smallest = $a;
    }
}
else if($c > $a and $c > $b) {
    $greatest = $c;
    if ($a > $b) {
        $middle = $a;
        $smallest = $b;
    }
    else {
        $middle = $b;
        $smallest = $a;
    }
}
else {
    echo "Equal<br>";
}

// echo "The greatest number is $greatest, middle number is $middle, and smallest of the numbers is $smallest<br>";

// Switch statement -  
/* 
switch(expression) {
    case 1:
        statements;
        break;
    case 2:
        statements;
        break;
    case 3:
        statements;
        break;

    default:
        statements;
    }
*/
$name = "Akanksha";
$abc = 10;
switch($name) {
    case 'Haaris':
        echo "Hi haaris, Your present for today has been marked";
        echo "You haven't taken your CL for this month yet";
        break;
        
    case 'Akash': 
        echo "Hi akash, You have been on break for 2 months continuously ";
        break;

    case 'Vedika': 
        echo "Value is 30<br>";
        break;

    case 40: 
        echo "Value is 40<br>";
        break;

    default:
        echo "Hi there, Please tell me your Employee ID";
    }

// break 
/* 
90%-100% => A
80%-90% => B
70%-80% => C
60%-70% => D
50%-60% => E
40%-50% => F
Below 40% => Failed
*/
echo "<br>";
// Iterative Control structure - (Loops)
// 2 generic types of loops (a. Entry control loop(while loop, for), b. Exit control loop(do-while loop))
// DRY - Don't Repeat Yourself
// LOOP -> Circle 


// 1 - 5
?>