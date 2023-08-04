
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
</html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$no1=0;
$no2=0;
$res="";
if(isset($_POST["btnadd"]))
{
	$no1=$_POST["txtno1"];
	$no2=$_POST["txtno2"];
	$res=$no1+$no2;
}
if(isset($_POST["btnsub"]))
{
	$no1=$_POST["txtno1"];
	$no2=$_POST["txtno2"];
	$res=$no1-$no2;
}
if(isset($_POST["btnmul"]))
{
	$no1=$_POST["txtno1"];
	$no2=$_POST["txtno2"];
	$res=$no1*$no2;
}
if(isset($_POST["btndiv"]))
{
	$no1=$_POST["txtno1"];
	$no2=$_POST["txtno2"];
	$res=$no1/$no2;
}
?>
<form id="form1" name="form1" method="post" action="">
  <table width="200" border="1">
    <tr>
      <td><label for="txtno1"></label>
      <input type="text" name="txtno1" id="txtno1" required="required" /></td>
      <td><label for="txtno2"></label>
      <input type="text" name="txtno2" id="txtno2" required="required" /></td>
    </tr>
    <tr>
      <td><input type="submit" name="btnadd" id="btnadd" value="+" /></td>
      <td><input type="submit" name="btnsub" id="btnsub" value="-" /></td>
    </tr>
    <tr>
      <td><input type="submit" name="btnmul" id="btnmul" value="*" /></td>
      <td><input type="submit" name="btndiv" id="btndiv" value="/" /></td>
    </tr>
    <tr>
      <td colspan="2" align="center">Result<?php echo $res?></td>
    </tr>
  </table>
</form>
</body>
</html>