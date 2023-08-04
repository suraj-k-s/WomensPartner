
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

include("../Assets/Connection/Connection.php");
if(isset($_POST["btnsubmit"]))
{
	$name=$_POST["txtname"];
	$email=$_POST["txtemail"];
	$contact=$_POST["txtcontact"];
	$address=$_POST["txtaddress"];
	
	$qry="update tbl_user set user_name='".$name."',user_email='".$email."',user_contact='".$contact."',user_address='".		$address."' where user_id='".$_SESSION['uid']."'";
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
$selqry="select * from tbl_user where user_id='".$_SESSION['uid']."'";
$res=$conn->query($selqry);
$data=$res->fetch_assoc();

?>
<body>
<div id="tab" align="center">
<form id="form1" name="form1" method="post" action="">
<table width="462" border="1">
  <tr>
    <td width="211">Name</td>
    <td width="273"><label for="txtname"></label>
    <input type="text" name="txtname" id="txtname" value="<?php echo $data['user_name']; ?>"></td>
    </tr>
  <tr>
    <td>Email</td>
    <td><label for="txtemail"></label>
    <input type="text" name="txtemail" id="txtemail" value="<?php echo $data['user_email']; ?>"></td>
  </tr>
  <tr>
    <td>Contact</td>
    <td><label for="txtcontact"></label>
      <input type="text" name="txtcontact" id="txtcontact" value="<?php echo $data['user_contact']; ?>"></td>
  </tr>
  <tr>
    <td>Address</td>
      <label for="txtaddress"></label>
      <td><textarea name="txtaddress"><?php echo $data['user_address']; ?></textarea></td>
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
