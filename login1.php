<?php
include 'connection.php';

$myusername = $_POST['username'];
$mypassword = $_POST['password'];

$myusername = stripslashes($myusername);
$myusername = stripslashes($myusername);
$query = "select * from coe_login where username='$myusername' and password='$mypassword'";
$result=mysql_query($query);
$count= mysql_num_rows($result);
$arry = mysql_fetch_array($result);
session_start();
$_SESSION['USN']=$myusername;
mysql_close();

if($count==1){
	$seconds=300+time();
	$_SESSION['USN']=$myusername;
	header("location:coeh.php");
}
else {
	header("location:4041.php");
	
}
?>