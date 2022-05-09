<?php
$names = array("Haaris", "Akku", "Buddy", "Vinz", "abc", "def", "GHI", "JKL");
// for($i = 0; $i <= 3; $i++) {
//     echo $names[$i]."<br>";
// }
echo "<pre>";
print_r( array_chunk($names, 4));
echo "</pre>";
echo "<br>";

// for($i = 0; $i < count($names); $i++) {
//         echo $names[$i]."<br>";
// }


// Take an array of first 10 multiples of 3. And print the sum of all elements.
$numbers = array(1, 2, 3, 4, 5);
echo array_sum($numbers);
echo "<br>";
// echo(array_pop($numbers));
print_r($numbers);
echo "<br>";
echo array_push($numbers, 6);
print_r($numbers);
echo "<br>";


// Associative Array 
$marks = array("Shubham" => 22, "Monika" => 43, "Rohit"=>"Failed", "Renu" => 56);
// echo $marks["Rohit"];
echo "<pre>";
print_r( array_chunk($marks, 2));
echo "</pre>";
echo "<br>";

// Foreach Loop
// foreach($marks as $value) {
//     echo " ".$value." ";
// }

foreach ($marks as $a => $b) {
    echo $a ." => ".$b."<br>";
}

// Take an array of 10 countries and their capital cities, then print them in the following way, 
// India - Delhi  
?>
