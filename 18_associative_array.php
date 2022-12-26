<?php
echo "hello";
echo "<br>";

//simple array example
// this are called index arrays

// $arr = array("this", "that", "what");
// echo $arr[0];
// echo $arr[1];
// echo $arr[2];

//1. assciative arrays

$favcol = array("Upendra" => "red", "aditi" => "green", "Akash" => "yellow");

// echo $favcol['Upendra'];
// echo "<br>";
// echo $favcol['Akash'];

// associtaive array with foreach loop

foreach ($favcol as $key => $value) {
    echo "<br> Favourite color of $key is $value";
}

?>
