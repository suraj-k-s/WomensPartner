
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

if(isset($_POST['btnsubmit']))
{
$title=$_POST['txttitle'];
$content=$_POST['txtareacontent'];
$file=$_FILES["filechoose"]["name"];
	$temp=$_FILES["filechoose"]["tmp_name"];
	move_uploaded_file($temp,'../Assets/Images/'.$file);
echo $insqry="insert into tbl_post(post_title,post_content,post_file,post_datetime, doctor_id) values ('".$title."','".$content."','".$file."',CURRENT_TIMESTAMP(),'".$_SESSION['did']."')";
if($conn->query($insqry))
		{
			echo"inserted";
		}
		else
		{
			echo"failed";
		}
}
	?>
  <body>
  <div id="tab" align="center">
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <table width="391" border="1">
    <tr>
      <td width="141">Title</td>
      <td width="234"><label for="txttitle"></label>
      <input type="text" name="txttitle" id="txttitle" /></td>
    </tr>
    <tr>
      <td>Content</td>
      <td><label for="txtareacontent"></label>
      <textarea name="txtareacontent" id="txtareacontent" cols="45" rows="5"></textarea></td>
    </tr>
    <tr>
      <td>File</td>
      <td><label for="filechoose"></label>
      <input type="file" name="filechoose" id="filechoose" /></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="btnsubmit" id="btnsubmit" value="Add Post" /></td>
    </tr>
  </table>
</form>
</body>
<?php
include('footer.php');
?>
</html>