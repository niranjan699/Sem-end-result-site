<!DOCTYPE html>
<?php  
session_start();  
  
if(!$_SESSION['USN'])  
{  
  
    header("Location: t1.php");//redirect to login page to secure the welcome page without login access.  
}  
  
?>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="w3.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SEE RESULTS | BMSCE</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/bms.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
     <script src="js/popup.js"></script>
    <style type = "text/css"> 
html,body {
  width: 100%;
  height: 100%;
}

#empty {
  height: 50px;
}

#table {
  width: 60%;
  margin-left: 250px;
  box-shadow: 0px 0px 30px gray;
}

#one {
  z-index: 10;
  height: 14%;
}

#nav {
  box-shadow: 0px 0px 30px black;
}

#but {
  margin-top: 60px;
  position: absolute;
  top: 86%;
  left: 80%;
  min-width: 150px;
}

#but1 {
  margin-top: 60px;
  position: absolute;
  top: 86%;
  left: 67%;
  min-width: 150px;
}

.th:hover{
	background-color:#34495e;
}
#no:hover {
  background-color: #34495E;
  color: white;
  text-shadow: 0px 0px 0px white;
}
th {
}

label {
  display: inline;
}

tr {
  text-align: center;
}
body {
  background-color: rgba(0, 0, 0, 0.03);
}

#fo {
  max-width: 230px;
  display: inline;
}

table {
  border-collapse: collapse;
  box-shadow: 10px 10px 5px;
  margin-left: 200px;
  margin-top: 70px;
}

th,tr,td {
  align: center;
  padding: 10px;
  text-align: center;
  border-collapse: collapse;
}

.odd {
  background-color: rgb(239,239,239);
}

tbody  tr:hover {
  background-color: #999;
  color: white;
  text-shadow: 0px 5px 30px gray;
}
.line{border-right: solid 1px rgba(0, 0, 0, 0.07);}
.even {
  background-color: rgb(250,252,254);
}

.thead {
  background-color: #00bcd4;
  color: #fff;
}

.cd {
  float: left;
  width: 100%;
  border-radius: 10px;
}

#no:hover {
  background-color: #34495E;
  color: white;
  text-shadow: 0px 0px 0px white;
}

.nav-sidebar {
  width: 100%;
  padding: 30px 0;
  border-right: 1px solid #ddd;
}

.nav-sidebar a {
  color: #333;
  -webkit-transition: all 0.08s linear;
  -moz-transition: all 0.08s linear;
  -o-transition: all 0.08s linear;
  transition: all 0.08s linear;
}

.nav-sidebar .active a {
  cursor: default;
  background-color: #0b56a8;
  color: #fff;
}

.nav-sidebar .text-overflow a,
.nav-sidebar .text-overflow .media-body {
  white-space: nowrap;
  overflow: hidden;
  -o-text-overflow: ellipsis;
  text-overflow: ellipsis;
}

.nav-sidebar .active a:hover {
  background-color: #0b56a8;
}
 
 
</style>
    </style>
</head><!--/head-->
<body>
    <header class="navbar navbar-inverse navbar-fixed-top wet-asphalt" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="index.html"><img src="images/bms.png" style="height:10%;width:18%;margin-left:-130px;float:left"alt="logo"><h1>BMS COLLEGE OF ENGINEERING</h1></a>
            </div>
             <div class="collapse navbar-collapse">
                 <ul class="nav navbar-nav navbar-right">
                    <li><a href="t1.php">Home</a></li>
                    <li><a href="D1.php">Disclousre</a></li>
                     <li><a href="coeh.php">COE Profile</a></li>
                    <li><a href="http://www.bmsce.ac.in/">BMSCE.in</a></li>
                          <li><a href="contact-us.html">Contact</a></li>
                    <li style="float:right"><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                </ul>
            </div>
        </div>
    </header><!--/header-->
<nav class="w3-sidenav nav-sidebar   w3-center w3-padding-24 "  style="width:12%;background-color:#f5f5f5;">
  <ul class="nav tabs center">
    <header class="w3-container w3-padding-24 ">
  <h5>SELECT SEMESTER:</h5>
  </header>
          <li ><a href="sample1.php" >First Semester</a></li>
          <li ><a href="sample2.php">Second Semester</a></li>
          <li class="active"><a href="sample3.php">Third Semester</a></li>                                
    </ul>   
