<?php
// fopen() fread() fclose()

$fptr = fopen("notes.txt", "r");

// echo var_dump($fptr);


if(!$fptr){
    die("Unable to open this file. Please enter a valid filename");
}

$content = fread($fptr, filesize('notes.txt'));
echo $content;

//this close the open file at the end to free up the ram and storage it is necessary in big developments
fclose($fptr);


?>