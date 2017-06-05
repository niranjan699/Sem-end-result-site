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
  width:45%;
  margin-left:150px;
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
max-width:100px; display:inline;
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

</div>
<script type="text/javascript">
function closeSelf(){
    alert("update sucessfull");

    self.close();
    return true;
}
 window.onunload = refreshParent;
    function refreshParent() {
        window.opener.location.reload();
    }
</script>
<div class="w3-copntainer" id="empty">
<div class="w3-container">
<?php
include 'connection.php';
$USN=$_GET['USN'];
$query = "SELECT * FROM `secondsem_results` WHERE USN='$USN'";

$result = mysql_query($query);

$arry = mysql_fetch_array($result);
$NAME=$arry['NAME'];
$CI1=$arry['CI1'];
$SI1=$arry ['SI1'];
$CI2=$arry['CI2'];
$SI2=$arry ['SI2'];
$CI3=$arry['CI3'];
$SI3=$arry ['SI3'];
$CI4=$arry['CI4'];
$SI4=$arry ['SI4'];
$CI5=$arry['CI5'];
$SI5=$arry ['SI5'];
$CI6=$arry['CI6'];
$SI6=$arry ['SI6'];
$CI7=$arry['CI7'];
$SI7=$arry ['SI7'];
$CI8=$arry['CI8'];
$SI8=$arry ['SI8'];
echo "\n"; 
echo "<div class=\"w3-container\">\n"; 