</nav>
<div class="cd"><table>
<tbody><tr class="wet-asphalt" style="text-decoration:wraped" id="no">
<th >STUDENTNAME</th><th >USN</th><th colspan="4">DISCRETE MATHEMATICS</th><th colspan="4">DATA STRUCTURES</th><th colspan="4">WEB PROGRAMMING</th><th colspan="4">PROGRAMMING WITH C++</th><th colspan="4">COMPUTER ORGANIZATION AND ARCHITECTURE</th>
</tr>

<tr style="    background-color: #555;
    color: #eee;">
<td></td><td>Click on USN to update</td><td>CIE</td><td>SIE</td><td>TOTAL</td><td>GRADE</td><td>CIE</td><td>SIE</td><td>TOTAL</td><td>GRADE</td><td>CIE</td><td>SIE</td><td>TOTAL</td><td>GRADE</td><td>CIE</td><td>SIE</td><td>TOTAL</td><td>GRADE</td><td>CIE</td><td>SIE</td><td>TOTAL</td><td>GRADE</td>

<?php
include 'connection.php';

$query = "SELECT * FROM `thirdsem_results`";

$result = mysql_query($query);

function grade($a)
{
	if ($a>=90)
		return 'S';
	else if ( $a>=75&& $a<90)
		return 'A';
	else if ($a>=60 && $a<75)
		return 'B';
	else if ($a>=50 && $a<60)
		return 'C';
	else if ($a>=40 && $a<50)
		return 'D';
	else
		return 'E';
}
 $c=0;
while($arry = mysql_fetch_array($result)) {
	if(($c%2)==0)
  echo "<tr class=odd>"."<td>". $arry['NAME'] ."</td><td><u><a href='JavaScript:newPopup(`up3.php?USN=".$arry['USN']."`);'>".$arry['USN']."</a></u></td><td>". $arry['CI1'] ."</td><td>". $arry['SI1'] ."</td><td>".($arry['SI1']/2+$arry['CI1'])."</td><td class='line'>".grade(($arry['SI1']/2+$arry['CI1'])). "</td>" ."<td>". $arry['CI2'] ."</td><td>". $arry['SI2'] ."</td><td>".($arry['SI2']/2+$arry['CI2'])."</td><td class='line'>".grade(($arry['SI2']/2+$arry['CI2'])). "</td>"  ."<td>". $arry['CI3'] ."</td><td>". $arry['SI3'] ."</td><td>".($arry['SI3']/2+$arry['CI3'])."</td><td class='line'>".grade(($arry['SI3']/2+$arry['CI3'])). "</td>"  ."<td>". $arry['CI4'] ."</td><td>". $arry['SI4'] ."</td><td>".($arry['SI4']/2+$arry['CI4'])."</td><td class='line'>".grade(($arry['SI4']/2+$arry['CI4'])). "</td>" ."<td>". $arry['CI5'] ."</td><td>". $arry['SI5'] ."</td><td>".($arry['SI5']/2+$arry['CI5'])."</td><td class='line'>".grade(($arry['SI5']/2+$arry['CI5'])).  "</td>"."</tr>"; 
  else
  echo "<tr class=even>"."<td>". $arry['NAME'] ."</td><td><u><a href='JavaScript:newPopup(`up3.php?USN=".$arry['USN']."`);'>".$arry['USN']."</a></u></td><td>". $arry['CI1'] ."</td><td>". $arry['SI1'] ."</td><td>".($arry['SI1']/2+$arry['CI1'])."</td><td class='line'>".grade(($arry['SI1']/2+$arry['CI1'])). "</td>" ."<td>". $arry['CI2'] ."</td><td>". $arry['SI2'] ."</td><td>".($arry['SI2']/2+$arry['CI2'])."</td><td class='line'>".grade(($arry['SI2']/2+$arry['CI2'])). "</td>"  ."<td>". $arry['CI3'] ."</td><td>". $arry['SI3'] ."</td><td>".($arry['SI3']/2+$arry['CI3'])."</td><td class='line'>".grade(($arry['SI3']/2+$arry['CI3'])). "</td>"  ."<td>". $arry['CI4'] ."</td><td>". $arry['SI4'] ."</td><td>".($arry['SI4']/2+$arry['CI4'])."</td><td class='line'>".grade(($arry['SI4']/2+$arry['CI4'])). "</td>" ."<td>". $arry['CI5'] ."</td><td>". $arry['SI5'] ."</td><td>".($arry['SI5']/2+$arry['CI5'])."</td><td class='line'>".grade(($arry['SI5']/2+$arry['CI5'])). "</td>"."</tr>"; 
  
$c++; 
}
?>
</tbody> </table>



</div></body></html>