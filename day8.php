<!-- Functions - ? -->
<?php
function hello() {
    echo "Hi there.<br>";
}

// for ($i=0; $i < 11; $i++) { 
//     hello();
// }

// Pre-defined functions 
function myheader() {
    echo "<h1>This is a header</h1>.<br>";
}
// myheader();


// String functions
$str = "This is a string. I love this string. This is great.";
// $str = "I'm a student, sir."; 
// $nospace = trim($str);
// echo "<pre>$str</pre>";
// echo "<pre>$nospace</pre>";

// $length = strlen($str);        // Returns the length of the file
// echo "The length is $length.<br>";
// echo strtolower($str)."<br>";
// echo strtoupper($str)."<br>";
// echo strpos($str, "string")."<br>";
// echo str_word_count($str)."<br>";
// echo strrev($str)."<br>";

// $arr = str_word_count($str, 2, ",.");
// print_r($arr);

// $substring = substr($str, 10, 5);
// echo $substring."<br>";
// echo substr_count($str, "s")."<br>";
echo str_replace("is", "IS", $str)."<br>";

$n = 12.73656;
// echo round($n)."<br>";
// echo sqrt($n)."<br>";
echo rand(1000, 9999)."<br>";
echo abs(-43);


$name = "Haaris";
// Array - array()

$names = array("Haaris", "Akku", "Buddy", "Vinz");
echo var_dump($names)."<br>";
// print_r($names);

echo $names[0]."<br>";
echo $names[1]."<br>";
echo $names[2]."<br>";
echo $names[3]."<br>";
?>