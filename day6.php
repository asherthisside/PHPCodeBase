<?php
// $count = 0;
// for($i = 1; $i <= 50; $i++) {
//     $count++;
//     if($i % 3 == 0) {
//         echo $i."<br>";
//     }
// }

// echo "Numbers Printed:- $count";

// WAP to print the sum of first 30 numbers

// break and continue

// $i = 0;
// while($i < 100) {
//     echo $i."<br>";
//     if ($i == 18) {
//         break;
//     }
//     $i++;
// }

// Nested For Loop
// for($i= 1; $i < 4; $i++) {
//     for($j = 1; $j <= 5; $j++) {
//         echo $i.$j." ";
//     }
//     echo "<br>";
// }

// for ($a=0; $a < 3; $a++) { 
//     for ($b=0; $b < 3; $b++) { 
//         for ($c=0; $c < 3; $c++) { 
//             echo $a.$b.$c." ";
//         }
//         echo "<br>";
//     }
//     echo "<br>";
// }
function unicombs() {
    for ($p=0; $p <= 9; $p++) { 
        for ($q=0; $q <= 9; $q++) { 
            echo $p.$q."<br>";
        }
    }
}
unicombs();
// Functions - A piece of code that executes only when it is called.

/* 
3 steps:- 

1. Function declaration
2. Function definition
3. Function calling 
*/

// Modularity - 

// Racing Game - 