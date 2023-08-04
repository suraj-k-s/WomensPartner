<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$res=0;
if(isset($_POST["btnsubmit"]))
{
	$no1=$_POST["txtnum1"];
	$no2=$_POST["textno2"];
	$res=$no1+$no2;
}
?>
<form id="form1" name="form1" method="post" action="">
  <table width="200" border="1">
    <tr>
      <td><label for="txtnum1"></label>
   
      <input type="text" name="txtnum1" id="txtnum1" /></td>
      <td><label for="textno2"></label>
      
      <input type="text" name="textno2" id="textno2" /></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><p>
        <input type="submit" name="btnsubmit" id="btnsubmit" value="Submit" />
      </p></td>
    </tr>
  </table>
  <?php echo $res?>
</form>
</body>
</html>