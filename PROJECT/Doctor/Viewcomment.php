
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

if(isset($_GET['did']))
{
	$delqry="delete from tbl_comment where comment_id=".$_GET['did'];
	if($conn->query($delqry))
	{
		?>
        <script>
		alert("Deleted");
		window.location="viewcomment.php";
		</script>
        <?php
	}
}
	?>
<body>
  <div id="tab">
<?php
$display="select * from tbl_comment c inner join tbl_user u on u.user_id=c.user_id where post_id='".$_GET["vid"]."'";
  $res=$conn->query($display);
  if($res->num_rows>0)
  {?>
	  <table width="800" border="1" align="center">
      <tr>
    <td>Name</td>
    <td>Comment</td>
    <td>Action</td>
  </tr>
      <?php
 	  while($data=$res->fetch_assoc())
	  {
		 
		  ?> 
          <tr>
    <td><?php echo $data['user_name'];?> </td>
    <td><?php echo $data['comment_content'];?></td>
    <td><a href="viewcomment.php?did=<?php echo $data['comment_id'] ?>">Delete</a></td>
  </tr>
  
  <?php
	  }
	  ?>
</table>
<?php
  }
  ?>
  </div>
</body>
<?php
include('footer.php');
?>
</html>
