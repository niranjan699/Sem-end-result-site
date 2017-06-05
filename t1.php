<!DOCTYPE html>
<html lang="en">
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
	<link rel="stylesheet" href="loading.css">
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
    #empty
    {
        width:100%;
        height:70px;
        background-color: #34495e;
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
                    <li><a href="#testimonial">Notifications</a></li> 
                    <li><a href="http://www.bmsce.ac.in/">BMSCE.in</a></li>
                    <li><a href="contact-us.php">Contact</a></li>
                </ul>
            </div>
        </div>
    </header><!--/header-->
    <section id="main-slider" class="no-margin">
        <div class="carousel slide wet-asphalt">
            <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
                <li data-target="#main-slider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="item active" style="background-image: url(images/slider/high3.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                               <div class="carousel-content center centered" style="    margin-left: 600px;">
                                    <h2 class="boxed animation animated-item-1">SEE RESULTS TERMINAL</h2><br/><br/><br/>
                                    <a class="btn btn-primary animation animated-item-2 " id="but" style=" padding:9px;background-color:rgba(0,0,0,0.5);min-width:220px;border-radius:5px" data-toggle="modal" href="#myModal">Student login</a><br/><br/>
                                    <a class="btn btn-md animation animated-item-3 " id="but" style="padding:9px;background-color:rgba(0,0,0,0.5); min-width:220px;border-radius:5px"  data-toggle="modal" href="#myModal1">COE login</a>
                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
                <div class="item" style="background-image: url(images/slider/high.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="carousel-content center centered" style="    margin-left: 600px;">
                                    <h2 class="boxed animation animated-item-1" >SEE RESULTS TERMINAL</h2><br/><br/><br/>
                                    <a class="btn btn-primary animation animated-item-2 " id="but" style=" padding:9px;background-color:rgba(0,0,0,0.5);min-width:220px;border-radius:5px" data-toggle="modal" href="#myModal">Student login</a><br/><br/>
                                    <a class="btn btn-md animation animated-item-3 " id="but" style="padding:9px;background-color:rgba(0,0,0,0.5); min-width:220px;border-radius:5px"  data-toggle="modal" href="#myModal1">COE login</a>
                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
                <div class="item" style="background-image: url(images/slider/high4.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="carousel-content centered">
                                    <h2 class="boxed animation animated-item-1">SEE RESULTS TERMINAL</h2><br/><br/><br/>
                              <a class="btn btn-primary animation animated-item-2 " id="but" style=" padding:9px;background-color:rgba(0,0,0,0.5);min-width:220px;border-radius:5px" data-toggle="modal" href="#myModal">Student login</a><br/><br/>
                                    <a class="btn btn-md animation animated-item-3 " id="but" style="padding:9px;background-color:rgba(0,0,0,0.5); min-width:220px;border-radius:5px"  data-toggle="modal" href="#myModal1">COE login</a>
                    
                    
                                </div>
                            </div>
                            <div class="col-sm-6 hidden-xs animation animated-item-4">
                                <div class="centered">
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
        <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
            <i class="icon-angle-left"></i>
        </a>
        <a class="next hidden-xs" href="#main-slider" data-slide="next">
            <i class="icon-angle-right"></i>
        </a>
    </section><!--/#main-slider-->
    <div id="empty" ></div>
<section id="testimonial" class="container-fluid" >
        <div class="container" style="color:black;">
            <div class="row">
                <div class="col-lg-12">
                    <div class="center">
                        <h2>NOTIFICATIONS</h2>
                        
                    </div>
                    <div class="gap"></div>
                    <div class="row">
					<div class="col-md-2"></div>
                        <div class="col-md-8">
                            <blockquote>
                BMS college of engineering (atonomous institute affiliated to VTU) has its own rules and regulations in conducting exams,
				every year BMSCE conducts both odd sem and even sem results during the month of december and may respectively. <br/><br/>
				First semester results announced around 10 am  /1/15 .<br/>
				Second semester results announced around 12am  /6/15. <br/><br/>
				<b>RESULTS TO BE ANNOUNCED:</b>
				Third semeter results are expected to be announced during the month of january 2016. <br/><br/>
				NOTE : ALL THE RESULTS ANNOUNCED IN THIS WEBSITE ARE FOR IMMEDIATE PURPOUS ONLY , 
				THIS CAN NEITHER BE TREATED AS ORIGINAL MARKS NOR AS ORIGINAL MARKSHEET.<br/>
				For any discrepencies contact Dr.Vinod C Arallimatti COE , BMSCE.
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
	<!-- modals-->
	
	  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h2 class="modal-title"><center><p><b>Student Login</b></p></center></h2>
        </div>
        <div class="modal-body">
          <form class="form col-md-12 center-block" name="login1" onsubmit="return(usnval ());" action="login.php" method="POST">
            <div class="form-group">
              <input type="text" name="USN" class="form-control input-lg" style="width:100%;" placeholder="USN">
            </div>
            <div class="form-group">
              <input type="password" name="password" class="form-control input-lg" style="width:100%;" placeholder="Password">
            </div>
			<br/>
			<br/>
            <div class="form-group">
              <input type="submit" value="Login" class="btn btn-primary btn-lg btn-block" style="margin-left: 0px;" />
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button"  class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
   <div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h2 class="modal-title" ><center><p><b>COE Login</b></p></center></h2>
        </div>
        <div class="modal-body">
          <form class="form col-md-12 center-block" action="login1.php" method="POST">
            <div class="form-group">
              <input type="text" name="username" class="form-control input-lg" style="width:100%;" placeholder="Username">
            </div>
            <div class="form-group">
              <input type="password" name="password" class="form-control input-lg" style="width:100%;" placeholder="Password">
            </div>
			<br/>
			<br/>
            <div class="form-group">
              <input type="submit" value="Login" class="btn btn-primary btn-lg btn-block" style="margin-left: 0px;" />
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  <!-- modal end -->


    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2013 <a target="_blank" href="http://shapebootstrap.net/" title="Free Twitter Bootstrap WordPress Themes and HTML templates"></a>. All Rights Reserved...:D :D :D.
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a id="gototop" class="gototop" href="#"><i class="icon-chevron-up"></i></a></li><!--#gototop-->
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>