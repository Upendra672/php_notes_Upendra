<?php
//creating mysql database using php


$servername = "localhost";
$username = "root";
$password = "";

//create a connection 
$conn = mysqli_connect($servername, $username, $password);

// Die if connection was not successful
if(!$conn){
    die("sorry we failed to connect:" . mysqli_connect_error());
}
else{
    echo "connection is successful";
}
echo "<br>";


//create a db 

$sql = "CREATE DATABASE TEST3";
$result = mysqli_query($conn, $sql);

//check for the database creation scuccess
if($result){
    echo "The db was created successfully";
    echo "<br>";
}
else{
    echo "The db was nor creates successfully becuase of tis error ----->" . mysqli_error($conn);
    echo "<br>";
}

echo "The result is ";
echo var_dump($result);
echo "<br>";


?>