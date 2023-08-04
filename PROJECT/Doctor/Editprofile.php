
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
include('head.php');
?>
<?php

if(isset($_POST["btnsubmit"]))
{
	$name=$_POST["txtname"];
	$email=$_POST["txtemail"];
	$contact=$_POST["txtcontact"];
	$address=$_POST["txtareaaddress"];
	
	$qry="update tbl_doctor set doctor_name='".$name."',doctor_email='".$email."',doctor_contact='".$contact."',doctor_address='".$address."' where doctor_id='".$_SESSION['did']."'";
	if($conn->query($qry))
	{
		?><script>alert("saved successfully");</script>
        <?php
	}
	else
	{
		?><script>alert("failed");</script>
        <?php
	}
}
$selqry="select * from tbl_doctor where doctor_id='".$_SESSION['did']."'";
$res=$conn->query($selqry);
$data=$res->fetch_assoc();
?>
<body>
  <div id="tab">
<form id="form1" name="form1" method="post" action="">
  <table width="326" border="1" align="center">
    <tr>
      <td width="175">Name</td>
      <td width="135"><label for="txtname"></label>
      <input type="text" name="txtname" id="txtname" value="<?php echo $data['doctor_name']; ?>"></td>
    </tr>
    <tr>
      <td>Email</td>
      <td><label for="txtemail"></label>
      <input type="text" name="txtemail" id="txtemail"value="<?php echo $data['doctor_email']; ?>"></td>
    </tr>
    <tr>
      <td>Contact</td>
      <td><label for="txtcontact"></label>
      <input type="text" name="txtcontact" id="txtcontact"value="<?php echo $data['doctor_contact']; ?>"></td>
    </tr>
    <tr>
      <td>Address</td>
      <label for="txtareaaddress"></label>
      <td><textarea name="txtareaaddress" id="txtareaaddress"><?php echo $data['doctor_address']; ?></textarea></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="btnsubmit" id="btnsubmit" value="Save" /></td>
    </tr>
  </table>
</form>
</div>
</body>
<?php
include('footer.php');
?>
</html>