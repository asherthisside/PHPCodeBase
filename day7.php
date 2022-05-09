<?php
// Defining a function - 
// function name_of_function () {
    // Definition
// }

// name_of_function();      Calling a function

function msg() {
    echo "Hello there. How are you?<br>";
}

// msg();

function calculate() {
    $a = 23;
    $b = 12;
    echo "Sum: ".$a + $b."<br>";
    echo "Difference: ".$a - $b."<br>";
}

// calculate();

// msg();
// calculate();

// Arguments or parameters

function msg2($name="User") {
    echo "Hi $name, How are you?<br>";
}

// msg2("Haaris");
// msg2("Kamaljeet");
// msg2("Peter");

function calculate2($a, $b) {
    echo "Sum: ".$a + $b."<br>";
    echo "Difference: ".$a - $b."<br>";
}

// calculate2(10, 20);
// calculate2(437, 291);

// Parameterised or non-parameterised functions
// msg2("Bhatti");
// msg2();



function divide($a, $b=2) {
    echo "Division: ".$a / $b ."<br>";
}

// divide(40, 4);
// divide(32, );

// Return

function add($a, $b) {
    // echo $a + $b."<br>";
    // return "abc";
    return $a + $b; 
}

// add(22, 18);

$s = add(10, 10);
$result = $s * 10;
echo $result;
// echo $s;

function getEvens() {
    for($i = 1; $i <= 100; $i++) {
        if($i % 2 == 0) {
            echo "$i ";
        }
    }
}

getEvens();

// 56 * 1 = 56
// 56 * 2 = 112
?>