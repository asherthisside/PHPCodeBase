<?php // Delimiters
// This is some text 
$a = 10;
$b = 5;
if($a > $b) {
    echo "This is true";
}

// echo "<h1 style='color:red'>This is some Heading</h1>";

// Data types 
/* 
1. String - Group of characters (they are written enclosed in quotation marks)  ->
2. Integer - Whole numbers 
3. Float - Decimal point numbers (123.32)
4. NULL - 
5. Boolean - True(1)/False(0) 
6. Array - used to store collection of values
7. Object - Real life instances of any class.
*/

$symbols = "123";
echo $symbols;

// var_dump - gives the information about any variable

echo var_dump($symbols);
echo "<br>";
echo 123;
echo "<br>";
echo true;
echo "<br>";
$value = 32.18;
echo "Info: ";
echo  var_dump($value).var_dump("This is a string");
echo "<br>";
echo var_dump(false);

echo "<br>";
$cars = array("abc", "def", "ghi", "jkl", "mno");
// echo $cars;
echo "<pre>";
echo var_dump($cars);
echo "</pre>";

print_r($cars);

echo "<br>This is a git repo now";

// Operations(Action - addition) || Operators(Signs or symbols) || Operands(Values that are being acted upon)

/* 
1. Arithmetic operators - help in mathematical operations(+, -, *, /, %, **)
2. Assignment operators - (=, +=, -=, *=, /=)
3. Relational(Comparision) operators - (==, >, <, >=, <=, !=)
4. Logical operators(AND, OR and NOT)
*/

echo "<br>";
$abc = 12;
// $abc = 34;
$abc2 = 10;

$abc = $abc2;
// $abc -= $abc2;
// $abc *= $abc2;
// $abc += $abc2;
// $abc /= $abc2;
echo $abc . ", ". $abc2;

echo "<br>";
echo $abc == $abc2;
?>

<!-- SUPERGLOBAL VARIABLES -  -->
<!-- CRUD - PROJECT  -->
<!-- OOPS - PROJECT  -->