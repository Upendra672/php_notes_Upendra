<?php

//updating records in php and where clause

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

 $sql = "SELECT * FROM `phptrip` WHERE `Dest`='China'";
$result = mysqli_query($conn, $sql);


//Usage of WHERE Clause to fetch data from the database.
$num = mysqli_num_rows($result);
echo $num ." records are found in database";
echo "<br>";


$no = 1;
if($num >0 ){

    while($row =  mysqli_fetch_assoc($result)){
        // echo var_dump($row);
        echo $no . " Hello " . $row["Name"] . " Welcome to " . $row["Dest"];
        echo "<br>";
        $no = $no + 1;        
        echo "<br>";
    }
}

//usage of WHERE Clause to update Data

$sql = "UPDATE `phptrip` SET `Name` = 'shyama' WHERE `Dest` = 'Bali'";
$result = mysqli_query($conn, $sql);
echo var_dump($result);
echo "<br>";

//rows affected after query executed.
$aff = mysqli_affected_rows($conn);
echo "Number of affected rows: $aff";
echo "<br>";


if($result){
    echo "We updated the record";
    echo "<br>";
}
else{
    echo "we could not update the record succcessfully";
    echo "<br>";
}
?>
