<?php
//1. functions in php

//function for sum 

function processmarks($marksArr){
    $sum = 0;
    foreach ($marksArr as $key => $value) {
        $sum += $value;
    }
    return $sum;
}

$rohanDas = [34, 98, 35, 12, 90, 50];
$sumMarks = processmarks($rohanDas);
echo "Totla marks score by rohan Das out of 600 is $sumMarks";
echo "<br>";


//function for average marks static function

function averagemarks($marksArr){
    $sum1 = 0;
    $average = NUll;
    foreach ($marksArr as $key => $value) {
        $sum1 += $value;
        $average = $sum1 / 6;
    }
    return $average;
}
$rohanDas = [34, 98, 35, 12, 90, 50];
$percentage = averagemarks($rohanDas);
echo "Total percentage scored by rohandas is $percentage";
echo "<br>";


//dynamic fucntion for average or percentage here it divides array according to count of array.
function avgmarks($marksArr){
    $sum2 = 0;
    $i = 0;
    foreach ($marksArr as $key => $value) {
        $sum2 += $value;
        $i++;
    }
    return $sum2/$i;
}
$rohanDas = [34, 98, 35, 12, 90, 50,99];
$per = avgmarks($rohanDas);
echo "Total percentage scored by rohandas is $per";
echo "<br>";

?>