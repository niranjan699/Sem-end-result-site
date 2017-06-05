<html lang="en">
<?php
include "connection.php";
include 'crypt.php';
$do = new Encryption;
$str = $_COOKIE['verifier'];
$unam = $_COOKIE['user'];
$decoded = $do->decode($str);
$db = mysql_query("select * from login_proctor where uname='$unam' and passwd='$decoded'");
if(mysql_num_rows($db)!=1) {header("location:../index.php");}
?>
<head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
      <meta name="description" content="main page of bmsce online proctor book">
      <meta name="author" content="kiran">
      <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
      <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
      <link href="css/bootstrap-theme.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <div class="navbar-brand" href="#">BMSCE Student Performance Monitoring System</div>
    </div>
    <div >
      <ul class="nav navbar-nav navbar-right">
        <li><a><?php echo $_COOKIE['user']?></a></li>
      </ul>
    </div>
  </div>
</div>

<br/>
<br/>
<div class="col-md-4">

</div>
<div class="col-md-4">
<?php
$st = $_GET['status'];
if($st==2)
{
}
else if($st==0)
{
echo "<div class='alert alert-danger'>";
echo "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
echo "<strong>Invalid</strong> USN already exist";
echo "</div>";
}
else
{
echo "<div class='alert alert-success'>";
echo "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
echo "<strong>Sucesses</strong> New Student Created.";
echo "</div>";
}
?>
<form action="new_sav.php" onSubmit="return(chk()); method="post">
<input type="text"  id="usn" class="form-control" name="usn" placeholder="USN" onChange="usn_chk();" required/><br/>
<input type="text"  id="sname" class="form-control" name="sname" placeholder="Student Name" onChange="sname_chk();" required/><br/>
<input type="text"  id="fname" class="form-control" name="fname" placeholder="Fathers Name" onChange="fname_chk();" required/><br/>
<input type="text"  id="mname" class="form-control" name="mname" placeholder="Mothers Name" onChange="mname_chk();" required/><br/>
<input type="text"  id="dob" class="form-control" name="dob" placeholder="Date Of Birth YYYY-MM-DD" onChange="dob_chk();" required/><br/>
<input type="text"  id="email" class="form-control" name="email" placeholder="E-Mail" onChange="email_chk();" required/><br/>
<input type="text"  id="address" class="form-control" name="address" placeholder="Address" onChange="" required/><br/>
<input type="text"  id="smobile" class="form-control" name="smobile" placeholder="Student Mobile Number" onChange="smobile_chk();" maxlength="10" required/><br/>
<input type="text"  id="fmobile" class="form-control" name="fmobile" placeholder="Fathers Mobile Number" onChange="fmobile_chk();" required/><br/>
<input type="text"  id="mmobile" class="form-control" name="mmobile" placeholder="Mothers Mobile Number" onChange="mmobile_chk();" required/><br/>
<input type="text" id="stauts" class="form-control" name="stauts" value="Pending" readonly/><br/>
<center>
<input type="submit" id="submit" class="btn btn-default" name="submit" value="submit"/> 
<input type="reset" id="reset" class="btn btn-default" name="reset" value="clear"/> 
<a class="btn btn-default" href="main.php">back</a>
</center>
</form>
</div>

</body>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/popup.js" type="text/javascript"></script>
<script src="js/valid.js" type="text/javascript"></script>
</html>
