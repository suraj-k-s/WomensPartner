<?php
include("../Assets/Connection/Connection.php");
if(isset($_POST['btnsubmit']))
{
	$subcategory=$_POST['selsubcategory'];
	$information=$_POST['txtareainformation'];
	$insqry="insert into tbl_information(subcategory_id,information_details) values('".$subcategory."','".$information."')";

	if($conn->query($insqry))
			{
			?><script>alert("Inserted");</script><?php
			}
			else
			{
				?><script>alert("Failed");</script><?php
			}
}
	if(isset($_GET['did']))
{
	$delqry="delete from tbl_information where information_id=".$_GET['did'];
	if($conn->query($delqry))
	{
		?>
        <script>
		alert("Deleted");
		window.location="information.php";
		</script>
        <?php
	}
	else
	{
		?>
        <script>
		alert("Failed");
		window.location="information.php";
		</script>
        <?php
	}
}
?>
<!DOCTYPE html PUBLIC "-//
W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php include("head.php");?>
<body>
<form id="form1" name="form1" method="post" action="">
  <table width="600" border="1">
    <tr>
      <td width="206">Category</td>
      <td width="146"><label for="selcategory"></label>
        <select name="selcategory" id="selcategory"  onchange="getSubcategory(this.value)"> 
          <option value="">Select Category</option>
		    <?php
			$dist="select * from tbl_category";
			$res=$conn->query($dist);
			 if($res->num_rows>0)
			 {
				 while($data=$res->fetch_assoc())
				 {
					 ?>
					 <option value="<?php echo $data['category_id'];?>"><?php echo $data['category_name'];?></option>
				 <?php 
				 }
			 }
			 ?>
      </select></td>
    </tr>
    <tr>
      <td>Sub Category</td>
      <td><label></label>
        <select name="selsubcategory" id="selsubcategory" >
          <option>Select Sub-Category</Select></option>
      </select></td>
    </tr>
    <tr>
      <td>Information</td>
      <td><label for="txtareainformation"></label>
      <textarea name="txtareainformation" id="txtareainformation" cols="45" rows="5"></textarea></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="btnsubmit" id="btnsubmit" value="Submit" /></td>
    </tr>
  </table>
  <p>&nbsp;</p>
</form>
<?php
$info="select * from tbl_information i inner join tbl_subcategory s on s.subcategory_id=i.subcategory_id inner join tbl_category c on c.category_id=s.category_id";
$res1=$conn->query($info);
  if($res1->num_rows>0)
  {
	  ?>
<table width="900" border="1">
  <tr>
    <td width="43" height="34">SlNo</td>
    <td width="130">Category Name</td>
    <td width="160">Subcategory Name</td>
    <td><p>Information Details</p></td>
    <td width="80">Gallery</td>
    <td width="80">Action</td>
  </tr>
   <?php 
	  $i=0;
	  while($data1=$res1->fetch_assoc())
	  {
		  ?>
    <tr>
    <td><?php echo ++$i?></td>
    <td><?php echo $data1['category_name']?></td>
    <td><?php echo $data1['subcategory_name']?></td>
    <td><?php echo $data1['information_details']?></td></td>
    <td><a href="gallery.php?id=<?php echo $data1['information_id']?>">Gallery</a></td>
    <td><a href="information.php?did=<?php echo $data1['information_id']?>">Delete</a></td>
  </tr>
  <?php
	  }
	  ?>
</table>
<?Php
  }
  ?>
<p>&nbsp;</p>
</body>
<?php include("footer.php");?>
<script src="../Assets/JQ/jQuery.js"></script>
<script>
function getSubcategory(cid)
{
	$.ajax({
		url:"../Assets/AJAX/AjaxSubcategory/AjaxSubcategory.php?id="+cid,
		success: function(html){
			$("#selsubcategory").html(html);
		}
	});
}
</script>
</html>