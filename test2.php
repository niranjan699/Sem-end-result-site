<!DOCTYPE html>
<?php  
session_start();  
  
if(!$_SESSION['USN'])  
{  
  
    header("Location: t1.php");//redirect to login page to secure the welcome page without login access.  
}  
  
?>
<html>
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
    <style>
    blockquote
    {
            border-left: 5px solid #B9B5B5;
    }
    #testimonial
    {
        padding:30px;
    }
	body{
		background-color: rgba(0, 0, 0, 0.03)
	}
    </style>
</head><!--/head-->
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
                <ul class="nav navbar-nav navbar-right ">
                    <li><a href="t1.php">Home</a></li>
                    <li><a href="D1.php">Disclousre</a></li>
                    <li class="active"><a href="#link4">Student Profile</a></li>
                    <li><a href="http://www.bmsce.ac.in/">BMSCE.in</a></li>
                    <li><a href="contact-us.html">Contact</a></li>
                    <li style="float:right"><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                </ul>
            </div>
        </div>
    </header><!--header-->

<nav class="w3-sidenav nav-sidebar  w3-card-2 w3-center w3-padding-24 " id="nav" style="width:12%;background-color:#f5f5f5;">
  <ul class="nav tabs center">
    <header class="w3-container w3-padding-24 ">
  <h5>SELECT SEMESTER:</h5>
  </header>
          <li><a href="#link1">First Semester</a></li>
          <li><a href="#link2">Second Semester</a></li>
          <li><a href="#link3">Third Semester</a></li>                               
    </ul>   
</nav>
</div>

<!-- table start 1
<div class="w3-tab" style="margin-left:25%">
<div id="#link1" class="w3-container w3-center" style="width:88%;float:right">
<div class="w3-responsive">
<table class="w3-table w3-bordered w3-striped w3-small w3-center" id="table">
-->

<div class="w3-tab" style="margin-left:25%" style="margin-top:50px">

<div id="link1" class="w3-container" style="margin-top:50px">
<div class="row"><br/><br/></div>
	<?php
include 'connection.php';


$usn=$_SESSION['USN'];
$query = "SELECT * FROM `firstsem_results` WHERE USN='$usn'";

$result = mysql_query($query);

$arry = mysql_fetch_array($result);

$sum1=0;
function sgpa1($arry)
{
	$total=0;
	for($i=1;$i<=8;$i++)
	{
		$t=grade(($arry['CI'.((string)$i)]+$arry['SI'.((string)$i)]/2));
		if($t=='S')
			$sum1=10;
		else if($t=='A')
			$sum1=9;
		else if($t=='B')
			$sum1=8;
		else if($t=='C')
			$sum1=7;
		else if($t=='D')
			$sum1=6;
		else
			$sum1=0;
	
	switch($i)
	{   
	case 1:
		$cre=5;
              break;

    case 2:
		$cre=4;
             break;

    case 3:
		$cre=4;
			break; 

    case 4:
		$cre=4;
            break;

    case 5:
		$cre=1;
           break;

    case 6:
		$cre=1;
			break;

	case 7:
		$cre=2;
			break;

    case 8:
		$cre=4;
			break;
 }
$total+=$sum1*$cre;
	}   
	return(round($total/25,2));
}

 	 echo '<table class="w3-table w3-bordered w3-striped w3-card-8" style="width:88%;">
 <th colspan="1" class="w3-dark-grey" align="left"><font  size="4" align="left">'." NAME: ".$arry['NAME'].'</font></th>
<th colspan="4" class="w3-dark-grey" ><font  size="4" >'."USN:".$arry['USN'].'</font></th>



 <tr>
<th>SUBJECT</th>
<th>CIE</th>
<th>SEE</th>
<th>TOTAL</th>
<th>GRADE</th>

</tr>
<tr>
<td >ENGINEERING PHYSICS</td>
<td align="center">'.$arry['CI1'].'</td>
<td align="center">'.$arry['SI1'].'</td>
<td align="center">'.($arry['CI1']+$arry['SI1']/2).'</td>
<td align="center">'.grade(($arry['CI1']+$arry['SI1']/2)).'</td>
</tr>


<tr>
<td >ELEMENTS OF ELECTRONICS ENGINEERING</td>
<td align="center">'.$arry['CI2'].'</td>
<td align="center">'.$arry['SI2'].'</td>
<td align="center">'.($arry['CI2']+$arry['SI2']/2).'</td>
<td align="center">'.grade(($arry['CI2']+$arry['SI2']/2)).'</td>
</tr>

