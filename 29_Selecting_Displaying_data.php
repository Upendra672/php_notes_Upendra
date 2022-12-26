<?php
//selecting, Displaying data from mysql


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

$sql = "SELECT * FROM `phptrip`";
$result = mysqli_query($conn, $sql);

//find the number of records returned
//echo mysqli_num_rows($result);

$num = mysqli_num_rows($result);
echo $num ." records are found in database";
echo "<br>";

//display the rows returned bu the sql query
if($num >0 ){
    // $row = mysqli_fetch_assoc($result);  //mysqli_fetch_assco is used to fetch the data from DB and display on user screen
    // echo var_dump($row);
    // echo "<br>";
    while($row =  mysqli_fetch_assoc($result)){
        // echo var_dump($row);
        echo $row['serial'] . " Hello " . $row["Name"] . " Welcome to " . $row["Dest"];
        echo "<br>";
        
    }


}



?>