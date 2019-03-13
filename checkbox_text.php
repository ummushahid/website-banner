<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>checkbox</title>
</head>

<body>
<form action="design_step2.php" onsubmit="return checkCheckBoxes(this);">
	<table width="90%" border="0" align="center">
	  <tr>
	    <th scope="col"><input type="checkbox" name="CHECKBOX_1" value="This..." />
This...</th>
	    <th scope="col"><input type="checkbox" name="CHECKBOX_2" value="That..." />
That...</th>
	    <th scope="col"><input type="checkbox" name="CHECKBOX_3" value="...and The Other" />
...and The Other</th>
      </tr>
  </table>
  <p><input type="image" value="Submit!" src="Imej/All Button/mails.png" align="middle" width="30" height="30"></p>
</form>

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
</body>
</html>