<tr>
<td >ELEMENTS OF MECHANICAL ENGINEERING</td>
<td align="center">'.$arry['CI3'].'</td>
<td align="center">'.$arry['SI3'].'</td>
<td align="center">'.($arry['CI3']+$arry['SI3']/2).'</td>
<td align="center">'.grade(($arry['CI3']+$arry['SI3']/2)).'</td>
</tr>

<tr>
<td >CONCEPTS OF C PROGRAMMING</td>
<td align="center">'.$arry['CI4'].'</td>
<td align="center">'.$arry['SI4'].'</td>
<td align="center">'.($arry['CI4']+$arry['SI4']/2).'</td>
<td align="center">'.grade(($arry['CI4']+$arry['SI4']/2)).'</td>
</tr>

<tr>
<td >CO LAB</td>
<td align="center">'.$arry['CI5'].'</td>
<td align="center">'.$arry['SI5'].'</td>
<td align="center">'.($arry['CI5']+$arry['SI5']/2).'</td>
<td align="center">'.grade(($arry['CI5']+$arry['SI5']/2)).'</td>
</tr>

<tr>
<td >BIOLOGY FOR ENGINEERS</td>
<td align="center">'.$arry['CI6'].'</td>
<td align="center">'.$arry['SI6'].'</td>
<td align="center">'.($arry['CI6']+$arry['SI6']/2).'</td>
<td align="center">'.grade(($arry['CI6']+$arry['SI6']/2)).'</td>
</tr>

<tr>
<td >PERSONALITY DEVELOPMENT AND COMMUNICATION</td>
<td align="center">'.$arry['CI7'].'</td>
<td align="center">'.$arry['SI7'].'</td>
<td align="center">'.($arry['CI7']+$arry['SI7']/2).'</td>
<td align="center">'.grade(($arry['CI7']+$arry['SI7']/2)).'</td>
</tr>

<tr>
<td >ENGINEERING MATHEMATICS</td>
<td align="center">'.$arry['CI8'].'</td>
<td align="center">'.$arry['SI8'].'</td>
<td align="center">'.($arry['CI8']+$arry['SI8']/2).'</td>
<td align="center">'.grade(($arry['CI8']+$arry['SI8']/2)).'</td>
</tr>

<tr>
<td colspan="5">  <center><font   size="4" color="BROWN"> SGPA : ' . sgpa1($arry) . ' </font>
</td>
</tr>';
?> 
<td colspan="5">  <center><font   size="4" color="BROWN"> RESULT:FIRST CLASS WITH DISTINCTION   </font>
</td>
</tr>    

<td colspan="5">  <center><font   size="4" color="BROWN"> TOTAL CREDITS EARNED:25/25  </font>
</td>
</tr>    
<td colspan="5"  rowspan="3">  <center><font  size="5" color="RED"> CONGRATULATIONS!!!! </font>
</td>
</tr>
</table>
</div>
<div id="link2" class="w3-container" style="margin-top:50px">
	<?php
include 'connection.php';


$usn=$_SESSION['USN'];
$query = "SELECT * FROM `secondsem_results` WHERE USN='$usn'";

$result = mysql_query($query);


$arry = mysql_fetch_array($result);
$sum2=0;
function sgpa2($arry)
{
	$total=0;
	for($i=1;$i<=8;$i++)
	{
		$t=grade(($arry['CI'.((string)$i)]+$arry['SI'.((string)$i)]/2));
		if($t=='S')
			$sum2=10;
		else if($t=='A')
			$sum2=9;
		else if($t=='B')
			$sum2=8;
		else if($t=='C')
			$sum2=7;
		else if($t=='D')
			$sum2=6;
		else
			$sum2=0;
	
	switch($i)
	{   
	case 1:
		$cre=5;
              break;

    case 2:
		$cre=4;
             break;

    case 3:
		$cre=4;
			break; 

    case 4:
		$cre=4;
            break;

    case 5:
		$cre=1;
           break;

    case 6:
		$cre=1;
			break;

	case 7:
		$cre=2;
			break;

    case 8:
		$cre=4;
			break;
 }
$total+=$sum2*$cre;
	}   
	return(round($total/25,2));
}

 	 echo '<table class="w3-table w3-bordered w3-striped w3-card-8" style="width:88%;">
 <th colspan="1" class="w3-dark-grey" align="left"><font  size="4" align="left">'." NAME: ".$arry['NAME'].'</font></th>
<th colspan="4" class="w3-dark-grey" ><font  size="4" >'."USN:".$arry['USN'].'</font></th>



 <tr>
<th>SUBJECT</th>
<th>CIE</th>
<th>SEE</th>
<th>TOTAL</th>
<th>GRADE</th>

