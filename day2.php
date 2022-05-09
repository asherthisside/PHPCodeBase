<?php
// Logical operators - (AND(), OR and NOT)

// Control structure - Sequential, Conditional(if, else) and Iterative
$a = 45;
$b = 15;
// if(condition) {
    // statements to be executed when condition is true
// }
// else {
    // statements to be executed when condition is false
// }

// if ($a > $b) {
//     echo "Yes, A is greater than B";
//     echo "<br>";
//     echo $a + $b;
// }
// else {
//     echo "No, A is not greater than B. So not doing any further step";
//     echo "<br>";
// }

// == - checks for the value only
// === - checks for both, the value and the data type

// if ($a != 23) {
//     echo "True<br>";
// }
// else {
//     echo "False<br>";
// }

// if($a > 10) {
//     echo "True<br>";
// }
// else {
//     echo "False<br>";
// }

// Single condition 
// Multiple conditions - 
    // i) At once (We use Logical operators)
    // ii)Different times 
    //     a) When a previous condition is false, (IF-ELSE IF Ladder)
    //     b) when previous condition is true) (Nested IF-ELSE)

// if($b < 10 or $b > 12 and $b == 25) {
//     echo "Both the conditions are true<br>";
// }
// else {
//     echo "Both the conditions are not true<br>";
// }

// IF - Else If ladder 
$abc = 53;
$def = 34;

// if ($abc >= 50) {
//     echo "Con1 is true <br>";
// }
// else if($abc > 40){
//     echo "Con2 is true <br>";
// }
// else if($abc > 20){
//     echo "Con3 is true<br>";
// }
// else {
//     echo "Con3 is false";
// }



// Nested If - else 

if ($def > 10) {
    echo "Con1 is true";
    if($def > 20) {
        echo "Con2 is true";
    }
    else {
        echo "Con2 is false";
    }
}
else {
    "Con1 is false";
}
echo "Program terminated";

// Take 3 numbers, and print which one is greatest, smallest and the middle one.
?>