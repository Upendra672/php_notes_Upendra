<?php
//creating table in mysql database using php


$servername = "localhost";
$username = "root";
$password = "";
$database = "test1";  //while creating table in database we need to specify the database

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


//create a table in DB

$sql = "CREATE TABLE `phptrip` (`serial` INT(11) NOT NULL AUTO_INCREMENT , `Name` VARCHAR(11) NOT NULL , `Dest` VARCHAR(11) NOT NULL , PRIMARY KEY (`serial`))";

$result = mysqli_query($conn, $sql);

//check for the table creation scuccess
if($result){
    echo "The Table was created successfully";
    echo "<br>";
}
else{
    echo "The Table was nor creates successfully becuase of tis error ----->" . mysqli_error($conn);
    echo "<br>";
}

?>