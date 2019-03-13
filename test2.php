<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>test</title>

<style>
.pic{
	width: 150px;
	height: 50px;
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
	width: 300px;
	text-align: center;
	position: absolute;
}

</style>

</head>

<body>
<div align="center">
  <p>hello world</p>
  <form id="form1" name="form1" method="post" action="">
    <table width="50%" border="0" align="center">
      <tr align="center" valign="middle">
        <th scope="col">
            <img class="pic" src="Imej/All Image/Step2.png" alt="Step 2">
    <img class="picbig" src="Imej/All Image/Step2.png" alt="Step 2">&nbsp;</th>
    
        <th scope="col">
        <img class="pic" src="Imej/All Image/Step1.png" alt="Step 1">
    <img class="picbig" src="Imej/All Image/Step1.png" alt="Step 1">&nbsp;</th>
    
        <th scope="col">
        <img class="pic" src="Imej/All Image/Step3.png" alt="Step 3">
    <img class="picbig" src="Imej/All Image/Step3.png" alt="Step 3">&nbsp;</th>
    
      </tr>
      <tr align="center" valign="middle">
        <th scope="col"> <img class="pic" src="Imej/All Image/Step2.png" alt="Step 2" /> <img class="picbig" src="Imej/All Image/Step2.png" alt="Step 2" />&nbsp;</th>
        <th scope="col"> <img class="pic" src="Imej/All Image/Step1.png" alt="Step 1" /> <img class="picbig" src="Imej/All Image/Step1.png" alt="Step 1" />&nbsp;</th>
        <th scope="col"> <img class="pic" src="Imej/All Image/Step3.png" alt="Step 3" /> <img class="picbig" src="Imej/All Image/Step3.png" alt="Step 3" />&nbsp;</th>
      </tr>
      <tr align="center" valign="middle">
        <th scope="col"> <img class="pic" src="Imej/All Image/Step2.png" alt="Step 2" /> <img class="picbig" src="Imej/All Image/Step2.png" alt="Step 2" />&nbsp;</th>
        <th scope="col"> <img class="pic" src="Imej/All Image/Step1.png" alt="Step 1" /> <img class="picbig" src="Imej/All Image/Step1.png" alt="Step 1" />&nbsp;</th>
        <th scope="col"> <img class="pic" src="Imej/All Image/Step3.png" alt="Step 3" /> <img class="picbig" src="Imej/All Image/Step3.png" alt="Step 3" />&nbsp;</th>
      </tr>
    </table>
    <br />
  </form>
</div>

</body>
</html>