</tr>
<tr>
<td >ENGINEERING PHYSICS</td>
<td align="center">'.$arry['CI1'].'</td>
<td align="center">'.$arry['SI1'].'</td>
<td align="center">'.($arry['CI1']+$arry['SI1']/2).'</td>
<td align="center">'.grade(($arry['CI1']+$arry['SI1']/2)).'</td>
</tr>


<tr>
<td >ELEMENTS OF ELECTRONICS ENGINEERING</td>
<td align="center">'.$arry['CI2'].'</td>
<td align="center">'.$arry['SI2'].'</td>
<td align="center">'.($arry['CI2']+$arry['SI2']/2).'</td>
<td align="center">'.grade(($arry['CI2']+$arry['SI2']/2)).'</td>
</tr>

<tr>
<td >ELEMENTS OF MECHANICAL ENGINEERING</td>
<td align="center">'.$arry['CI3'].'</td>
<td align="center">'.$arry['SI3'].'</td>
<td align="center">'.($arry['CI3']+$arry['SI3']/2).'</td>
<td align="center">'.grade(($arry['CI3']+$arry['SI3']/2)).'</td>
</tr>

<tr>
<td >CONCEPTS OF C PROGRAMMING</td>
<td align="center">'.$arry['CI4'].'</td>
<td align="center">'.$arry['SI4'].'</td>
<td align="center">'.($arry['CI4']+$arry['SI4']/2).'</td>
<td align="center">'.grade(($arry['CI4']+$arry['SI4']/2)).'</td>
</tr>

<tr>
<td >CO LAB</td>
<td align="center">'.$arry['CI5'].'</td>
<td align="center">'.$arry['SI5'].'</td>
<td align="center">'.($arry['CI5']+$arry['SI5']/2).'</td>
<td align="center">'.grade(($arry['CI5']+$arry['SI5']/2)).'</td>
</tr>

<tr>
<td >BIOLOGY FOR ENGINEERS</td>
<td align="center">'.$arry['CI6'].'</td>
<td align="center">'.$arry['SI6'].'</td>
<td align="center">'.($arry['CI6']+$arry['SI6']/2).'</td>
<td align="center">'.grade(($arry['CI6']+$arry['SI6']/2)).'</td>
</tr>

<tr>
<td >PERSONALITY DEVELOPMENT AND COMMUNICATION</td>
<td align="center">'.$arry['CI7'].'</td>
<td align="center">'.$arry['SI7'].'</td>
<td align="center">'.($arry['CI7']+$arry['SI7']/2).'</td>
<td align="center">'.grade(($arry['CI7']+$arry['SI7']/2)).'</td>
</tr>

<tr>
<td >ENGINEERING MATHEMATICS</td>
<td align="center">'.$arry['CI8'].'</td>
<td align="center">'.$arry['SI8'].'</td>
<td align="center">'.($arry['CI8']+$arry['SI8']/2).'</td>
<td align="center">'.grade(($arry['CI8']+$arry['SI8']/2)).'</td>
</tr>


<tr>
<td colspan="5">  <center><font   size="4" color="BROWN"> SGPA : ' . sgpa2($arry) . ' </font>
</td>
</tr>';
?>  
 <tr>
<td colspan="5">  <center><font   size="4" color="BROWN"> RESULT:FIRST CLASS WITH DISTINCTION   </font>
</td>
</tr>    

<td colspan="5">  <center><font   size="4" color="BROWN"> TOTAL CREDITS EARNED:25/25  </font>
</td>
</tr>    

<td colspan="5"  rowspan="3">  <center><font  size="5" color="RED"> CONGRATULATIONS!!!! </font>
</td>
</tr>
</table>
</div>
<div id="link3" class="w3-container" style="margin-top:50px">
	<?php
include 'connection.php';


$usn=$_SESSION['USN'];
$query = "SELECT * FROM `thirdsem_results` WHERE USN='$usn'";

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
$arry = mysql_fetch_array($result);
$i=0;
$sum3=0;

function sgpa3($arry)
{
	$total=0;
	for($i=1;$i<=5;$i++)
	{
		$t=grade(($arry['CI'.((string)$i)]+$arry['SI'.((string)$i)]/2));
		if($t=='S')
			$sum3=10;
		else if($t=='A')
			$sum3=9;
		else if($t=='B')
			$sum3=8;
		else if($t=='C')
			$sum3=7;
		else if($t=='D')
			$sum3=6;
		else
			$sum3=0;
	
		switch($i)
	{   case 1:
		$cre=  4;
              break;

		case 2:
		$cre=  5;
             break;

		case 3:
		$cre=  6;
			break; 

		case 4:
		$cre=  6;
            break;

		case 5:
		$cre=  4;
           break;


 }
$total+=$sum3*$cre;
	}   
	return($total/25);
}

 	 echo '<table class="w3-table w3-bordered w3-striped w3-card-8" style="width:88%;">
 <th colspan="1" class="w3-dark-grey" align="left"><font  size="4" align="left">'." NAME: ".$arry['NAME'].'</font></th>
