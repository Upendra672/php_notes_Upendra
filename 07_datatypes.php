<?php

$name = "upendra";
$income = '200';
// echo "$name is a good boy and earns $income<br>"; 
/* PHP data type
1. string
2. integer
3. float
4. boolean
5. object
6. Array
7. null 
8. var_dump is the function to know the data type of any variable*/

// String - sequence of characters

$name = "Upendra";
$friend = "Akash";
echo "$name ka friend is $friend <br>";

// Integer - non decimal number

$income = "455";
$debts = "-455";

echo "$income <br>";
echo "$debts <br>";


//Float - Decimal Point number

$income = "455.5";
$debts = "-455.4";
echo "$income <br>";
echo "$debts <br>";

//Boolean - can be either true or false
$x = true;
$is_friend = false;
//to print boolean values use var_dump function else when false is a value it will show blank of nothing
echo var_dump($x);
echo "<br>";
echo var_dump($is_friend);
echo "<br>";

//object - Instances of classes
// Employee is a class ---> harry can be one object

// Array -- Used to store multiple values in a single variable

$friends = array("rohan", "Upendra", "Aditi", "Akash");
echo "<br>";
echo var_dump($friends);
echo "<br>";
echo var_dump($friends[0]);
echo "<br>";
echo var_dump($friends[1]);
echo "<br>";
echo var_dump($friends[2]);
echo "<br>";
echo var_dump($friends[3]);
echo "<br>";

//Null 

$name = Null;
echo $name;
echo var_dump($name);

?>
