<?php
// Loops - 
$a = 101;
// while($a < 11) {
//     echo $a."<br>";
//     $a++;
// }

/* do {
    // statements
    // updation
}while(condition); */
// do {
//     echo $a."<br>";
//     $a++;
// }while($a  < 11);
// echo "Loop has ended<br>";
// echo $a."<br>";

// $counter = 32;
// do {
//     if($counter % 2 == 0) {
//         echo $counter."<br>";
//     }
//     $counter++;
// }while($counter <= 30);

// For Loop -
/* 
1. Condition Initialization
2. Condition check
2. Condition updation
*/

/* for(initialization; check; updation) {
    // statements
} */

// for($i = 0; $i < 11; $i++) {
//     echo $i."<br>";
// }

// for($i = 0; $i < 31; $i++) {
//     if($i % 2 == 0) {
//         echo $i."<br>";
//     }
// }

// WAP to print the square of the even numbers between 1 and 50 and cube of all odd numbers

// for($i = 1; $i <= 50; $i++) {
//     if($i % 2 == 0) {
//         echo $i ** 2;
//         echo "<br>";
//     }
//     else {
//         echo $i ** 3;
//         echo "<br>";
//     }
// }

// 1-2-3-4-5-6-7-8-9-10
$st = 1;
while($st <= 10) {
    if ($st < 10) {
        // echo "$st-";
        echo $st."-";
    }
    else {
        echo $st."<br>";
    }
    $st++;
}

// WAP to calculate the sum of first 30 even numbers
// WAP to calculate the number of multiples of 3 that lie in between 1 and 100
?>