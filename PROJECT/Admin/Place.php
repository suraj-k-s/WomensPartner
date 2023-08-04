<?php
$placeedit="";
$eid=0;
include("../Assets/Connection/Connection.php");
if(isset($_POST['btnsubmit']))
{
	$district=$_POST['seldis'];
	$place=$_POST['txtplace'];
	$editid=$_POST['textplaceid'];
$insqry="insert into tbl_place (district_id, place_name) values('".$district."','".$place."')";
	$edit="update tbl_place set place_name='".$place."'where place_id='".$editid."'";
	echo $editid;
	if($editid==0)
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
	else
	{
		if($conn->query($edit))
		{
			echo"Editted";
		}
		else
		{
			echo"failed";
		}
	}
}

if(isset($_GET['eid']))
{
	$eid=$_GET['eid'];
	$editqry="select * from tbl_place where place_id=".$eid;
	$res2=$conn->query($editqry);
	$data1=$res2->fetch_assoc();
	$placeedit=$data1['place_name'];
}
if(isset($_GET['did']))
{
	$delqry="delete from tbl_place where place_id=".$_GET['did'];
	if($conn->query($delqry))
	{
		?>
        <script>
		alert("Deleted");
		window.location="place.php";
		</script>
        <?php
	}
}
?>


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php include("head.php");?>
<body>
<form id="form1" name="form1" method="post" action="place.php">
<input type="hidden" name="textplaceid" id="textplaceid" value="<?php echo $eid ?>"/>
  <table width="399" border="1">
    <tr>
      <td width="110">District</td>
      <td width="273"><label for="txtdis"></label>
        <label for="seldis"></label>
        <select name="seldis" id="seldis">
          <option>select</option>
          <?php
		$dist="select * from tbl_district";
		$res=$conn->query($dist);
		 if($res->num_rows>0)
		 {
			 while($data=$res->fetch_assoc())
			 {
				 ?>
                 <option value="<?php echo $data['district_id'];?>"><?php echo $data['district_name'];?></option>
                 <?php
			 }
		 }
		 ?>
      </select></td>
    </tr>
    <tr>
      <td>Place</td>
      <td><label for="txtplace"></label>
      <input type="text" name="txtplace" id="txtplace" value="<?php echo $placeedit?>" /></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="btnsubmit" id="btnsubmit" value="Submit" /></td>
    </tr>
  </table>
</form>
<?php
$display="select * from tbl_place p inner join tbl_district d on p.district_id=d.district_id";
  $res=$conn->query($display);
  if($res->num_rows>0)
  {
	  ?>
      <table width="415" border="1">
      <tr>
        <td width="43">Sl.No</td>
        <td width="43">place</td>
        <td width="43">district</td>
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
        <td><?php echo $data['place_name']?></td>
        <td><?php echo $data['district_name']?></td>
        <td><a href="Place.php?did=<?php echo $data['place_id'] ?>">Delete</a>&nbsp;
        	<a href="Place.php?eid=<?php echo $data['place_id']?>">edit</a></td>
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