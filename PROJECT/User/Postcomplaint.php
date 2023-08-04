
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
if(isset($_POST['btnsubmit']))
{
	$title=$_POST['txtcomplainttitle'];
	$content=$_POST['txtareacontent'];
$insqry="insert into tbl_complaint (complaint_title,complaint_content,complaint_datetime,user_id,post_id) values('".$title."','".$content."',CURRENT_TIMESTAMP(),'".$_SESSION['uid']."','".$_GET['pid']."')";
		if($conn->query($insqry))
			{
				?>
        <script>alert("Complaint Posted");</script>
        <?php
			}
			else
			{
				?>
        <script>alert("failed");</script>
        <?php
      }
    }
?>
<body>
<div id="tab" align="center">
<form id="form1" name="form1" method="post" action="">
  <table width="408" border="1">
    <tr>
      <td width="176">Complaint Title</td>
      <td width="216"><label for="txtcomplainttitle"></label>
      <input type="text" name="txtcomplainttitle" id="txtcomplainttitle" /></td>
      </tr>
    <tr>
      <td>Content</td>
      <td><label for="txtareacontent"></label>
      <textarea name="txtareacontent" id="txtareacontent" cols="45" rows="5"></textarea></td>
    </tr>
      <td colspan="2" align="center"><input type="submit" name="btnsubmit" id="btnsubmit" value="Post Complaint" /></td>
    </tr>
    </table>
    </form>
    </div>
</body>
<?php
include('footer.php');
?>
</html>