<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Baner</title>
<style type="text/css">
<!--
body {
	font: 100%/1.4 Monserrat, Georgia, sans-serif;
	background-color: transparent;
	margin: 10;
	padding: 0;
	color: white;
	background-image: url(Imej/All%20Bg/4.png);
	background-size: 100%;
	background-repeat: no-repeat;
	background-attachment: fixed;
}

/* ~~ Element/tag selectors ~~ */
ul, ol, dl { 
	padding: 0;
	margin: 0;
}
h1, h2, h3, h4, h5, h6, p {
	margin-top: 0;
	padding-right: 0px;
	padding-left: 0px;
	font-family: Montserrat;
	font-size: x-large;
	text-align:center;
}

a img {
	border: none;
}

a:link {
	color: #414958;
	text-decoration: none; 
}

a:visited {
	color: #4E5869;
	text-decoration: none;
}
a:hover, a:active, a:focus {
	text-decoration: none;
}

.button {
  background-color: transparent;
  border: none;
  color: white;
  padding: 0px 0px;
  text-align: center;
  font-size: 16px;
  margin: 0px 0px;
  opacity: 1;
  transition: 0.3s;
  display: inline-block;
  text-decoration: none;
  cursor: pointer;
}

.button:hover {
	opacity: 0.5;
}

.container {
	width: 100%;
	max-width: 1260px;
	min-width: 1260px;
	background-color: transparent;
	margin: 0 auto;
}

.header {
	padding: 20px 0;
	background-color: transparent;
	font-size: 150%;
}

/* The sticky class is added to the header with JS when it reaches its scroll position */
.sticky {
	position: fixed;
	top: 0;
	width: 93.5%
}

/* Add some top padding to the page content to prevent sudden quick movement (as the header gets a new position at the top of the page (position:fixed and top:0) */
.sticky + .content {
	padding-top: 0px;
}

.content {
	padding: 0px 0;
	font-size: 36px;
}

.content ul, .content ol { 
	padding: 0 15px 15px 15px;
}

.footer {
	padding: 5px 0;
	background-color: transparent;
	font-size: 20%;
	text-align: center;	
}


.fltrt {
	float: center;
	margin-left: 0px;
}
.fltlft {
	float: left;
	margin-right: 0px;
}
.clearfloat {
	clear:both;
	height:0;
	font-size: 5px;
	line-height: 0px;
}
body,td,th {
	font-family: Montserrat;
}
a {
	font-family: Montserrat;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}

-->
</style></head>

<body>

<div class="container">
  <div class="header" id="myHeader">
    <form id="form1" name="form1" method="post" action="">
      <div align="left">
        <table width="100%" border="0">
          <tr>
            <th width="17%" height="44" scope="col"><div align="left"><a href="home_baner.php"><img src="Imej/All Bg/Logo2.png" alt="[] Baner" width="130" height="35" title="[]BANER" class="button" /></a></div></th>
            <th width="24%" valign="bottom" scope="col">&nbsp;</th>
            <th width="6%" valign="bottom" scope="col"><a href="home_baner.php"><img src="Imej/All Button/none_home.png" alt="Home" width="100" height="45"  title="Home" class="button" /></a></th>
            <th width="6%" align="center" valign="top" scope="col"><a href="about_baner.php"><img src="Imej/All Button/none_about.png" alt="About Baner" width="100" height="45" title="About Baner" class="button" /></a></th>
            <th width="6%" align="center" valign="top" scope="col"><a href="design_step1.php"><img src="Imej/All Button/border_design.png" alt="Design" width="94" height="45" title="Start Design" class="button" /></a></th>
            <th width="6%" align="center" valign="top" scope="col"><a href="learn_baner.php"><img src="Imej/All Button/none_learn.png" alt="Learn Baner" width="100" height="44" title="Learn" class="button" /></a></th>
            <th width="6%" align="center" valign="top" scope="col"><a href="contact_baner.php"><img src="Imej/All Button/none_contact.png" alt="Contact" width="100" height="45" title="Contact Us" class="button" /></a></th>
          </tr>
        </table>
      </div>
  
  </form></div>
  <div class="content">
    <h2><font face="Georgia" size="+6" color="#FFFFFF">Step 1</font></h2>
    <h3>
      <table width="100%" border="0" align="center">
        <tr>
          <td height="10" align="center" scope="row"><font face="Montserrat" color="#FFFFFF">Choose your banner size.</font></td>
        </tr>
        <tr>
          <td height="10" align="center" scope="row"><font face="Montserrat" color="#FFFFFF">You can select more than one size. It's available in different size.</font></td>
        </tr>
      </table>
    </h3>
    <form action="design_step2.php" onsubmit="return checkCheckBoxes(this);">
      <table width="90%" border="0" align="center">
        <tr valign="top">
          <th width="33%" scope="col"><p><img src="Imej/All Button/Size1.png" alt="Size_Small" width="366" height="300" class="button" />
              </p>
            <p>
              <input type="checkbox" name="CHECKBOX_1" value="Small" />
            Size 1: Small</p>
            <p>&nbsp;</p></th>
          <th width="34%" scope="col"><p><img src="Imej/All Button/Size2.png" alt="Size_Medium" width="366" height="300" class="button" />
              </p>
            <p>
              <input type="checkbox" name="CHECKBOX_2" value="Medium" />
            Size 2: Medium</p>
            <p>&nbsp;</p></th>
          <th width="33%" scope="col"><p><img src="Imej/All Button/Size3.png" alt="Size_Large" width="366" height="300" class="button" />
              </p>
            <p>
              <input type="checkbox" name="CHECKBOX_3" value="Large" />
            Size 3: Large</p>
            <p>&nbsp;</p></th>
        </tr>
      </table>
      <p>
        <input type="image" class="button" value="Submit!" src="Imej/All Button/NextS2 - Copy.png" align="middle" width="221" height="60" />
      </p>
    </form>
    <p>&nbsp;</p>
  </div>
  
  <script>
window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
</script>

<script type="text/javascript" language="JavaScript">
<!--
function checkCheckBoxes(theForm) {
	if (
	theForm.CHECKBOX_1.checked == false &&
	theForm.CHECKBOX_2.checked == false &&
	theForm.CHECKBOX_3.checked == false) 
	{
		alert ('Select banner size to proceed');
		return false;
	} else { 	
		return true;
	}
}
//-->
</script> 

  <div class="footer">
  <p></p>
  </div>
  <!-- end .container --></div>
</body>
</html>
