<?php
// Regular Expressions - Complex search strings used to search for some specific patterns in a given string.
// Syntax :- /pattern/modifiers

// $str = "His name is harrrry. Harry is a good boy";
// if(preg_match_all("/h([au]r{2})y/i", $str, $abc)) {
//     echo "Match Found";
// }
// else {
//     echo "No match Found";
// }

// echo "<pre>";
// print_r($abc);
// echo "</pre>";

// Character set - We use [] for character sets.
// Meta character symbols 
// caret symbol (^) - used to check for a character in the starting of a string.
// Dollar ($) - used to check for a character in the end of a string.
// Dot (.) - used to check for one character in its place
// Asterisk (*) - used to check any number of characters in its place.
// Question mark (?) - used to make any character optional

// Quantifier - We use {} to specify the quantity that any character can be present in.
// Grouping - We use () to group certain characters or character sets together

// Create a regular expression for mobile number: 
//     1. Length should be 10 characters.
//     2. It should start with a character between 6-9

// Regular Expression for a name:
    // Starting with a capital letter
    // Length can be in between 3 to 20

// $phoneNumber = "9634166040";
// if(preg_match("/^[6-9][0-9]{9}$/", $phoneNumber, $arr)) {
//     echo "Match Found";
// }
// else {
//     echo "No Match Found";
// }

// echo "<pre>";
// print_r($arr);
// echo "</pre>";
// $name = "Rajeshwaran Das";
// if(preg_match("/^[A-Z][a-z]{2,19} [A-Z][a-z]{3,20}$/", $name, $arr)) {
//     echo "Match Found";
// }
// else {
//     echo "No Match Found";
// }

// echo "<pre>";
// print_r($arr);
// echo "</pre>";

// Shorthand character classes: 
// \w - searches for an alphanumeric character 
// \w+ - searches for more than 1 alphanumeric character 
// \W - Allows no alphanumeric characters
// \d - searches for a numeric character 
// \d+ - searches for more than 1 numeric character 
// \D - Allows no numeric character
// \s - searches for a whitespace character 
// \d+ - searches for more than 1 whitespace character 
// \S - Allows no whitespace character
// \b - Represent the word boundary

$str = "His name is h3rry. Hcrry is a good boy";
if(preg_match_all("/h\wrry/", $str, $abc)) {
    echo "Match Found";
}
else {
    echo "No match Found";
}

echo "<pre>";
print_r($abc);
echo "</pre>";
?>