echo "<form method=\"POST\" action=\"update2.php\" class=\"form w3-center\" id=\"stud\" onsubmit=\"return closeSelf()\">";
echo "<table style=\"margin-left:90px;margin-top:-78px\" cellpadding=\"10px\">\n"; 
echo "<tr>\n"; 
echo "<td style=\"text-align:right\">\n"; 
echo "<label style=\"color:rgba(85, 85, 85, 0.83)\">STUDENT NAME:\n"; 
echo "</label>\n"; 
echo "</td>\n"; 
echo "<td style=\"text-align:left\">\n"; 
echo "<input class=\"form-control\" style=\"max-width:200px\" type=\"text\"  name=\"NAME\" value=\"$NAME\"/>\n"; 
echo "</td>\n"; 
echo "</tr>\n"; 
echo "<td style=\"text-align:right\">  \n"; 
echo "<label style=\"color:rgba(85, 85, 85, 0.83)\"><right> STUDENT USN:</right></td>\n"; 
echo "<td style=\"text-align:left\">  \n"; 
echo "<input class=\"form-control\" style=\"max-width:200px\" type=\"text\"  name=\"USN\" value=\"$USN\"  readonly></label>\n"; 
echo "</td>\n"; 
echo "</table>\n"; 
echo "<div class=\"container\"><hr/></dive\n";
echo "\n"; 
echo "\n"; 
echo "\n"; 
echo "\n"; 
echo "\n"; 
echo " <div class=\"w3-center\" >\n"; 
echo "  <h3 style=\"    text-align: center;\n"; 
echo "    padding-left:10px;\n"; 
echo "    margin-bottom: 10px;\"><font color=\"brown\">UPDATE MARKS</font></h3>\n"; 
echo "<table class=\"table table-hover\" style=\"width:70%;margin-left:250px;cellpadding=10\">\n"; 
echo "<tr><th><font color=\"darkpink\">ENGINEERING MECHANICS</font></th><td>\n"; 
echo "<label>CIE\n"; 
echo "<input class=\"form-control\" style=\"max-width:100px\"  id=\"fo\" min=\"0\" max=\"50\" type=\"number\"  name=\"CI1\"\n"; 
echo "  value=\"$CI1\"   > </label></td>\n"; 
echo "  <td>\n"; 
echo "<label>SEE <input id=\"fo\" class=\"form-control\" style=\"max-width:100px\" min=\"0\" max=\"100\" type=\"number\"  name=\"SI1\"\n"; 
echo "   value=\"$SI1\"     ></label></td></tr>\n"; 
echo "  </tr>\n"; 
echo "<tr><th ><font color=\"darkpink\">ELEMENTS OF ENGINEERING DRAWING</font></th>\n"; 
echo "<td><label>CIE\n"; 
echo "<input id=\"fo\" class=\"form-control\" style=\"max-width:100px\"  min=\"0\" max=\"50\" type=\"number\"  name=\"CI2\"\n"; 
echo "  value=\"$CI2\"   > </label></td>\n"; 
echo "  <td><label>SEE <input id=\"fo\" class=\"form-control\" style=\"max-width:100px\"  min=\"0\" max=\"100\" type=\"number\"  name=\"SI2\"\n"; 
echo "  value=\"$SI2\"   ></label></td></tr>\n"; 
echo "  </tr>\n"; 
echo "  <tr><th><font color=\"darkpink\"> ENGINEERING MATHEMATICS</font></th><td><label>CIE\n"; 
echo "<input id=\"fo\" class=\"form-control\" style=\"max-width:100px\"  min=\"0\" max=\"50\" type=\"number\"  name=\"CI3\"\n"; 
echo "  value=\"$CI3\"   > </label></td><td><label>SEE <input id=\"fo\" class=\"form-control\" style=\"max-width:100px\"  min=\"0\" max=\"100\" type=\"number\"  name=\"SI3\"\n"; 
echo "  value=\"$SI3\"   ></label></td></tr>\n"; 
echo "  </tr><tr><th><font color=\"darkpink\">ENGINEERING CHEMISTRY</font></th><td><label>CIE\n"; 
echo "<input id=\"fo\" class=\"form-control\" style=\"max-width:100px\"  min=\"0\" max=\"50\" type=\"number\"  name=\"CI4\"\n"; 
echo "  value=\"$CI4\"   > </label></td><td><label>SEE <input id=\"fo\" class=\"form-control\" style=\"max-width:100px\"  min=\"0\" max=\"100\" type=\"number\"  name=\"SI4\"\n"; 
echo "  value=\"$SI4\"   ></label></td></tr>\n"; 
echo "  </tr><tr><th><font color=\"darkpink\">CO LAB</font></th><td><label>CIE\n"; 
echo "<input id=\"fo\" class=\"form-control\" style=\"max-width:100px\"  min=\"0\" max=\"50\" type=\"number\"  name=\"CI5\"\n"; 
echo "  value=\"$CI5\"   > </label></td><td><label>SEE <input id=\"fo\" class=\"form-control\" style=\"max-width:100px\"  min=\"0\" max=\"100\" type=\"number\"  name=\"SI5\"\n"; 
echo "  value=\"$SI5\"   ></label></td></tr>\n"; 
echo "  </tr><tr><th><font color=\"darkpink\">CONSTITUTION OF INDIA</font>\n"; 
echo "  </th><td><label>CIE\n"; 
echo "<input id=\"fo\" class=\"form-control\" style=\"max-width:100px\"  min=\"0\" max=\"50\" type=\"number\"  name=\"CI6\"\n"; 
echo "  value=\"$CI6\"   > </label></td><td><label>SEE <input id=\"fo\" class=\"form-control\" style=\"max-width:100px\"  min=\"0\" max=\"100\" type=\"number\"  name=\"SI6\"\n"; 
echo "  value=\"$SI6\"   ></label></td></tr>\n"; 
echo "  </tr><tr><th><font color=\"darkpink\">ENVIRONMENTAL STUDIES</th><td><label>CIE\n"; 
echo "<input id=\"fo\" class=\"form-control\" style=\"max-width:100px\"  min=\"0\" max=\"50\" type=\"number\"  name=\"CI7\"\n"; 
echo "  value=\"$CI7\"   > </label></td><td><label>SEE <input id=\"fo\" class=\"form-control\" style=\"max-width:100px\"  min=\"0\" max=\"100\" type=\"number\"  name=\"SI7\"\n"; 
echo "  value=\"$SI7\"   ></label></td></tr>\n"; 
echo "  </tr><tr><th><font color=\"darkpink\">FUNCTIONAL ENGLISH</th><td><label>CIE\n"; 
echo "<input id=\"fo\" class=\"form-control\" style=\"max-width:100px\"  min=\"0\" max=\"50\" type=\"number\"  name=\"CI8\"\n"; 
echo "  value=\"$CI8\"   > </label></td><td><label>SEE <input  id=\"fo\" class=\"form-control\" style=\"max-width:100px\"  min=\"0\" max=\"100\" type=\"number\"  name=\"SI8\"\n"; 
echo "  value=\"$SI8\"   ></label></td></tr></table>\n"; 

?>

 

<div class="container">
<div class="row">
<div class="col-md-9 ">
<div class="col-md-2" >
</div>
<div class="col-md-3" >

</div>
</div>
<div class="col-md-3" >
<div class="col-md-6" >
<input TYPE="SUBMIT"   name="submit" class="form-control btn btn-success" value="update"/>
</div>
<div class="col-md-6">

</div>
</div>
</div>
</div>
</div>
</form>
</div>
</div>


   
  

  </body></html>            