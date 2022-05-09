<?php
// Multidimensional array

// 1, 2, 3, 4, 5, 6, 7, 8, 9
$name = "Haaris";
$multi = array(
    array(1, 2, 3, 4, 5, "String", true), 
    array('x', 'y', 'z', 'p', 'q', 12, false), 
    array(11, 12, 13, 14, 15, "Name", true)
);

// echo $multi[0][6];

for ($i=0; $i < 3; $i++) { 
    for ($j=0; $j < 5; $j++) { 
        echo $multi[$i][$j]." ";
    }
    echo "<br>";
}

/* 
1   2   3   4   5
x   y   z   p   q
11  12  13  14  15
*/

// Normal Array -> Indexed array (Normal For-loop)
// Associative array -> (Foreach loop)
// Multidimensional array -> (Nested for loop)

// Scope of variables :- 
// Local scope and Global scope 

$x = "abc";
echo $x."<br>";

function message() {
    global $x;
    $x = "ABC";
    echo "My name is ".$x."<br>";
}
// echo $msg;
message();
echo $x;

// Superglobal variables 

// echo $GLOBALS;
echo "<pre>";
print_r($GLOBALS);
echo "</pre>";

// Associative array -> Information about all the global variables that are present in the script currently.

for($k = 0; $k < 5; $k++) {
    
}

// echo $k;

// print_r($_GET)
$a = 12;
// echo isset($a);
if(isset($a)) {
    echo "It has value<br>";
}
else {
    echo "It doesn't have any value";
}
?>