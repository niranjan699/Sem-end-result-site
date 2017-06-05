<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="w3.css">
<style type = "text/css"> 
#empty{
		height:50px;
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
#nav
{
  box-shadow: 0px 0px 30px black;
}
#but{
  margin-top: 50px;
  margin-left: -100px;
}
th
{
  
}
tr{
	text-align: center;
}
.buttonsub
{
      background: linear-gradient(#79bc64, #578843);
      font-size: 12px;
      font-family:helvetica, arial, sans-serif !important;
      font-weight: bold !important;
      min-width: 120px;
      padding: 7px 10px;
      text-align: center;
      box-shadow: inset 0 1px 1px #a4e388;
      border-color: #3b6e22 #3b6e22 #2c5115;
      border: 1px solid;
      border-radius: 10px;
      color: #fff;
      cursor: pointer;
      display: inline-block;
      letter-spacing: 1px;
      text-shadow: 0 1px 2px rgba(0,0,0,.5);
      transition:0.2s ease-out;
       margin-left: -105px;
      
}
.resetbut
{
      background: linear-gradient(rgb(221, 63, 98),rgb(194,31,64));
      font-size: 12px;
      font-family:helvetica, arial, sans-serif !important;
      font-weight: bold !important;
      min-width: 120px;
      padding: 7px 10px;
      text-align: center;
      box-shadow: inset 0 1px 1px #a4e388;
      border-color: #3b6e22 #3b6e22 #2c5115;
      border: 1px solid;
      border-radius: 10px;
      color: #fff;
      cursor: pointer;
      display: inline-block;
      letter-spacing: 1px;
      text-shadow: 0 1px 2px rgba(0,0,0,.5);
      transition:0.2s ease-out;
       margin-left: 105px;

      }
</style>
</head>
<body>
<nav class="w3-sidenav w3-white w3-card-2" style="display:none" id="one">
  <a href="javascript:void(0)" 
  onclick="w3_close()"
  class="w3-closenav w3-large">Close</a>
  <a href="coe-login.html">Back</a>    
  <a href="homepage.html">Logout</a>       
</nav>

	<div class="w3-container w3-teal ">
  <span class="w3-opennav w3-xlarge" onclick="w3_open()">&#9776;</span>
  <div class="w3-container w3-center" id="header">
  	<h1>BMS COLLEGE OF ENGINEERING</h1>
  	</div>
  </div>
  <script>
function w3_open() {
    document.getElementsByClassName("w3-sidenav")[0].style.display = "block";
}
function w3_close() {
    document.getElementsByClassName("w3-sidenav")[0].style.display = "none";
}
</script>
<nav class="w3-sidenav w3-white w3-card-8 w3-light-grey w3-center w3-padding-24 " id="nav" style="width:12%;">
  <header class="w3-container w3-padding-24 ">
  <h5>SELECT SEMESTER:</h5>
  </header>
  <a href="#link1">First Semester</a>		
  <a href="#link2">Second Semester</a>		
  <a href="#link3">Third Semester</a>			
</nav>
</div>
<div class="w3-copntainer" id="empty">
</div>
<div class="w3-container">
<form class="form w3-center" id="stud">
<table style="margin-left:130px">
<tr>
<td style="text-align:right">
<label><font color="darkpink">STUDENT NAME:</font>
</label>
</td>
<td style="text-align:left">
<input type="text"  name="studentname" value=""/>
</td>
</tr>
<td style="text-align:right">  
<label><font color="darkpink" ><right> STUDENT USN:</right></font></td>
<td style="text-align:left">  
<input type="text"  name="USN" value=""   ></label>
</td>
</table>
</form>
<hr/>
 <form class="w3-center">
  <h3 style="    text-align: center;
    padding-left:40px;
    margin-bottom: 10px;"><font color="brown">ENTER THE MARKS FOR FOLLOWING SUBJECTS</font></h3>


<div class="w3-tab" style="margin-left:25%">

<div id="link1" class="w3-container w3-center">
<form class="w3-center">
  <table class="w3-table w3-bordered w3-striped w3-card-8" style="width:103%;margin-left:-130px;margin-top:30px" cellpadding="20">
<tr><th><font color="darkpink">ENGINEERING MECHANICS</font></th><td><label>CIE
<input type="text"  name="CIE_M"
  value=""   > </label></td><td><label>SIE<input type="text"  name="SIE_M"
  value=""   ></label></td></tr>
  </tr>
<tr><th ><font color="darkpink">ELEMENTS OF ENGINEERING DRAWING</font></th><td><label>CIE
<input type="text"  name="CIE_M"
  value=""   > </label></td><td><label>SEE<input type="text"  name="SIE_M"
  value=""   ></label></td></tr>
  </tr><tr><th><font color="darkpink">ENGINEERING MATHMATICS</font></th><td><label>CIE
<input type="text"  name="CIE_M"
  value=""   > </label></td><td><label>SEE<input type="text"  name="SIE_M"
  value=""   ></label></td></tr>
  </tr><tr><th><font color="darkpink">ENGINEERING CHEMISTRY</font></th><td><label>CIE
<input type="text"  name="CIE_M"
  value=""   > </label></td><td><label>SEE<input type="text"  name="SIE_M"
  value=""   ></label></td></tr>
  </tr><tr><th><font color="darkpink">CO LAB</font></th><td><label>CIE
<input type="text"  name="CIE_M"
  value=""   > </label></td><td><label>SEE<input type="text"  name="SIE_M"
  value=""   ></label></td></tr>
  </tr><tr><th><font color="darkpink">COSTITUTION OF INDIA</font>
  </th><td><label>CIE
<input type="text"  name="CIE_M"
  value=""   > </label></td><td><label>SEE<input type="text"  name="SIE_M"
  value=""   ></label></td></tr>
  </tr><tr><th><font color="darkpink">ENVIRONMENTAL STUDIES</th><td><label>CIE
<input type="text"  name="CIE_M"
  value=""   > </label></td><td><label>SEE<input type="text"  name="SIE_M"
  value=""   ></label></td></tr>
  </tr><tr><th><font color="darkpink">FUCTIONAL ENGLISH</th><td><label>CIE
<input type="text"  name="CIE_M"
  value=""   > </label></td><td><label>SEE<input type="text"  name="SIE_M"
  value=""   ></label></td></tr></table>
<input TYPE="SUBMIT" id="but" style="margin-left:-100px" name="submit" class="buttonsub" id="sub">
  <value="submit"/><input TYPE="RESET"  name="reset"
  value="reset"class="resetbut"/>
  </form>
</div>
<div id="link2" class="w3-container">
<table class="w3-table w3-bordered w3-striped w3-card-8" style="width:103%;margin-left:-130px;margin-top:30px" cellpadding="20">
<tr><th><font color="darkpink">ENGINEERING MECHANICS</font></th><td><label>CIE
<input type="text"  name="CIE_M"
  value=""   > </label></td><td><label>SIE<input type="text"  name="SIE_M"
  value=""   ></label></td></tr>
  </tr>
<tr><th ><font color="darkpink">ELEMENTS OF ENGINEERING DRAWING</font></th><td><label>CIE
<input type="text"  name="CIE_M"
  value=""   > </label></td><td><label>SEE<input type="text"  name="SIE_M"
  value=""   ></label></td></tr>
  </tr><tr><th><font color="darkpink">ENGINEERING MATHMATICS</font></th><td><label>CIE
<input type="text"  name="CIE_M"
  value=""   > </label></td><td><label>SEE<input type="text"  name="SIE_M"
  value=""   ></label></td></tr>
  </tr><tr><th><font color="darkpink">ENGINEERING CHEMISTRY</font></th><td><label>CIE
<input type="text"  name="CIE_M"
  value=""   > </label></td><td><label>SEE<input type="text"  name="SIE_M"
  value=""   ></label></td></tr>
  </tr><tr><th><font color="darkpink">CO LAB</font></th><td><label>CIE
<input type="text"  name="CIE_M"
  value=""   > </label></td><td><label>SEE<input type="text"  name="SIE_M"
  value=""   ></label></td></tr>
  </tr><tr><th><font color="darkpink">COSTITUTION OF INDIA</font>
  </th><td><label>CIE
<input type="text"  name="CIE_M"
  value=""   > </label></td><td><label>SEE<input type="text"  name="SIE_M"
  value=""   ></label></td></tr>
  </tr><tr><th><font color="darkpink">ENVIRONMENTAL STUDIES</th><td><label>CIE
<input type="text"  name="CIE_M"
  value=""   > </label></td><td><label>SEE<input type="text"  name="SIE_M"
  value=""   ></label></td></tr>
  </tr><tr><th><font color="darkpink">FUCTIONAL ENGLISH</th><td><label>CIE
<input type="text"  name="CIE_M"
  value=""   > </label></td><td><label>SEE<input type="text"  name="SIE_M"
  value=""   ></label></td></tr></table>
<input TYPE="SUBMIT" id="but" name="submit" class="buttonsub" id="sub">
  <value="submit"/><input TYPE="RESET"   name="reset"
  value="reset" id ="sub"class="resetbut"/>
</div>
<div id="link3" class="w3-container">
<table class="w3-table w3-bordered w3-striped w3-card-8" style="width:103%;margin-left:-130px;margin-top:30px" cellpadding="20">
<tr><th><font color="darkpink">ENGINEERING MECHANICS</font></th><td><label>CIE
<input type="text"  name="CIE_M"
  value=""   > </label></td><td><label>SIE<input type="text"  name="SIE_M"
  value=""   ></label></td></tr>
  </tr>
<tr><th ><font color="darkpink">ELEMENTS OF ENGINEERING DRAWING</font></th><td><label>CIE
<input type="text"  name="CIE_M"
  value=""   > </label></td><td><label>SEE<input type="text"  name="SIE_M"
  value=""   ></label></td></tr>
  </tr><tr><th><font color="darkpink">ENGINEERING MATHMATICS</font></th><td><label>CIE
<input type="text"  name="CIE_M"
  value=""   > </label></td><td><label>SEE<input type="text"  name="SIE_M"
  value=""   ></label></td></tr>
  </tr><tr><th><font color="darkpink">ENGINEERING CHEMISTRY</font></th><td><label>CIE
<input type="text"  name="CIE_M"
  value=""   > </label></td><td><label>SEE<input type="text"  name="SIE_M"
  value=""   ></label></td></tr>
  </tr><tr><th><font color="darkpink">CO LAB</font></th><td><label>CIE
<input type="text"  name="CIE_M"
  value=""   > </label></td><td><label>SEE<input type="text"  name="SIE_M"
  value=""   ></label></td></tr>
  </tr><tr><th><font color="darkpink">COSTITUTION OF INDIA</font>
  </th><td><label>CIE
<input type="text"  name="CIE_M"
  value=""   > </label></td><td><label>SEE<input type="text"  name="SIE_M"
  value=""   ></label></td></tr>
  </tr><tr><th><font color="darkpink">ENVIRONMENTALsss STUDIES</th><td><label>CIE
<input type="text"  name="CIE_M"
  value=""   > </label></td><td><label>SEE<input type="text"  name="SIE_M"
  value=""   ></label></td></tr>
  </tr><tr><th><font color="darkpink">FUCTIONAL ENGLISH</th><td><label>CIE
<input type="text"  name="CIE_M"
  value=""   > </label></td><td><label>SEE<input type="text"  name="SIE_M"
  value=""   ></label></td></tr></table>
<input TYPE="SUBMIT" id="but" name="submit" class="buttonsub" id="sub">
  <value="submit"/><input TYPE="RESET"    name="reset"
  value="reset" id ="sub"class="resetbut"/>
</div>
  
</div>
  </body>            