<?php
//multi dimensonal arrays

//2 dimensional array
$multidim = array(
    array(2, 5, 7, 8),
    array(1, 2, 3, 1),
    array(2, 5, 7, 8));

// echo var_dump($multidim); using var_dump

for ($i=0; $i <count($multidim) ; $i++) {
    echo var_dump($multidim[$i]);
    echo "<br>";
}


//another method to print multi dimensional array using another for loop

for ($i=0; $i <count($multidim) ; $i++) {
    for ($j=0; $j <count($multidim[$i]) ; $j++){
        echo $multidim[$i][$j];
        echo " ";
    }
    echo "<br>";
}
?>