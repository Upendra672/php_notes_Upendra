<?php
// 1. for each loop


$arr = array("Upendra", "aditi", "akash", "harsh");

// for ($i=0; $i < count($arr); $i++) { 
//     echo $arr[$i];
//     echo "<br>";
// }


//better way to do this - foreach loops

foreach ($arr as $value) {
    echo $value;
    echo "<br>";
}

?>