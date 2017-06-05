<!DOCTYPE html>
<html lang="en">
<head>
<title>Student Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
    <style>
    #but:hover{
        box-shadow:0px 0px 20px black;
    }
    <style type="text/css">
	#login{
		width:400px;
		height:400px;
	}
	#empty{
		height:100px;
	}

	body
	{
		height: 100%;
		width: 100%;
	}
	hr{
		color: black;
		box-shadow: 0px 0px 50px black;
	}
	body{
		background-color: #f5f5f5;
	}
	#one
{
  z-index:10;
  height:14%;
}
</style>
<script>
function usnval () {
var val=login1.USN.value.search(/1BM14CS[0-9]{3}/i)

	if(val==-1||login1.USN.value.toUpperCase()=="1BM14CS000")
	{
		alert("Please Enter a Valid USN Number ");
		document.login1.USN.focus();
		return false;
	}
	else
	{
		return true;
	}
}	
</script>
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
                    <li class="active"><a href="t1.php">Home</a></li>
                    <li><a href="D1.php">Disclousre</a></li>
                    <li><a href="aboutCOE.php">About COE</a></li>
                    <li><a href="t1.php#testimonial">Notifications</a></li> 
                    <li><a href="http://www.bmsce.ac.in/">BMSCE.in</a></li>
                    <li><a href="contact-us.php">Contact</a></li>
                </ul>
            </div>
        </div>
    </header><!--/header-->
  <div id="empty" class="w3-container">
  </div>
  <div class="w3-container">
  <center>
  	<div id="login" class="w3-card-4 w3-padding-8" style="width:500px;font-size:30px">
  	<p><b>Student Login</b></p>
  	<hr style="color: black;
		box-shadow: 0px 0px 50px black;" />
  	<div class="login" id="login" style="height:300px;width:500px">
  	<form action="login.php" name="login1" onsubmit="return(usnval());" method="POST" >
		<input type="text" class="user active" name="USN" value="USN" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'USN';}"/>
		<input type="password" class="lock active" value="Password" name="password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}"/>
	
	<div class="login-bwn">
	<a href="test2.php#link4">
	   <input type="submit" value="Login" />
	   </a>
	</div></form>
  	</div>
  </center>
  </div>

<div style="color:red;margin-top:50px;font-size:40px" class="mw4 w3-center w3-padding-24 ">
<h3 style="color:red"> The result hosted on this website  are for immediate purpose only. This cant be treated as original mark sheet.
</h3></div>
</body>