<?php
include("../Assets/Connection/Connection.php");
if(isset($_POST["btnsubmit"]))
{
	$category=$_POST["txtcat"];
    $ins="insert into tbl_category(category_name)values('".$category."')";
	 if($conn->query($ins))
	 {
		 echo"query inserted";
	 }
	 else
	 {
		 echo"insert failed";
	 }
}
if(isset($_GET['did']))
{
	$delqry="delete from tbl_category where category_id=".$_GET['did'];
	if($conn->query($delqry))
	{
		?>
        <script>
          alert("Deleted");
          window.location="category.php";
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
  <table width="325" height="155" border="1">
    <tr>
      <td width="173">Categoryname</td>
      <td width="136"><label for="txtcat"></label>
      <input type="text" name="txtcat" id="txtcat" /></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="btnsubmit" id="btnsubmit" value="Submit" /></td>
    </tr>
  </table>
</form>
<?php
$sel="select * from tbl_category";
$res=$conn->query($sel);
if($res->num_rows>0)
{
	?>
    <table width="296" border="1">
      <tr>
        <td width="53">Sl.No</td>
        <td width="130">category Name</td>
        <td width="91">Action</td>
      </tr>
    <?php
    $i=0;
	while($data=$res->fetch_assoc())
	{
	
		?>
        <tr>
        <td><?php echo ++$i; ?></td>
        <td><?php echo $data["category_name"];?></td>
        <td><a href="category.php?did=<?php echo $data['category_id'] ?>">Delete</a></td>
  </tr>
  </td>
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