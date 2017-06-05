<html lang="en">
<?php
include "connection.php";

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
  
  <?php
    include "connection.php";
  ?>



</head>
<body>
<div class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <div class="navbar-brand" href="#">BMSCE Student Performance Monitoring System</div>
    </div>
    <div >
      <ul class="nav navbar-nav navbar-right">
        <li><a><?php echo $_COOKIE['user'];?></a></li>
      </ul>
    </div>
  </div>
</div>
<?php
$usnn=$_GET['usn'];
$qur="select * from `firstsem_results` where `USN`='$usnn'";
$result=mysql_query($qur);
$arr=mysql_fetch_array($result);
echo "<div class='col-md-12'>";
echo "<center>";
echo "<table class='table'>";
echo "<tr><td>USN:</td><td>".$arr['usn']."</td></tr>";
echo "<tr><td>Name:</td><td>".$arr['sname']."</td></tr>";
echo "<tr><td>Father's Name:</td><td>".$arr['fname']."</td></tr>";
echo "<tr><td>Mother's Name:</td><td>".$arr['mname']."</td></tr>";
echo "<tr><td>Date Of Birth:</td><td>".$arr['dob']."</td></tr>";
echo "<tr><td>E-Mail:</td><td>".$arr['email']."</td></tr>";
echo "<tr><td>Student Mobile No:</td><td>".$arr['smobile']."</td></tr>";
echo "<tr><td>Address:</td><td>".$arr['address']."</td></tr>";
echo "<tr><td>Father's Mobile No:</td><td>".$arr['fmobile']."</td></tr>";
echo "<tr><td>Mother's Mobile No:</td><td>".$arr['mmobile']."</td></tr>";
echo "<tr><td>Registration Status:</td><td>".$arr['reg_status']."</td></tr>";
echo "</table>";
echo "</center>";
echo "</div>";
?>
</body>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/popup.js" type="text/javascript"></script>
</html>
