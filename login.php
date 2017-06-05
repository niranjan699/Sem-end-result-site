<?php
include 'connection.php';

$myusername = $_POST['USN'];
$mypassword = $_POST['password'];

$myusername = stripslashes($myusername);
$myusername = stripslashes($myusername);
$query = "select * from login_users where USN='$myusername' and password='$mypassword'";
$result=mysql_query($query);
$count= mysql_num_rows($result);
$arry = mysql_fetch_array($result);
session_start();
$_SESSION['USN']=$myusername;
mysql_close();

if($count==1){
	$seconds=300+time();
	$_SESSION['USN']=$myusername;
	header("location:test2.php#link4");
}
else {
	header("location:4041.php");
}
?>