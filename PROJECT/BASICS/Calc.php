<?php
$sum="";
if(isset($_POST['btncalc']))
{
	$num1=$_POST['txtnum1'];
	$num2=$_POST['txtnum2'];
	$sum=$num1+$num2;
}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="592" border="1">
    <tr>
      <td width="209"><label for="txtnum1"></label>
      <input type="text" name="txtnum1" id="txtnum1" /></td>
      <td width="367"><label for="txtnum2"></label>
      <input type="text" name="txtnum2" id="txtnum2" /></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="btncalc" id="txtcalc" value="Submit" /></td>
    </tr>
    <tr>
      <td>Result</td>
      <td>
      <?php
	  echo $sum;
	  ?>
      </td>
    </tr>
  </table>
</form>
</body>
</html>
