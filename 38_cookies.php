<?php

echo "welcome to the world of cookies";
echo "<br>";

//cookies | sessions

/*
cookies- this only stores the activity of users
sessions - this hold the very sensible data of others.
*/

//syntax to set a cookie
setcookie("category", "Books", time() + 86400, "/");
echo "The cookie is set";
echo "<br>";
?>