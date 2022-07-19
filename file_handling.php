<?php
// File ??
$filename = "CRUD/myintro.txt";
// if(file_exists($filename)) {
//     // echo "Yes, the file exists";
//     echo readfile($filename);
// }
// else {
//     echo "No, the file doesn't exists";
// }


// echo "<br>File size: ".filesize($filename);


$fp = fopen($filename, "r");    // Resource handler/File Pointer/Linker

// echo fread($fp, 20);
// echo "<br>";
// echo ftell($fp);    // Tells the position of the pointer
// echo "<br>";
// echo fread($fp, 20);
// echo "<br>";
// echo ftell($fp);
// fseek($fp, 5);  // Used to seek the pointer backward or forward
// echo fread($fp, filesize($filename));
// fseek($fp, 0);
// Read file line by line
// echo fgets($fp);
// echo fgets($fp);
// echo fgets($fp);
// echo fgets($fp);

// Read file character by character
// echo fgetc($fp);
// echo "<br>";
// echo fgetc($fp);

// Checking the End of File 
// if(feof($fp)) {
//     echo "File end reached";
// }
// else {
//     echo "File end not reached";
// }
while(!feof($fp)) {
    echo fgetc($fp)."<br>";
}

fclose($fp);
// $filename = "some_text.txt";
// $fp = fopen($filename, "w");

// $text = "This text is written by the using the fwrite function of PHP";
// fwrite($fp, $text);
// fclose($fp);

$fp = fopen($filename, "a");
$text = "This text is written by the using the fwrite function of PHP";
if(fwrite($fp, $text)) {
    echo "File Appended";
}
else {
    echo "File couldn't be appended";
}

fclose($fp);
?>