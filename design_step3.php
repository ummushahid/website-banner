<?php require_once('Connections/connection_baner.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form2")) {
  $insertSQL = sprintf("INSERT INTO baner_details (title, `date`, `time`, venue, contact_no, notes) VALUES (%s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['title'], "text"),
                       GetSQLValueString($_POST['date'], "text"),
                       GetSQLValueString($_POST['time'], "text"),
                       GetSQLValueString($_POST['venue'], "text"),
                       GetSQLValueString($_POST['contact_no'], "text"),
                       GetSQLValueString($_POST['notes'], "text"));

  mysql_select_db($database_connection_baner, $connection_baner);
  $Result1 = mysql_query($insertSQL, $connection_baner) or die(mysql_error());

  $insertGoTo = "design_step4.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}

session_start();

if (! isset($_SESSION['size']))
{
  header('location: design_step1.php');
  return;
}

?>

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
	font-size: 24px;
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

input[type=text] 
{
  width: 90%;
  padding: 10px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 2px solid #ccc;
  -webkit-transition: 0.1s;
  transition: 0.1s;
  outline: none;
  background-color: white;  
}

input[type=text]:focus 
{
  border: 2px solid #555;
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
</style>
</head>

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
    <h2><font face="Georgia" size="+6" color="#FFFFFF">Step 3</font></h2>
    <h3>
      <table width="100%" border="0" align="center">
        <tr>
          <td height="10" align="center" scope="row"><font face="Montserrat" color="#FFFFFF">Insert your design text.</font></td>
        </tr>
        <tr>
          <td height="10" align="center" scope="row"><font face="Montserrat" color="#FFFFFF">Our designer will help you put those details beautifully inside the template.</font></td>
        </tr>
      </table>
    </h3>
    <p>&nbsp; </p>
    <form action="processes/storeStep3InDatabase.php" method="post" name="Step 3" id="Step 3">
      <table width="90%" align="center">
        <tr valign="baseline">
          <td align="right" nowrap="nowrap">Banner Size:</td>
          <td><?php
              foreach($_SESSION['size'] as $size) :
                ?>
            <?= $size ?>
            ,
          <?php
              endforeach;
              ?></td>
        </tr>
        <tr valign="baseline">
          <td align="right" nowrap="nowrap">Banner Code:</td>
          <td><?php
              foreach($_SESSION['template'] as $template) :
                ?>
            <?= $template ?>
            ,
          <?php
              endforeach;
              ?></td>
        </tr>
        <tr valign="middle">
          <td align="right" nowrap="nowrap">Quantity:</td>
          <td><label for="textfield"></label>
          <input type="text" name="quantity" id="textfield" /></td>
        </tr>
        <tr valign="middle">
          <td width="22%" align="right" nowrap="nowrap">Title:</td>
          <td width="78%"><input type="text" name="title" value="" size="32" /></td>
        </tr>
        <tr valign="middle">
          <td align="right" nowrap="nowrap">Date:</td>
          <td><input type="text" name="date" value="" size="32" /></td>
        </tr>
        <tr valign="middle">
          <td align="right" nowrap="nowrap">Time:</td>
          <td><input type="text" name="time" value="" size="32" /></td>
        </tr>
        <tr valign="middle">
          <td align="right" nowrap="nowrap">Venue:</td>
          <td><input type="text" name="venue" value="" size="32" /></td>
        </tr>
        <tr valign="middle">
          <td align="right" nowrap="nowrap">Contact No:</td>
          <td><input type="text" name="contact_no" value="" size="32" /></td>
        </tr>
        <tr valign="middle">
          <td nowrap="nowrap" align="right">Notes:</td>
          <td><textarea name="notes" cols="100" rows="5"></textarea></td>
        </tr>
      </table>
      <p>&nbsp;</p>
      <p>
        <input name="Step4" type="image" class="button" id="Step4" value="Next for Step 4!" src="Imej/All Button/NextS4.png" alt="Step 4" width="221" height="60"/>
      </p>
      <p>
        <input type="hidden" name="MM_insert" value="form2" />
      </p>
    </form>
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

  <div class="footer"></div>
  <!-- end .container --></div>
</body>
</html>