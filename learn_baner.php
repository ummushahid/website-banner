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
            <th width="6%" align="center" valign="top" scope="col"><a href="design_step1.php"><img src="Imej/All Button/none_design.png" alt="Design" width="100" height="45" title="Start Design" class="button" /></a></th>
            <th width="6%" align="center" valign="top" scope="col"><a href="learn_baner.php"><img src="Imej/All Button/border_learn2.png" alt="Learn Baner" width="94" height="45" title="Learn" class="button" /></a></th>
            <th width="6%" align="center" valign="top" scope="col"><a href="contact_baner.php"><img src="Imej/All Button/none_contact.png" alt="Contact" width="100" height="45" title="Contact Us" class="button" /></a></th>
          </tr>
        </table>
      </div>
  
  </form></div>
  <div class="content">
    <h2>&nbsp;</h2>
    <p>Let's make your own banner with a few simple steps.</p>
    <p><img src="Imej/All Image/Step_2.png" width="1213" height="1025" alt="step1" /></p>
    <p><a href="design_step1.php"><img src="Imej/All Button/SDN.png" alt="sdn" width="337" height="100" class="button" /></a></p>
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

  <div class="footer">
    <p>*  <!-- end .footer -->footer</p>
  </div>
  <!-- end .container --></div>
</body>
</html>