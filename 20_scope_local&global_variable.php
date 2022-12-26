<?php

//scope, local and global variable
$a = 98;

function printValue(){
    $a = 97;
    echo "the value of you variable is $a";
}

echo $a;
echo "<br>";

printvalue();
?>