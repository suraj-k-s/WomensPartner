<?php
$subcategoryedit="";
$eid=0;
include("../Assets/Connection/Connection.php");
if(isset($_POST["btnsubmit"]))
{
	$category=$_POST["selcategory"];
	$subcategory=$_POST["txtsubcategory"];
	$editid=$_POST['txtsubid'];
	$insqry="insert into tbl_subcategory(category_id,subcategory_name)values('".$category."','".$subcategory."')";
	$edit="update tbl_subcategory set subcategory_name='".$subcategory."' where subcategory_id='".$editid."'";
	if($editid==0)
	{
		if($conn->query($insqry))
		{
			echo"inserted";
		}
		else
		{
			echo"failed";
		}
	}
	else
	{
		if($conn->query($edit))
		{
			echo"edited";
		}
		else
		{
			echo"failed";
		}
	}
}
if(isset($_GET['did']))
{
	$delqry="delete from tbl_subcategory where subcategory_id=".$_GET['did'];
	if($conn->query($delqry))
	{
		?>
        <script>
		alert("Deleted");
		window.location="subcategory.php";
		</script>
        <?php
	}
}

if(isset($_GET['eid'])){
	$eid=$_GET['eid'];
	$editqry="select * from tbl_subcategory where subcategory_id=".$eid;
	$res2=$conn->query($editqry);
	$data=$res2->fetch_assoc();
	$subcategoryedit=$data['subcategory_name'];
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
<form id="form1" name="form1" method="post" action="Subcategory.php">
<input type="hidden" name="txtsubid" id="txtsubid" value="<?php echo $eid?>" />
  <table width="465" border="1">
    <tr>
      <td width="182">Category</td>
      <td width="267"><label for="selcategory"></label>
        <select name="selcategory" id="selcategory">
          <option>select</option>
          <?php
		  $category="select * from tbl_category";
		  $res1=$conn->query($category);
		  if($res1->num_rows>0)
		  {
			  while($data1=$res1->fetch_assoc())
			  {
				  ?>
                  <option value="<?php echo $data1['category_id']?>"><?php echo $data1['category_name'];?>
				  </option>
				 <?php
			  }
		  }
		  ?>
      </select></td>
    </tr>
    <tr> 
    <td height="44">Subcategory</td>
      <td><label for="txtsubcategory"></label>
      <input type="text" name="txtsubcategory" id="txtsubcategory" value="<?php echo $subcategoryedit?>" /></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="btnsubmit" id="btnsubmit" value="Submit" /></td>
    </tr>
  </table>
</form>
 <?php
 $display="select * from tbl_subcategory s inner join tbl_category c on s.category_id=c.category_id";
  $res=$conn->query($display);
  if($res->num_rows>0)
  {
	  ?>
      <table width="415" border="1">
  <tr>
    <td width="43">Sl.No</td>
    <td width="43">subcategory</td>
    <td width="43">category</td>
    <td width="258">action</td>
  </tr>
      <?php
	  $i=0;
	  while($data=$res->fetch_assoc())
	  {
		  ?>     
  <tr>
    <td>
    <?php echo ++$i?>
    </td>
    <td><?php echo $data['subcategory_name']?></td>
    <td><?php echo $data['category_name']?></td>
    <td><a href="Subcategory.php?did=<?php echo $data['subcategory_id'] ?>">Delete</a>&nbsp;<a href="Subcategory.php?eid=<?php echo $data['subcategory_id'] ?>">Edit</a></td>
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
  