<?php

//inserting data into database using php

$servername = "localhost";
$username = "root";
$password = "";
$database = "test1";

//create a connection 
$conn = mysqli_connect($servername, $username, $password, $database);

// Die if connection was not successful
if(!$conn){
    die("sorry we failed to connect:" . mysqli_connect_error());
}
else{
    echo "connection is successful";
}
echo "<br>";

//variables to be inserted into the tables
$name = "Shyam";
$destination = "India";

//inserting data into database using php

$sql = "INSERT INTO `phptrip` (`Name`, `Dest`) VALUES ('$name', '$destination')";


$result = mysqli_query($conn, $sql);

//check for the data insertion in table creation scuccess
if($result){
    echo "The data is Inserted successfully";
    echo "<br>";
}
else{
    echo "The Data is not Inserted successfully becuase of tis error ----->" . mysqli_error($conn);
    echo "<br>";
}

?>