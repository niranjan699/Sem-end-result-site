<?php
$username = "test";
$password = "test123";
$hostname = "localhost";

$dbhandle = mysql_connect($hostname,$username,$password) or die("Cloud not connect to data base");
$connected=mysql_select_db("results",$dbhandle);

?>
