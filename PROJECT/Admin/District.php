<?php
include("../Assets/Connection/Connection.php");
if(isset($_POST["btnsubmit"]))
{
	$districtname=$_POST["txtdist"];
	$ins="insert into tbl_district(district_name)values('".$districtname."')";
	if($conn->query($ins))
	{
		echo "inserted";
	}
	else
	{
		echo "failed";
	}
}
if(isset($_GET['did']))
{
	$delqry="delete from tbl_district where district_id=".$_GET['did'];
	if($conn->query($delqry))
	{
		?>
        <script>
		alert("Deleted");
		window.location="district.php";
		</script>
        <?php
	}
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php include("head.php");?>
<body>
<form id="form1" name="form1" method="post" action="">
  <table width="302" border="1">
    <tr>
      <td width="168">District</td>
      <td width="118"><label for="txtdist"></label>
      <input type="text" name="txtdist" id="txtdist" /></td>
    </tr>
    <tr>
      <td height="51" colspan="2" align="center"><input type="submit" name="btnsubmit" id="btnsubmit" value="Submit" /></td>
    </tr>
  </table>
</form>
<?php 
$sel="select * from tbl_district";
$res=$conn->query($sel);
if($res->num_rows>0)
{
	?>
    <table width="296" border="1">
      <tr>
        <td width="53">Sl.No</td>
        <td width="130">DIstrict Name</td>
        <td width="91">Action</td>
      </tr>
    <?php
    $i=0;
	while($data=$res->fetch_assoc())
	{
		?>
        <tr>
        <td><?php echo ++$i; ?></td>
        <td><?php echo $data['district_name']; ?></td>
        <td><a href="district.php?did=<?php echo $data['district_id'] ?>">Delete</a>&nbsp;
        <td>&nbsp;</td>
      </tr>
    
    <?php
	}
	?>
    </table>
    <?php
}
?>  
</body>
<?php include("footer.php");?>
</html>