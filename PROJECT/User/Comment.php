

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
session_start();
if(isset($_GET['pid']))
{
	$_SESSION['pid']=$_GET['pid'];
}
include("../Assets/Connection/Connection.php");
if(isset($_POST['btnsubmit']))
{
	$content=$_POST['txtareacomment'];
	
$insqry="insert into tbl_comment(comment_content,comment_datetime,user_id,post_id)values ('".$content."',CURRENT_TIMESTAMP(),'".$_SESSION['uid']."','".$_GET['pid']."')";
if($conn->query($insqry))
{
	?>
        <script>alert("Inserted");
        </script><?php
}
else
{
	?>
        <script>alert("Failed");
        </script><?php
}
}
if(isset($_GET['did']))
{
	$delqry="delete from tbl_comment where comment_id=".$_GET['did'];
	if($conn->query($delqry))
	{
		?>
        <script>
		alert("<?php echo $delqry?>");
		window.location="comment.php?pid=<?php echo $_SESSION['pid']?>";
		</script>
        <?php
	}
}
	?>
<body>
<div id="tab" align="center">
<form id="form1" name="form1" method="post" action="">
  <table width="600" border="1">
    <tr>
      <td width="172">Comment</td>
      <td width="265"><label for="txtareacomment"></label>
      <textarea name="txtareacomment" id="txtareacomment" cols="45" rows="5"></textarea>        <label for="txtcomment"></label></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="btnsubmit" id="btnsubmit" value="Submit" /></td>
    </tr>
    </table>
</form>
<?php
$display="select * from tbl_comment c inner join tbl_user u on u.user_id=c.user_id where post_id='".$_GET['pid']."'";
  $res=$conn->query($display);
  if($res->num_rows>0)
  {
	  ?>
      <?php
  }
  ?>

  <table width="600" border="1">
    <tr>
      <td>Name</td>
      <td>Comment</td>
      <td>DateTime</td>
      <td>Action</td>
    </tr>
    <?php
	  $i=0;
	  while($data=$res->fetch_assoc())
	  {
		  ?>     
      <tr>
       </tr>
    <tr>
    
      <td><?php echo $data['user_name']; ?></td>
      <td><?php echo $data['comment_content']; ?></td>
      <td><?php echo $data['comment_datetime'];?></td>
      <td>
      <?php
	  if($data['user_id']==$_SESSION['uid'])
	  {
		  ?>
      <a href="comment.php?did=<?php echo $data['comment_id'] ?>">Delete</a>
      <?php
	  }
	  ?>
    </tr>
    <?php
	  }
	  ?>
  </table>
</form>
</div>
</body>
<?php
include('footer.php');
?>
</html>