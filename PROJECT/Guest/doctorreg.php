<?php
include("../Assets/Connection/Connection.php");
if(isset($_POST['btnsubmit']))
{
	$name=$_POST["txtname"];
	$email=$_POST["txtemail"];
	$contact=$_POST["txtcontact"];
	$place=$_POST["selplace"];
	$address=$_POST["txtaddress"];
	$password=$_POST["txtpassword"];
	$confirmpassword=$_POST["txtconfirm"];
	$photo=$_FILES["filephoto"]["name"];
	$temp=$_FILES["filephoto"]["tmp_name"];
	move_uploaded_file($temp,'../Assets/Images/'.$photo);
	$proof=$_FILES["fileproof"]["name"];
	$temp=$_FILES["fileproof"]["tmp_name"];
	move_uploaded_file($temp,'../Assets/Images/'.$proof);
	$department=$_POST["seldepartment"];
    $insqry="insert into tbl_doctor (doctor_name,doctor_email,doctor_contact,place_id,doctor_address,doctor_password,doctor_photo,doctor_proof,department_id) values('".$name."','".$email."','".$contact."','".$place."','".$address."','".$password."','".$photo."','".$proof."','".$department."')";
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

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <table width="421" border="1">
    <tr>
      <td width="211">Name</td>
      <td width="194"><label for="txtname"></label>
      <input type="text" name="txtname" id="txtname" /></td>
    </tr>
    <tr>
      <td>Email</td>
      <td><label for="txtemail"></label>
      <input type="email" name="txtemail" id="txtemail" required pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.com|in)$"/></td>
    </tr>
    <tr>
      <td>Contact</td>
      <td><label for="txtcontact"></label>
      <input type="text" name="txtcontact" id="txtcontact" pattern="[0-9]{10}" required /></td>
    </tr>
    <tr>
      <td>District</td>
      <td><label for="seldistrict"></label>
        <select name="seldistrict" id="seldistrict"onchange="getPlace(this.value)">
        <option value=" ">select</option>
   <?php
	  $district="select * from tbl_district";
	  $res=$conn->query($district);
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
         </select></td>   </tr>
    <tr>
      <td>Place</td>
      <td><label for="selplace"></label>
        <select name="selplace" id="selplace">
      </select></td>
    </tr>
    <tr>
      <td>Address</td>
      <td><label for="txtaddress"></label>
      <input type="text" name="txtaddress" id="txtaddress" /></td>
    </tr>
    <tr>
      <td>Department</td>
      <td><label for="seldepartment"></label>
        <select name="seldepartment" id="seldepartment">
          <option value=" ">select</option>
   <?php
	  $department="select * from tbl_department";
	  $res1=$conn->query($department);
	  if($res1->num_rows>0)
		 {
			 while($data1=$res1->fetch_assoc())
			 {
				 ?>
                 <option value="<?php echo $data1['department_id'];?>"><?php echo $data1['department_name'];?></option>
                 <?php
			 }
		 }
		 ?>
         </select></td>   </tr>
    <tr>
      </tr>
    <tr>
      <td>Password</td>
      <td><label for="txtpassword"></label>
      <input type="password" name="txtpassword" id="txtpassword" /></td>
    </tr>
    <tr>
      <td>Confirm Password</td>
      <td><label for="txtconfirmpassword"></label>
        <label for="txtconfirm"></label>
        <input type="password" name="txtconfirm" id="txtconfirm" /></td>
    </tr>
    <tr>
      <td>Proof</td>
      <td><label for="fileproof"></label>
      <input type="file" name="fileproof" id="fileproof" /></td>
    </tr>
    <tr>
      <td>Photo</td>
      <td><label for="filephoto"></label>
      <input type="file" name="filephoto" id="filephoto" /></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="btnsubmit" id="btnsubmit" value="Register" /></td>
    </tr>
  </table>
</form>
</body>
<script src="../Assets/JQ/jQuery.js"></script>
<script>
function getPlace(did)
{
	$.ajax({
		url:"../Assets/AJAX/AjaxPlace/AjaxPlace.php?pid="+did,
		success: function(html){
			$("#selplace").html(html);
		}
	});
}
</script>
</html>
