<?php
//writing and appendig to files
//w is for write option 


//writing to a file in php
//write mode overwrite the whole data present in the file
$fptr = fopen("notes1.txt", "w");
fwrite($fptr, "This is the best file on planet");
fclose($fptr);


//appending to a file in php
//a is used for append
// append help to add the content at the end of the file
$fptr = fopen("notes1.txt", "a");
fwrite($fptr, "this is being append to a file");
fclose($fptr);



?>