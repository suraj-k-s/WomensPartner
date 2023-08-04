

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
	$currentpassword=$_POST["txtcurrent"];
	$newpassword=$_POST["txtnew"];
	$confirmpassword=$_POST["txtconfirm"];
	$qry="update tbl_doctor set doctor_password='".$newpassword."' where doctor_id='".$_SESSION['did']."'";
	$selqry="select * from tbl_doctor where doctor_id='".$_SESSION['did']."'";
	$res=$conn->query($selqry);
	$data=$res->fetch_assoc();
	if($data["doctor_password"]== $currentpassword)
	{
		if($conn->query($qry))
		{
			?><script>alert("success");</script><?php
            }
            else
            {
				?>
            <script>alert("failed");</script><?php
            }
	}
}
				?>
<body>
  <div id="tab">
<form name="form1" method="post" action="">
  <table width="407" border="1" align="center">
    <tr>
      <td width="214">Current Password</td>
      <td width="177"><label for="txtcurrent"></label>
      <input type="password" name="txtcurrent" id="txtcurrent" /></td>
    </tr>
    <tr>
      <td>New Password</td>
      <td><label for="txtnew"></label>
      <input type="password" name="txtnew" id="txtnew" /></td>
    </tr>
    <tr>
      <td>Confirm Password</td>
      <td><label for="txtconfirm"></label>
      <input type="password" name="txtconfirm" id="txtconfirm" /></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="btnsubmit" id="btnsubmit" value="save"></td>
    </tr>
  </table>
</form>
</div>
</body>
<?php
include('footer.php');
?>
</html>