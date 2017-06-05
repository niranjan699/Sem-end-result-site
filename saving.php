<?php
include 'connection.php';

$NAME = $_POST['NAME'];
$USN = $_POST['USN'];
$CI1 = $_POST['CI1'];
$SI1 = $_POST['SI1'];
$CI2 = $_POST['CI2'];
$SI2 = $_POST['SI2'];
$CI3 = $_POST['CI3'];
$SI3 = $_POST['SI3'];
$CI4 = $_POST['CI4'];
$SI4 = $_POST['SI4'];
$CI5 = $_POST['CI5'];
$SI5 = $_POST['SI5'];
$CI6 = $_POST['CI6'];
$SI6 = $_POST['SI6'];
$CI7 = $_POST['CI7'];
$SI7 = $_POST['SI7'];
$CI8 = $_POST['CI8'];
$SI8 = $_POST['SI8'];

$query = "SELECT * FROM `firstsem_results`";

$result = mysql_query($query);
$flag=1;
while($arry = mysql_fetch_array($result)) {
	if($arry['USN']==$USN) 
	{
	 $flag=0;
	 echo "<script>var a;a=alert('USN Exits')</script>";
	 break;
	}
}
if(a)
{
	header('Location: first-sem-coe.php');
}
if(!$_POST['submit']){
echo "Please fill out the form";
header('Location: first-sem-coe.php');
} else if($flag==1) {
	mysql_query("INSERT INTO `firstsem_results` (`ID`,`NAME`,`USN`,`CI1`,`SI1`, `CI2`, `SI2`,`CI3`, `SI3`,`CI4`,`SI4`,`CI5`,`SI5`,`CI6`,`SI6`,`CI7`,`SI7`,`CI8`,`SI8`) 
	VALUES (NULL, '$NAME', '$USN', '$CI1', '$SI1', '$CI2', '$SI2','$CI3', '$SI3','$CI4', '$SI4','$CI5', '$SI5','$CI6', '$SI6','$CI7', '$SI7','$CI8', '$SI8')") or die(mysql_error());
	echo "User has been Registered";
	header('Location: first-sem-coe.php');
}

?>

