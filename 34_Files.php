<?php
//Working with Files : File I/O in PHP 


//this show the character read along with text. beacaue of echo used below the variable
$a = readfile("notes.txt");
echo $a;
echo "<br>";


//this will only show the text.
readfile("notes.txt");


//image file open
readfile("./32_CRUD_PROJECT/PHP-logo.svg.png");


//html file read

readfile("file.html");

?>