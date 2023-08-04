
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
	$delqry="delete from tbl_post where post_id=".$_GET['did'];
	if($conn->query($delqry))
	{
		?>
        <script>
		alert("Deleted");
		window.location="mypost.php";
		</script>
        <?php
	}
}
	?>
<body>
  <div id="tab">
<?php
$display="select * from tbl_post where doctor_id='".$_SESSION['did']."'";
  $res=$conn->query($display);
  if($res->num_rows>0)
  {
 	  while($data=$res->fetch_assoc())
	  {
		  ?>
          <table width="600" border="1" align="center">
 <tr>
        
    <td width="368"><?php echo $data['post_title']?></td>
  </tr>
  <tr>
    <td><img width="200px" src="../Assets/Images/<?php echo $data['post_file']?>" /></td>
  </tr>
  <tr>
    <td><?php echo $data['post_content']?></td>
  </tr>
  <tr>
    <td><a href="Mypost.php?did=<?php echo $data['post_id'] ?>">Delete</a>
    <a href="viewcomment.php?vid=<?php echo $data['post_id'] ?>">viewcomment</a></td>
</tr>
</table>
<?php
	  }
  }
  ?> 
  </div>
</body>
<?php
include('footer.php');
?>
</html>