<th colspan="4" class="w3-dark-grey" ><font  size="4" >'."USN:".$arry['USN'].'</font></th>



 <tr>
<th>SUBJECT</th>
<th>CIE</th>
<th>SEE</th>
<th>TOTAL</th>
<th>GRADE</th>

</tr>
<tr>
<td >DISCRETE MATHEMATICS</td>
<td align="center">'.$arry['CI1'].'</td>
<td align="center">'.$arry['SI1'].'</td>
<td align="center">'.($arry['CI1']+$arry['SI1']/2).'</td>
<td align="center">'.grade(($arry['CI1']+$arry['SI1']/2)).'</td>
</tr>


<tr>
<td >DATA STRUCTURES</td>
<td align="center">'.$arry['CI2'].'</td>
<td align="center">'.$arry['SI2'].'</td>
<td align="center">'.($arry['CI2']+$arry['SI2']/2).'</td>
<td align="center">'.grade(($arry['CI2']+$arry['SI2']/2)).'</td>
</tr>

<tr>
<td >WEB PROGRAMMING</td>
<td align="center">'.$arry['CI3'].'</td>
<td align="center">'.$arry['SI3'].'</td>
<td align="center">'.($arry['CI3']+$arry['SI3']/2).'</td>
<td align="center">'.grade(($arry['CI3']+$arry['SI3']/2)).'</td>
</tr>

<tr>
<td >PROGRAMMING WITH C++</td>
<td align="center">'.$arry['CI4'].'</td>
<td align="center">'.$arry['SI4'].'</td>
<td align="center">'.($arry['CI4']+$arry['SI4']/2).'</td>
<td align="center">'.grade(($arry['CI4']+$arry['SI4']/2)).'</td>
</tr>

<tr>
<td >COMPUTER ORGANIZATION AND ARCHITECTURE</td>
<td align="center">'.$arry['CI5'].'</td>
<td align="center">'.$arry['SI5'].'</td>
<td align="center">'.($arry['CI5']+$arry['SI5']/2).'</td>
<td align="center">'.grade(($arry['CI5']+$arry['SI5']/2)).'</td>
</tr>



<tr>
<td colspan="5">  <center><font    size="4" color="BROWN"> CGPA :  '. sgpa3($arry).'</font>
</td>
</tr>';
?>  
 <tr>
<td colspan="5">  <center><font   size="4" color="BROWN"> RESULT:FIRST CLASS WITH DISTINCTION   </font>
</td>
</tr>    

<td colspan="5">  <center><font   size="4" color="BROWN"> TOTAL CREDITS EARNED:25/25  </font>
</td>
</tr>    

<td colspan="5"  rowspan="3">  <center><font  size="5" color="RED"> CONGRATULATIONS!!!! </font>
</td>
</tr>
</table>
</div>
<div id="link4" class="w3-container">

<table class="w3-table" style="    margin-left: -20px; margin-top:50px">

<?php
include 'connection.php';


$usn=$_SESSION['USN'];
$query = "SELECT * FROM `user_image` WHERE USN='$usn'";

$result = mysql_query($query);


$arry = mysql_fetch_array($result);

echo "<tr>";

echo '<td rowspan="8">';?><img class="img img-circle" style="margin-left:-30px;" height="250" width="250" src="<?php echo $arry['image'] ?>"/> <?php echo '</td></tr>';
?>
<?php
include 'connection.php';


$usn=$_SESSION['USN'];
$query = "SELECT * FROM `stud_info` WHERE USN='$usn'";

$result = mysql_query($query);


$arry = mysql_fetch_array($result);

echo '<td style="text-align:right">NAME:</td><td style="text-align:left">'.$arry['NAME'].'</td>
</tr>
<tr>
<td style="text-align:right">USN:</td><td style="text-align:left">'.$arry['USN'].'</td>
</tr>
<tr>
<td style="text-align:right">Semester:</td><td  style="text-align:left">'.$arry['Semester'].'</td>
</tr>
<tr>
<td style="text-align:right">Branch:</td><td  style="text-align:left">'.$arry['Branch'].'</td>
</tr>
<tr>
<td style="text-align:right">e-mail:</td><td  style="text-align:left">'.$arry['Email'].'</PRE></td>
</tr>

<td style="text-align:right">Mobile:</td><td  style="text-align:left">'.$arry['Mobile'].'</td>
</tr>';
?>
</table>

</div>
</div>

</div>

</body>