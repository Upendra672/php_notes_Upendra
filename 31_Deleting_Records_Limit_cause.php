<?php
//deleting records from table.


//connecting to the database
$servername = "localhost";
$username = "root";
$password = "";
$database = "test1";

//create a connection 
$conn = mysqli_connect($servername, $username, $password, $database);

// Die if connection was not successful
if (!$conn) {
    die("sorry we failed to connect:" . mysqli_connect_error());
} else {
    echo "connection is successful";
}
echo "<br>";

$sql = "DELETE FROM `phptrip` WHERE `dest` = 'China'";
$result = mysqli_query($conn, $sql);

$aff = mysqli_affected_rows($conn);
echo "Number of affected rows: $aff";
echo "<br>";

if($result){
    echo "Delete successfully";
}
else{
    $err = mysqli_error($conn);
    echo "Not Delete successfully due to this error --> $err";
}


?>