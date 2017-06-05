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




	

if(!$_POST['submit']){
echo "Please fill out the form";
header('Location: first-sem-coe.php');
} 
else {
	$kl="UPDATE firstsem_results
	              SET   `NAME`='$NAME' ,
	                    `CI1`='$CI1',
	                    `SI1`='$SI1',
                         `CI2`='$CI2',
                         `SI2`='$SI2',
                         `CI3`='$CI3',
                         `SI3`='$SI3',
                         `CI4`='$CI4',
                         `SI4`='$SI4',
                         `CI5`='$CI5',
                         `SI5`='$SI5',
                         `CI6`='$CI6',
                         `SI6`='$SI6',
                         `CI7`='$CI7',
                         `SI7`='$SI7',
                         `CI8`='$CI8',
                         `SI8`='$SI8'
	                   WHERE `USN`='$USN'";

if (mysql_query( $kl)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysql_error();
}}
	header('Location: first-sem-coe.php');


?>
