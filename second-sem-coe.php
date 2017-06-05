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
   <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
    <style type = "text/css"> 
html,body{width:100%;
     height:100% }
#empty{
    height:30px;
  }
  #empty1{
    height:70px;
  width:100%;
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
  height:14%;
}

th
{
  
}
label
{
  display: inline;

}
tr{
  text-align: center;
}


body{
       background-color: rgba(0, 0, 0, 0.03);
  }
#fo
{
max-width:230px; display:inline;
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
<nav class="w3-sidenav nav-sidebar   w3-center w3-padding-24 " id="nav" style="width:12%;">
  <ul class="nav tabs center">
    <header class="w3-container w3-padding-24 ">
  <h5>SELECT SEMESTER:</h5>
  </header>
          <li><a href="first-sem-coe.php" >First Semester</a></li>
          <li class="active"><a href="second-sem-coe.php">Second Semester</a></li>
          <li><a href="third-sem-coe.php">Third Semester</a></li>                               
    </ul>   
</nav>
</div>
<div class="w3-copntainer" id="empty">
</div>
<div class="w3-container">
<form method="POST" action="saving2.php" class="form w3-center" id="stud">
 <div class="row center">
 <div class="col-md-3"></div>
 <div class="col-md-7" >
  <h3 style=" text-align:center"><font color="brown">ENTER THE MARKS FOR SECOND SEMESTER SUBJECTS</font></h3>
</div>
</div>
<hr/> 
<div class="row">
<div class="col-md-2">
</div>
<div class="col-md-5">
<label style="color:rgba(85, 85, 85, 0.83);display:inline">STUDENT NAME:
<input class="form-control" required="required" style="max-width:230px ;display:inline " type="text"  name="NAME" value=""/>
</label>
</div>
<div class="col-md-4">
<label style="color:rgba(85, 85, 85, 0.83);display:inline"><right> STUDENT USN:</right></td>
<input class="form-control" required="required" style="max-width:230px;display:inline" type="text"  name="USN" value=""   ></label>
</div>
<div class="row"><br/>
</div>
</div> 
<table class="table table-hover"style="width:78%;margin-left:250px;cellpadding=20">
<tr><th><font color="darkpink">ENGINEERING MECHANICS</font></th><td>
<label>CIE
<input class="form-control" required="required" style="max-width:230px"  id="fo" type="text"  name="CI1"
  value=""   > </label></td>
  <td>
<label>SEE <input id="fo" class="form-control" required="required" style="max-width:230px" type="text"  name="SI1"
     ></label></td></tr>
  </tr>
<tr><th ><font color="darkpink">ELEMENTS OF ENGINEERING DRAWING</font></th>
<td><label>CIE
<input id="fo" class="form-control" required="required" style="max-width:230px"  type="text"  name="CI2"
  value=""   > </label></td>
  <td><label>SEE <input id="fo" class="form-control" required="required" style="max-width:230px"  type="text"  name="SI2"
  value=""   ></label></td></tr>
  </tr>
  <tr><th><font color="darkpink">ENGINEERING MATHMATICS</font></th><td><label>CIE
<input id="fo" class="form-control" required="required" style="max-width:230px"  type="text"  name="CI3"
  value=""   > </label></td><td><label>SEE <input id="fo" class="form-control" required="required" style="max-width:230px"  type="text"  name="SI3"
  value=""   ></label></td></tr>
  </tr><tr><th><font color="darkpink">ENGINEERING CHEMISTRY</font></th><td><label>CIE
<input id="fo" class="form-control" required="required" style="max-width:230px"  type="text"  name="CI4"
  value=""   > </label></td><td><label>SEE <input id="fo" class="form-control" required="required" style="max-width:230px"  type="text"  name="SI4"
  value=""   ></label></td></tr>
  </tr><tr><th><font color="darkpink">CO LAB</font></th><td><label>CIE
<input id="fo" class="form-control" required="required" style="max-width:230px"  type="text"  name="CI5"
  value=""   > </label></td><td><label>SEE <input id="fo" class="form-control" required="required" style="max-width:230px"  type="text"  name="SI5"
  value=""   ></label></td></tr>
  </tr><tr><th><font color="darkpink">  CONSTITUTION OF INDIA</font>
  </th><td><label>CIE
<input id="fo" class="form-control" required="required" style="max-width:230px"  type="text"  name="CI6"
  value=""   > </label></td><td><label>SEE <input id="fo" class="form-control" required="required" style="max-width:230px"  type="text"  name="SI6"
  value=""   ></label></td></tr>
  </tr><tr><th><font color="darkpink">  ENVIRONMENTAL STUDIES</th><td><label>CIE
<input id="fo" class="form-control" required="required" style="max-width:230px"  type="text"  name="CI7"
  value=""   > </label></td><td><label>SEE <input id="fo" class="form-control" required="required" style="max-width:230px"  type="text"  name="SI7"
  value=""   ></label></td></tr>
  </tr><tr><th><font color="darkpink">  FUCTIONAL ENGLISH</th><td><label>CIE
<input id="fo" class="form-control" required="required" style="max-width:230px"  type="text"  name="CI8"
  value=""   > </label></td><td><label>SEE <input  id="fo" class="form-control" required="required" style="max-width:230px"  type="text"  name="SI8"
  value=""   ></label></td></tr></table>
  <div class="row"><br/></div>

<div class="container">
<div class="row">
<div class="col-md-9 ">
<div class="col-md-2" >
</div>
<div class="col-md-3" >
<button type="button" class="form-control btn btn-info " data-toggle="modal" data-target="#myModal">Upload</button>
</div>
</div>
<div class="col-md-3" >
<div class="col-md-6" >
<input TYPE="SUBMIT"   name="submit" class="form-control btn btn-success" value="submit"/>
</div>
<div class="col-md-6">
<input TYPE="RESET"  name="reset" value="reset" class=" form-control btn btn-danger"/>
</div>
</div>
</div>
</div>
</div>
</form>
</div>
</div>

<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title center"><b>Upload .csv FILE</b></h4>
      </div>
    <div class="container">
    <div class="row"><hr/></div>
    </div>
    
      <div class="modal-body center">
         <form method="post" action="upload2.php" enctype="multipart/form-data"/>
  <div class="row">
  <div class="col-md-1"></div>
    <div class="col-md-10"><input type="file" style="display:inline;" class="form-control" required="required" name="file"></div>
  </div>
  <br/>
<div class="row">
 <input type="submit" style="display:inline; min_width:200px" class="btn btn-info" name="submit" value="Upload"/>
 <div>

    </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
  </body>            