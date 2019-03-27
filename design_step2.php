<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Baner</title>
<script src="https://cdn.jsdelivr.net/npm/vue"></script>
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

.pic{
	width: 400px;
	height: 200px;
}
.picbig{
	position: absolute;
	width: 0px;
	-webkit-transition: width 0.3s linear 0s;
	transition: width 0.3s linear 0s;
	z-index: 0;
	visibility: visible;
}
.pic:hover + .picbig{
	width: 500px;
	text-align: center;
	position: absolute;
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

<div class="container" id="app">
  <div class="header" id="myHeader">
    <form id="form1" name="form1" method="post" action="processes/design_step2.php">
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
    <h2><font face="Georgia" size="+6" color="#FFFFFF">Step 2</font></h2>
    <h3>
      <table width="100%" border="0" align="center">
        <tr>
          <td height="10" align="center" scope="row"><font face="Montserrat" color="#FFFFFF">Choose a stunning template.</font></td>
        </tr>
        <tr>
          <td height="10" align="center" scope="row"><font face="Montserrat" color="#FFFFFF">Browse 100s of beautiful templates designed for every kind of purpose.</font></td>
        </tr>
      </table>
    </h3>
    <form action="processes/design_step2.php" method="post" id="Step 2" onsubmit="return checkCheckBoxes(this);">
      <table width="90%" border="0" align="center">
        <tr valign="top">
          <th width="33%" scope="col"><p><img src="Imej/All Design/1-02.png" alt="B 001" width="300" height="150" class="pic" /></p>
            <p>
              <input type="checkbox" v-model="checkbox" name="checkbox[]" value="B 001" />
              B 001</p>
            <p>&nbsp;</p></th>
          <th width="34%" scope="col"><p><img src="Imej/All Design/2-03.png" alt="B 002" width="300" height="150" class="pic" /></p>
            <p>
              <input type="checkbox" v-model="checkbox" name="checkbox[]" value="B 002" />
              B 002</p>
            <p>&nbsp;</p></th>
          <th width="33%" scope="col"><p><img src="Imej/All Design/3-02.png" alt="B 003" width="300" height="150" class="pic" /></p>
            <p>
              <input type="checkbox" v-model="checkbox" name="checkbox[]" value="B 003" />
              B 003</p>
            <p>&nbsp;</p></th>
        </tr>
        <tr valign="top">
          <th scope="col"><p><img src="Imej/All Design/4-03.png" alt="B 004" width="300" height="150" class="pic" /></p>
            <p>
              <input type="checkbox" v-model="checkbox" name="checkbox[]" value="B 004" />
              B 004</p>
            <p>&nbsp;</p></th>
          <th scope="col"><p><img src="Imej/All Design/5-02.png" alt="B 005" width="300" height="150" class="pic" /></p>
            <p>
              <input type="checkbox" v-model="checkbox" name="checkbox[]" value="B 005" />
              B 005</p>
            <p>&nbsp;</p></th>
          <th scope="col"><p><img src="Imej/All Design/6-03.png" alt="B 006" width="300" height="150" class="pic" /></p>
            <p>
              <input type="checkbox" v-model="checkbox" name="checkbox[]" value="B 006" />
              B 006</p>
            <p>&nbsp;</p></th>
        </tr>
        <tr valign="top">
          <th scope="col"><p><img src="Imej/All Design/7-02.png" alt="B 007" width="300" height="150" class="pic" /></p>
            <p>
              <input type="checkbox" v-model="checkbox" name="checkbox[]" value="B 007" />
            B 007</p>
          <p>&nbsp;</p></th>
          <th scope="col"><p><img src="Imej/All Design/8-03.png" alt="B 008" width="300" height="150" class="pic" /></p>
            <p>
              <input type="checkbox" v-model="checkbox" name="checkbox[]" value="B 008" />
              B 008</p>
            <p>&nbsp;</p></th>
          <th scope="col"><p><img src="Imej/All Design/9-02.png" alt="B 009" width="300" height="150" class="pic" /></p>
            <p>
              <input type="checkbox" v-model="checkbox" name="checkbox[]" value="B 009" />
              B 009</p>
            <p>&nbsp;</p></th>
        </tr>
        <tr valign="top">
          <th scope="col"><p><img src="Imej/All Design/10-03.png" alt="B 010" width="300" height="150" class="pic" /></p>
            <p>
              <input type="checkbox" v-model="checkbox" name="checkbox[]" value="B 010" />
              B 010</p>
            <p>&nbsp;</p></th>
          <th scope="col"><p><img src="Imej/All Design/11-02.png" alt="B 011" width="300" height="150" class="pic" /></p>
            <p>
              <input type="checkbox" v-model="checkbox" name="checkbox[]" value="B 011" />
              B 011</p>
            <p>&nbsp;</p></th>
          <th scope="col"><p><img src="Imej/All Design/12-03.png" alt="B 012" width="300" height="150" class="pic" /></p>
            <p>
              <input type="checkbox" v-model="checkbox" name="checkbox[]" value="B 012" />
              B 012</p>
            <p>&nbsp;</p></th>
        </tr>
        <tr valign="top">
          <th scope="col"><p><img src="Imej/All Design/13-02.png" alt="B 013" width="300" height="150" class="pic" /></p>
            <p>
              <input type="checkbox" v-model="checkbox" name="checkbox[]" value="B 013" />
            B 013</p>
          <p>&nbsp;</p></th>
          <th scope="col"><p><img src="Imej/All Design/14-03.png" alt="B 014" width="300" height="150" class="pic" /></p>
            <p>
              <input type="checkbox" v-model="checkbox" name="checkbox[]" value="B 014" />
              B 014</p>
            <p>&nbsp;</p></th>
          <th scope="col"><p><img src="Imej/All Design/15-02.png" alt="B 015" width="300" height="150" class="pic" /></p>
            <p>
              <input type="checkbox" v-model="checkbox" name="checkbox[]" value="B 015" />
              B 015</p>
            <p>&nbsp;</p></th>
        </tr>
        <tr valign="top">
          <th scope="col"><p><img src="Imej/All Design/16-03.png" alt="B 016" width="300" height="150" class="pic" /></p>
            <p>
              <input type="checkbox" v-model="checkbox" name="checkbox[]" value="B 016" />
              B 016</p>
            <p>&nbsp;</p></th>
          <th scope="col"><p><img src="Imej/All Design/17-02.png" alt="B 017" width="300" height="150" class="pic" /></p>
            <p>
              <input type="checkbox" v-model="checkbox" name="checkbox[]" value="B 017" />
              B 017</p>
            <p>&nbsp;</p></th>
          <th scope="col"><p><img src="Imej/All Design/18-03.png" alt="B 018" width="300" height="151" class="pic" /></p>
            <p>
              <input type="checkbox" v-model="checkbox" name="checkbox[]" value="B 018" />
              B 018</p>
            <p>&nbsp;</p></th>
        </tr>
        <tr valign="top">
          <th scope="col"><p><img src="Imej/All Design/19-04.png" alt="B 019" width="300" height="150" class="pic" /></p>
            <p>
              <input type="checkbox" v-model="checkbox" name="checkbox[]" value="B 019" />
            B 019</p>
          <p>&nbsp;</p></th>
          <th scope="col"><p><img src="Imej/All Design/20-02.png" alt="B 020" width="300" height="150" class="pic" /></p>
            <p>
              <input type="checkbox" v-model="checkbox" name="checkbox[]" value="B 020" />
              B 020</p>
            <p>&nbsp;</p></th>
          <th scope="col"><p><img src="Imej/All Design/21-03.png" alt="" width="300" height="150" class="pic" /></p>
            <p>
              <input type="checkbox" v-model="checkbox" name="checkbox[]" value="B 021" />
              B 021</p>
            <p>&nbsp;</p></th>
        </tr>
        <tr valign="top">
          <th scope="col"><p><img src="Imej/All Design/22-02.png" alt="B 022" width="300" height="150" class="pic" /></p>
            <p>
              <input type="checkbox" v-model="checkbox" name="checkbox[]" value="B 022" />
              B 022</p>
            <p>&nbsp;</p></th>
          <th scope="col"><p><img src="Imej/All Design/23-03.png" alt="B 023" width="300" height="150" class="pic" /></p>
            <p>
              <input type="checkbox" v-model="checkbox" name="checkbox[]" value="B 023" />
              B 023</p>
            <p>&nbsp;</p></th>
          <th scope="col"><p><img src="Imej/All Design/24-04.png" alt="B 024" width="300" height="150" class="pic" /></p>
            <p>
              <input type="checkbox" v-model="checkbox" name="checkbox[]" value="B 024" />
              B 024</p>
            <p>&nbsp;</p></th>
        </tr>
        <tr valign="top">
          <th scope="col"><p><img src="Imej/All Design/25-02.png" alt="B 025" width="300" height="149" class="pic" /></p>
            <p>
              <input type="checkbox" v-model="checkbox" name="checkbox[]" value="B 025" />
            B 025</p>
          <p>&nbsp;</p></th>
          <th scope="col"><p><img src="Imej/All Design/26-03.png" alt="B 026" width="300" height="150" class="pic" /></p>
            <p>
              <input type="checkbox" v-model="checkbox" name="checkbox[]" value="B 026" />
              B 026</p>
            <p>&nbsp;</p></th>
          <th scope="col"><p><img src="Imej/All Design/27-02.png" alt="B 027" width="300" height="150" class="pic" /></p>
            <p>
              <input type="checkbox" v-model="checkbox" name="checkbox[]" value="B 027" />
              B 027</p>
            <p>&nbsp;</p></th>
        </tr>
        <tr valign="top">
          <th scope="col"><p><img src="Imej/All Design/28-03.png" alt="B 028" width="300" height="150" class="pic" /></p>
            <p>
              <input type="checkbox" v-model="checkbox" name="checkbox[]" value="B 028" />
              B 028</p>
            <p>&nbsp;</p></th>
          <th scope="col"><p><img src="Imej/All Design/29-02.png" alt="B 029" width="300" height="150" class="pic" /></p>
            <p>
              <input type="checkbox" v-model="checkbox" name="checkbox[]" value="B 029" />
              B 029</p>
            <p>&nbsp;</p></th>
          <th scope="col"><p><img src="Imej/All Design/30-03.png" alt="B 030" width="300" height="150" class="pic" /></p>
            <p>
              <input type="checkbox" v-model="checkbox" name="checkbox[]" value="B 030" />
              B 030</p>
            <p>&nbsp;</p></th>
        </tr>
        <tr valign="top">
          <th scope="col"><p><img src="Imej/All Design/31-02.png" alt="B 031" width="300" height="150" class="pic" /></p>
            <p>
              <input type="checkbox" v-model="checkbox" name="checkbox[]" value="B 031" />
            B 031</p>
          <p>&nbsp;</p></th>
          <th scope="col"><p><img src="Imej/All Design/32-03.png" alt="B 032" width="300" height="150" class="pic" /></p>
            <p>
              <input type="checkbox" v-model="checkbox" name="checkbox[]" value="B 032" />
              B 032</p>
            <p>&nbsp;</p></th>
          <th scope="col"><p><img src="Imej/All Design/33-04.png" alt="B 033" width="300" height="150" class="pic" /></p>
            <p>
              <input type="checkbox" v-model="checkbox" name="checkbox[]" value="B 033" />
              B 033</p>
            <p>&nbsp;</p></th>
        </tr>
        <tr valign="top">
          <th scope="col"><p><img src="Imej/All Design/34-05.png" alt="B 034" width="300" height="150" class="pic" /></p>
            <p>
              <input type="checkbox" v-model="checkbox" name="checkbox[]" value="B 034" />
              B 034</p>
            <p>&nbsp;</p></th>
          <th scope="col"><p><img src="Imej/All Design/35-06.png" alt="B 035" width="300" height="150" class="pic" /></p>
            <p>
              <input type="checkbox" v-model="checkbox" name="checkbox[]" value="B 035" />
              B 035</p>
            <p>&nbsp;</p></th>
          <th scope="col"><p><img src="Imej/All Design/36-07.png" alt="B 036" width="300" height="150" class="pic" /></p>
            <p>
              <input type="checkbox" v-model="checkbox" name="checkbox[]" value="B 036" />
              B 036</p>
            <p>&nbsp;</p></th>
        </tr>
        <tr valign="top">
          <th scope="col"><p><img src="Imej/All Design/37-08.png" alt="B 037" width="300" height="150" class="pic" /></p>
            <p>
              <input type="checkbox" v-model="checkbox" name="checkbox[]" value="B 037" />
              B 037</p>
            <p>&nbsp;</p></th>
          <th scope="col"><p><img src="Imej/All Design/38-09.png" alt="B 038" width="300" height="150" class="pic" /></p>
            <p>
              <input type="checkbox" v-model="checkbox" name="checkbox[]" value="B 038" />
              B 038</p>
            <p>&nbsp;</p></th>
          <th scope="col"><p><img src="Imej/All Design/39-10.png" alt="B 039" width="300" height="150" class="pic" /></p>
            <p>
              <input type="checkbox" v-model="checkbox" name="checkbox[]" value="B 039" />
              B 039</p>
            <p>&nbsp;</p></th>
        </tr>
        <tr valign="top">
          <th scope="col"><p><img src="Imej/All Design/40-11.png" alt="B 040" width="300" height="150" class="pic" /></p>
            <p>
              <input type="checkbox" v-model="checkbox" name="checkbox[]" value="B 040" />
              B 040</p>
            <p>&nbsp;</p></th>
          <th scope="col"><p><img src="Imej/All Design/41-12.png" alt="B 041" width="300" height="150" class="pic" /></p>
            <p>
              <input type="checkbox" v-model="checkbox" name="checkbox[]" value="B 041" />
              B 041</p>
            <p>&nbsp;</p></th>
          <th scope="col"><p><img src="Imej/All Design/42-13.png" alt="B 042" width="300" height="150" class="pic" /></p>
            <p>
              <input type="checkbox" v-model="checkbox" name="checkbox[]" value="B 042" />
            B 042</p>
          <p>&nbsp;</p></th>
        </tr>
        <tr valign="top">
          <th scope="col"><p><img src="Imej/All Design/43-14.png" alt="B 043" width="300" height="150" class="pic" /></p>
            <p>
              <input type="checkbox" v-model="checkbox" name="checkbox[]" value="B 043" />
            B 043</p>
          <p>&nbsp;</p></th>
          <th scope="col"><p><img src="Imej/All Design/44-15.png" alt="B 044" width="300" height="150" class="pic" /></p>
            <p>
              <input type="checkbox" v-model="checkbox" name="checkbox[]" value="B 044" />
              B 044</p>
            <p>&nbsp;</p></th>
          <th scope="col"><p><img src="Imej/All Design/45-16.png" alt="B 045" width="300" height="150" class="pic" /></p>
            <p>
              <input type="checkbox" v-model="checkbox" name="checkbox[]" value="B 045" />
              B 045</p>
            <p>&nbsp;</p></th>
        </tr>
        <tr valign="top">
          <th scope="col"><p><img src="Imej/All Design/46-17.png" alt="B 046" width="300" height="150" class="pic" /></p>
            <p>
              <input type="checkbox" v-model="checkbox" name="checkbox[]" value="B 046" />
              B 046</p>
            <p>&nbsp;</p></th>
          <th scope="col"><p><img src="Imej/All Design/47-18.png" alt="B 047" width="300" height="150" class="pic" /></p>
            <p>
              <input type="checkbox" v-model="checkbox" name="checkbox[]" value="B 047" />
              B 047</p>
            <p>&nbsp;</p></th>
          <th scope="col"><p><img src="Imej/All Design/48-19.png" alt="B 048" width="300" height="150" class="pic" /></p>
            <p>
              <input type="checkbox" v-model="checkbox" name="checkbox[]" value="B 048" />
              B 048</p>
            <p>&nbsp;</p></th>
        </tr>
        <tr valign="top">
          <th scope="col"><p><img src="Imej/All Design/49-20.png" alt="B 049" width="300" height="150" class="pic" /></p>
            <p>
              <input type="checkbox" v-model="checkbox" name="checkbox[]" value="B 049" />
              B 049</p>
            <p>&nbsp;</p></th>
          <th scope="col"><p><img src="Imej/All Design/50-21.png" alt="B 050" width="300" height="150" class="pic" /></p>
            <p>
              <input type="checkbox" v-model="checkbox" name="checkbox[]" value="B 050" />
              B 050</p>
            <p>&nbsp;</p></th>
          <th scope="col"><p><img src="Imej/All Design/51-22.png" alt="B 051" width="300" height="150" class="pic" /></p>
            <p>
              <input type="checkbox" v-model="checkbox" name="checkbox[]" value="B 051" />
              B 051</p>
            <p>&nbsp;</p></th>
        </tr>
        <tr valign="top">
          <th scope="col"><p><img src="Imej/All Design/52-23.png" alt="B 052" width="300" height="150" class="pic" /></p>
            <p>
              <input type="checkbox" v-model="checkbox" name="checkbox[]" value="B 052" />
              B 052</p>
            <p>&nbsp;</p></th>
          <th scope="col"><p><img src="Imej/All Design/53-24.png" alt="B 053" width="300" height="150" class="pic" /></p>
            <p>
              <input type="checkbox" v-model="checkbox" name="checkbox[]" value="B 053" />
              B 053</p>
            <p>&nbsp;</p></th>
          <th scope="col"><p><img src="Imej/All Design/54-25.png" alt="B 054" width="300" height="149" class="pic" /></p>
            <p>
              <input type="checkbox" v-model="checkbox" name="checkbox[]" value="B 054" />
              B 054</p>
            <p>&nbsp;</p></th>
        </tr>
        <tr valign="top">
          <th scope="col"><p><img src="Imej/All Design/55-26.png" alt="B 055" width="300" height="150" class="pic" /></p>
            <p>
              <input type="checkbox" v-model="checkbox" name="checkbox[]" value="B 055" />
            B 055</p>
          <p>&nbsp;</p></th>
          <th scope="col"><p><img src="Imej/All Design/56-27.png" alt="B 056" width="300" height="149" class="pic" /></p>
            <p>
              <input type="checkbox" v-model="checkbox" name="checkbox[]" value="B 056" />
              B 056</p>
            <p>&nbsp;</p></th>
          <th scope="col"><p><img src="Imej/All Design/57-28.png" alt="B 057" width="300" height="149" class="pic" /></p>
            <p>
              <input type="checkbox" v-model="checkbox" name="checkbox[]" value="B 057" />
              B 057</p>
            <p>&nbsp;</p></th>
        </tr>
        <tr valign="top">
          <th scope="col"><p><img src="Imej/All Design/58-29.png" alt="B 058" width="300" height="150" class="pic" /></p>
            <p>
              <input type="checkbox" v-model="checkbox" name=checkbox[]" value="B 058" />
              B 058</p>
            <p>&nbsp;</p></th>
          <th scope="col"><p><img src="Imej/All Design/59-30.png" alt="B 059" width="300" height="149" class="pic" /></p>
            <p>
              <input type="checkbox" v-model="checkbox" name="checkbox[]" value="B 059" />
              B 059</p>
            <p>&nbsp;</p></th>
          <th scope="col"><p><img src="Imej/All Design/60-31.png" alt="B 060" width="300" height="150" class="pic" /></p>
            <p>
              <input type="checkbox" v-model="checkbox" name="checkbox[]" value="B 060" />
              B 060</p>
            <p>&nbsp;</p></th>
        </tr>
        <tr valign="top">
          <th scope="col"><p><img src="Imej/All Design/61-32.png" alt="B 061" width="300" height="150" class="pic" /></p>
            <p>
              <input type="checkbox" v-model="checkbox" name="checkbox[]" value="B 061" />
              B 061</p>
            <p>&nbsp;</p></th>
          <th scope="col"><p><img src="Imej/All Design/62-33.png" alt="B 062" width="300" height="153" class="pic" /></p>
            <p>
              <input type="checkbox" v-model="checkbox" name="checkbox[]" value="B 062" />
              B 062</p>
            <p>&nbsp;</p></th>
          <th scope="col"><p><img src="Imej/All Design/63-34.png" alt="B 063" width="300" height="150" class="pic" /></p>
            <p>
              <input type="checkbox" v-model="checkbox" name="checkbox[]" value="B 063" />
              B 063</p>
            <p>&nbsp;</p></th>
        </tr>
        <tr valign="top">
          <th scope="col"><p><img src="Imej/All Design/64-35.png" alt="B 064" width="300" height="150" class="pic" /></p>
            <p>
              <input type="checkbox" v-model="checkbox" name="checkbox[]" value="B 064" />
              B 064</p>
            <p>&nbsp;</p></th>
          <th scope="col"><p><img src="Imej/All Design/65-36.png" alt="B 065" width="300" height="150" class="pic" /></p>
            <p>
              <input type="checkbox" v-model="checkbox" name="checkbox[]" value="B 065" />
              B 065</p>
            <p>&nbsp;</p></th>
          <th scope="col"><p><img src="Imej/All Design/66-37.png" alt="B 066" width="300" height="150" class="pic" /></p>
            <p>
              <input type="checkbox" v-model="checkbox" name="checkbox[]" value="B 066" />
              B 066</p>
            <p>&nbsp;</p></th>
        </tr>
        <tr valign="top">
          <th scope="col"><p><img src="Imej/All Design/67-38.png" alt="B 067" width="300" height="150" class="pic" /></p>
            <p>
              <input type="checkbox" v-model="checkbox" name="checkbox[]" value="B 067" />
            B 067</p>
          <p>&nbsp;</p></th>
          <th scope="col"><p><img src="Imej/All Design/68-39.png" alt="B 068" width="300" height="150" class="pic" /></p>
            <p>
              <input type="checkbox" v-model="checkbox" name="checkbox[]" value="B 068" />
              B 068</p>
            <p>&nbsp;</p></th>
          <th scope="col"><p><img src="Imej/All Design/69-40.png" alt="B 069" width="300" height="150" class="pic" /></p>
            <p>
              <input type="checkbox" v-model="checkbox" name="checkbox[]" value="B 069" />
              B 069</p>
            <p>&nbsp;</p></th>
        </tr>
        <tr valign="top">
          <th scope="col"><p><img src="Imej/All Design/70-41.png" alt="B 070" width="300" height="150" class="pic" /></p>
            <p>
              <input type="checkbox" v-model="checkbox" name="checkbox[]" value="B 070" />
              B 070</p>
            <p>&nbsp;</p></th>
          <th scope="col"><p><img src="Imej/All Design/71-42.png" alt="B 071" width="300" height="150" class="pic" /></p>
            <p>
              <input type="checkbox" v-model="checkbox" name="checkbox[]" value="B 071" />
              B 071</p>
            <p>&nbsp;</p></th>
          <th scope="col"><p><img src="Imej/All Design/72-43.png" alt="B 072" width="300" height="150" class="pic" /></p>
            <p>
              <input type="checkbox" v-model="checkbox" name="checkbox[]" value="B 072" />
              B 072</p>
            <p>&nbsp;</p></th>
        </tr>
        <tr valign="top">
          <th scope="col"><p><img src="Imej/All Design/73-44.png" alt="B 073" width="300" height="150" class="pic" /></p>
            <p>
              <input type="checkbox" v-model="checkbox" name="checkbox[]" value="B 073" />
              B 073</p>
            <p>&nbsp;</p></th>
          <th scope="col"><p><img src="Imej/All Design/74-45.png" alt="B 074" width="300" height="150" class="pic" /></p>
            <p>
              <input type="checkbox" v-model="checkbox" name="checkbox[]" value="B 074" />
              B 074</p>
            <p>&nbsp;</p></th>
          <th scope="col"><p><img src="Imej/All Design/75-46.png" alt="B 075" width="300" height="150" class="pic" /></p>
            <p>
              <input type="checkbox" v-model="checkbox" name="checkbox[]" value="B 075" />
              B 075</p>
            <p>&nbsp;</p></th>
        </tr>
        <tr valign="top">
          <th scope="col"><p><img src="Imej/All Design/76-47.png" alt="B 076" width="300" height="150" class="pic" /></p>
            <p>
              <input type="checkbox" v-model="checkbox" name="checkbox[]" value="B 076" />
              B 076</p>
            <p>&nbsp;</p></th>
          <th scope="col"><p><img src="Imej/All Design/77-48.png" alt="B 077" width="300" height="150" class="pic" /></p>
            <p>
              <input type="checkbox" v-model="checkbox" name="checkbox[]" value="B 077" />
              B 077</p>
            <p>&nbsp;</p></th>
          <th scope="col"><p><img src="Imej/All Design/78-49.png" alt="B 078" width="300" height="150" class="pic" /></p>
            <p>
              <input type="checkbox" v-model="checkbox" name="checkbox[]" value="B 078" />
              B 078</p>
            <p>&nbsp;</p></th>
        </tr>
        <tr valign="top">
          <th scope="col"><p><img src="Imej/All Design/82-53.png" alt="B 079" width="300" height="150" class="pic" /></p>
            <p>
              <input type="checkbox" v-model="checkbox" name="checkbox[]" value="B 079" />
            B 079</p>
          <p>&nbsp;</p></th>
          <th scope="col"><p><img src="Imej/All Design/80-51.png" alt="B 080" width="300" height="150" class="pic" /></p>
            <p>
              <input type="checkbox" v-model="checkbox" name="checkbox[]" value="B 080" />
              B 080</p>
            <p>&nbsp;</p></th>
          <th scope="col"><p><img src="Imej/All Design/81-52.png" alt="B 081" width="300" height="150" class="pic" /></p>
            <p>
              <input type="checkbox" v-model="checkbox" name="checkbox[]" value="B 081" />
              B 081</p>
            <p>&nbsp;</p></th>
        </tr>
      </table>
      <p>
        <input type="image" class="button" value="Submit!" src="Imej/All Button/NextS3.png" align="middle" width="221" height="60" />
      </p>
    </form>
    <p>&nbsp; </p>
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

new Vue({
  el: '#app',
  data: {
    checkbox: []
  },
  methods: {
    submit(e)
    {
      if (this.checkbox.length == 0)
      {
        e.preventDefault();
        alert('Please select banner DESIGN before proceed.');
      }

    }
  }
})
</script> 


  <div class="footer">
    <p>&nbsp;</p>
  </div>
  <!-- end .container --></div>
</body>
</html>
