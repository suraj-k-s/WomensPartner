<?php
include("../Assets/Connection/Connection.php");
if(isset($_POST['btnsubmit']))
{
	$departmentname=$_POST['txtdepartmentname'];
	$insqry="insert into tbl_department(department_name) values('".$departmentname."')";
	{
		if($conn->query($insqry))
		{
				echo "Inserted";
		}
			else
			{
				echo "failed";
			}
			
	}
}
	if(isset($_GET['did']))
	{
		$delqry="delete from tbl_department where department_id=".$_GET['did'];
		if($conn->query($delqry))
		{
		?>
        <script>
		alert("Deleted");
		window.location="department.php";
		</script>
        <?php
		}
		else
		{
			?>
        <script>
		alert("Failed");
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
  <table width="330" border="1">
    <tr>
      <td width="206">Department Name</td>
      <td width="108"><label for="txtdepartmentname"></label>
      <input type="text" name="txtdepartmentname" id="txtdepartmentname" /></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="btnsubmit" id="btnsubmit" value="Submit" /></td>
    </tr>
  </table>
  
    
</form>
<?php
$sel="select * from tbl_department";
$res=$conn->query($sel);
if($res->num_rows>0)
{
	?>
    <table width="296" border="1">
      <tr>
        <td width="53">Sl.No</td>
        <td width="130">department Name</td>
        <td width="91">Action</td>
      </tr>
    <?php
    $i=0;
	while($data=$res->fetch_assoc())
	{
	
		?>
        <tr>
        <td><?php echo ++$i; ?></td>
        <td><?php echo $data["department_name"];?></td>
        <td><a href="department.php?did=<?php echo $data['department_id'] ?>">Delete</a></td>
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

    
