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
<head>
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
    #but:hover{
        box-shadow:0px 0px 20px black;
    }
    #empty{
    height:60px;
  }
#table
{
  width:60%;
  margin-left:250px;
  box-shadow: 0px 0px 30px gray;
}
#one
{
  z-index:10;
  height:12%;
}
#nav
{
  box-shadow: 0px 0px 30px black;
}
th
{
  
}
tr{
  text-align: center;
}
a
{
  text-decoration: none;
}
 ul a:hover{
  color:red;
 }

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
                     <li class="active"><a href="coeh.php">COE Profile</a></li>
                    <li><a href="http://www.bmsce.ac.in/">BMSCE.in</a></li>
                          <li><a href="contact-us.html">Contact</a></li>
                    <li style="float:right"><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                </ul>
            </div>
        </div>
    </header><!--/header-->

  <div id="empty"></div>
<div class
<div class="w3 row"><div class="w3 col l5">
<div class="w3-card-4" style="width:40%;height:450px;float:left;margin-top:40px;margin-left:125px">
 
<header class="w3-container wet-asphalt" style="height:50px;text-align:center">
  <h6>ENTER OF MARKS</h6>
</header>

<div class="w3-container">
<p  >
<ul class="w3-ul w-3 large"style="font-family:verdana;color:blue;text-align:center" >
<li><a href="first-sem-coe.php">FIRST SEMESTER</li>
<li><a href="second-coe.php">SECOND SEMESTER</a></li>
<li><a href="third-sem-coe.php">THIRD SEMESTER</a></li> </ul>
 </p>
</div></div>
<div class="w3-card-4" style="width:40%;height:450px;float:left;margin-top:40px;margin-left:50px">
 
<header class="w3-container wet-asphalt"style="height:50px;text-align:center">
  <h6>VIEW RESULTS</h6>
</header>

<div class="w3-container">
<p  ><ul class="w3-ul w-3 large"style="font-family:verdana;color:blue;text-align:center" >
<li><a href="sample1.php">FIRST SEMESTER</li>
<li><a href="sample2.php">SECOND SEMESTER</a></li>
<li><a href="sample3.php">THIRD SEMESTER</a></li>
</ul></p>
</div></div>


<div class="w3-container">
<p  ></p>
</div></div></div></div>



</body></html>