<?php
//echo "connecting database to php"

/*Ways to connect to MySQL Database
// MYSQLi is improved version of MySQL
1. MySQLi extension

//PDO work with different database systems
2. PDO (php Data objects)
*/

//connecting to the database

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

?>