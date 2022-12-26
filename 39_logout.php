<?php

//destroying the sessions here 

session_start();
session_unset();
session_destroy();

echo "<br> You have been logges out";


?>