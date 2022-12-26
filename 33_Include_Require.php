<?php
//include points
// 1. Include doesn't show error while procedding it only shoes warning and run the program.
//2. even if file is not present that doesn't show proper error.

//include '_dbconnect.php';


//require points
// 1. if the connecting file is not present it shows proper fatal error
// 2. so according to it we can correct the error at the same time. and then we can proceed.
//3. required is good to use.

require '_dbconnect.php';

$sql = "SELECT * FROM `phptrip`";
$result = mysqli_query($conn, $sql);

$num = mysqli_num_rows($result);
echo $num ." records are found in database";
echo "<br>";
echo "<br>";


//display the rows returned bu the sql query
$srno = 0;
    while($row =  mysqli_fetch_assoc($result)){
    $srno = $srno + 1;
        // echo var_dump($row);
        echo $srno. "."." Hello " . $row["Name"] . " Welcome to " . $row["Dest"];
        echo "<br>";
    }
?>
