<?php
session_start();
include("../Assets/Connection/Connection.php");
if(isset($_GET['id']))
{
$_SESSION['iid']=$_GET['id'];
}
if(isset($_POST['btnsubmit']))
{
	$photos=$_FILES['filechoose'];
    for ($i = 0; $i < count($photos['name']); $i++) {
        $photoName = $photos['name'][$i];
        $photoTmpName = $photos['tmp_name'][$i];
        move_uploaded_file($photoTmpName, '../Assets/Images/'.$photoName);
        $query = "INSERT INTO tbl_gallery (gallery_image,information_id) VALUES ('".$photoName."','".$_GET['id']."')";
	      $conn->query($query);
    }
}
if(isset($_GET['did']))
{
	$delqry="delete from tbl_gallery where gallery_id=".$_GET['did'];
	if($conn->query($delqry))
	{
		?>
        <script>
		alert("Deleted");
		window.location="gallery.php?id=<?php echo $_SESSION['iid']?> ";
		</script>
        <?php
	}
	else
	{
		?>
        <script>
		alert("Failed");
		window.location="gallery.php";
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
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <table width="478" border="1">
    <tr>
      <td width="176">Image</td>
      <td width="286"><label for="filechoose"></label>
      <input type="file" name="filechoose[]" id="filechoose" multiple/></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="btnsubmit" id="btnsubmit" value="Submit" /></td>
    </tr>
  </table>
  <p>&nbsp;</p>
</form>
<?php
$data="select * from tbl_gallery where information_id=".$_GET['id'];
$res=$conn->query($data);
  if($res->num_rows>0)
  {
	  ?>
<table width="500" border="1"d
  <tr>
    <td>SlNo</td>
    <td>Image</td>
    <td>Action</td>
  </tr>
   <?php 
	  $i=0;
	  while($data=$res->fetch_assoc())
	  {
		  ?>
  <tr>
    <td><?php echo ++$i?></td>
    <td><img width="200px" src="../Assets/Images/<?php echo $data['gallery_image'];?>"/> </td>
    <td><a href="gallery.php?did=<?php echo $data['gallery_id']?>">Delete</a></td>
  </tr><?php
  }
  ?>
</table><?php
  }
  ?>
</body>
<?php include("footer.php");?>
</html>
