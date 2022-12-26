<?php

//fgetc(), fgets() in PHP


$fptr = fopen("notes.txt", "r");

//fgets() helps to read only one line from the file
//reads file linne by line
// echo fgets($fptr);  //for single line
// echo "<br>";

// for whole file using while loop line by line
// while($a= fgets($fptr)){
//     echo $a;
// }
// echo "<br>";
// echo "end of the file ha been reached";


//for whole file using while loop character by character
// while($a= fgetc($fptr)){
//     echo $a;
// }
// echo "<br>";
// echo "end of the file ha been reached";



//write a program which read the content character by character of the file until .(fullstop) has been encounterd 

while($a= fgetc($fptr)){
    echo $a;
    if($a == '.'){
        break;
    }
}
fclose($fptr);

?>