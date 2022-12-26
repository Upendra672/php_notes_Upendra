<?php 
//string functions

$name = "Upendra is a good boy";
echo $name;
echo "<br>";


//1. strlen() is used to count the string length
echo strlen($name);
echo "<br>";
//to join strings (dot) operator is used
echo "The length of my string is ".strlen($name);
echo "<br>";


//2. str_word_count is used to count words
echo str_word_count($name);
echo "<br>";


//3. strrev() is used to revese the string
echo strrev($name);
echo "<br>";



// 4. strpos() is used to get the position of string element

echo strpos($name, "boy");
echo "<br>";

//5. str_replace() is used to replace string

echo str_replace("Upendra", "Akash", $name);
echo "<br>";
echo "<br>";
echo "<br>";


//6. str_repeat() is used to repeat the value multiple times

echo str_repeat("Upendra <br>", 10 );
echo "<br>";


//rtrim() is used to trim the string
echo "<pre>";
echo rtrim("       this is a good boy        ");
echo "<br>";
echo ltrim("       this is a good boy        ");

echo "</pre>";

//other string function refer from php website

?>