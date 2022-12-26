<?php
//session 
// used to manage information accross differnt pages


//verify the user login Info
session_start();
$_SESSION['username'] = "upendra";
$_SESSION['favcat'] = "Books";
echo "we have saved your session";

?>