<?php

$dbhost							= "localhost";
$dbuser							= "root";
$dbpass							= "safipassword";

$dbname							= "magnum_hiprojects";
$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die ("Error connecting to database");
mysql_select_db($dbname);
?>