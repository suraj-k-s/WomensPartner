<?php
$res=0;
if(isset($_POST["btncalc"]))
{
	$no1=$_POST["textno1"];
	$no2=$_POST["textno2"];
	$sum=$_POST["textno3"];
	$sub=$_POST["textno4"];
	$mul=$_POST["textno5"];
	$div=$_POST["textno6"];
	$res=$no1+$no2;
	$res=$no1-$no2;
	$res=$no1*$no2;
	$res=$no1/$no2;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
</html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
</body>
<form id="form1" name="form1" method="post" action="">
  <table width="200" border="1">
    <tr>
      <td><label for="textno1"></label>
      <input type="text" name="textno1" id="textno1" /></td>
      <td><label for="textno2"></label>
      <input type="text" name="textno2" id="textno2" /></td>
    </tr>
    <tr>
      <td><label for="textno3"></label>
      <input type="text" name="textno3" id="textno3" /></td>
      <td><label for="textno4"></label>
      <input type="text" name="textno4" id="textno4" /></td>
    </tr>
    <tr>
      <td><label for="textno4"></label>
      <input type="text" name="textno5" id="textno4" /></td>
      <td><label for="textno5"></label>
      <input type="text" name="textno6" id="textno5" /></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="btncalc" id="btncalc" value="Submit" /></td>
    </tr>
  </table>
  <?php echo $res?>
</form>
</body>
</html>