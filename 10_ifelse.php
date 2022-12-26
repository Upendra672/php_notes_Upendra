<?php 
//1. if else 

$a = 65;
$b = 9;

if ($a>78){
    echo "a is greater than 78";
}
else{
    echo "a is not greater than 78";
}
echo "<br>";



//2. if else ladder

$age = 23;

if ($age > 18){
    echo "you can drink chai with alcohol";
}
elseif($age >13){
    echo "you only drink chai with water";
}
else{
    echo "you can drink water only";
}
echo "<br>";


//3. write a program to allow a driver to drive only when his age is greater than 25 and less than 65

echo "Program for driver to drive the car";
echo "<br>";

$age = 30;

if($age >= 25 && $age <= 65 ){
    echo "You can drive the car";
}
else{
     echo "You cannot drive the car";
}
echo "<br>";

?>