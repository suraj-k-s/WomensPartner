<?php
include("../Assets/Connection/Connection.php");
session_start();
if(isset($_GET["aid"]))
{
    $accept="update tbl_user set user_vstatus=1 where user_id=".$_GET['aid'];
	if($conn->query($accept))
	{
		?>
        <script>alert("Accepted");
        window.location="Userverification.php";
        </script><?php
	}
	else
	{
	?><script>alert("Accept Failed");</script><?php
	}
}
if(isset($_GET["rid"]))
{
    $accept="update tbl_user set user_vstatus=2 where user_id=".$_GET['rid'];
	if($conn->query($accept))
	{
		?>
        <script>alert("Rejected");
        window.location="Userverification.php";
        </script><?php
	}
	else
	{
	?><script>alert("Reject Failed");</script><?php
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
<?php
$sel="select * from tbl_user where user_vstatus=0";
$res=$conn->query($sel);
if($res->num_rows>0)
{
	?>
    <form id="form1" name="form1" method="post" action="">
    <h1>NEW USERS</h1>
<table width="800" border="2">
  <tr>
    <td width="60">SlNo</td>
    <td width="60">Name</td>
    <td width="60">Email</td>
    <td width="60">Contact</td>
    <td width="60">Proof</td>
    <td width="60">Action</td>
  </tr>
  <?php
  $i=0;
    while($data=$res->fetch_assoc())
  {
	  ?>
  <tr>
    <td><?php echo ++$i; ?></td>
        <td><?php echo $data['user_name']; ?></td>
        <td><?php echo $data['user_email']; ?></td>
    <td><?php echo $data['user_contact']; ?></td>
    <td><a href="../Assets/Images/<?php echo $data['user_proof']; ?>" target="_blank">proof</a></td>
    <td align="center">
        <a href="Userverification.php?aid=<?php echo $data["user_id"];?>" ><input type="button" name="btnaccept" id="btnaccept" value="Accept" /></a>
         <a href="Userverification.php?rid=<?php echo $data["user_id"];?>"><input type="button" name="btnreject" id="btnreject" value="Reject" /></a>
      </p>
 
    
    </td>
  </tr>
  <?php
  }?>
</table>
</form>
<?php 
}
else{
	?>
    <h2>NO UNVERIFIED DATA</h2>
    <?php 
}
?>
<?php
$sel="select * from tbl_user where user_vstatus=1";
$res1=$conn->query($sel);
if($res1->num_rows>0)
{

	?>

<form id="form2" name="form2" method="post" action="">
  
  <h2>ACCEPTED USERS</h2>
  <table width="700" border="1">
    <tr>
      <td width="33">SlNo</td>
      <td width="33">Name</td>
      <td width="33">Email</td>
      <td width="37">Contact</td>
      <td width="36">Proof</td>
    </tr>
     <?php
  $j=0;
    while($data1=$res1->fetch_assoc())
  {
	  ?>
	      <tr>
      <td height="70"><?php echo ++$j ?></td>
      <td><?php echo $data1['user_name']; ?></td>
      <td><?php echo $data1['user_email']; ?></td>
      <td><?php echo $data1['user_contact'];?></td>
      <td><a href="../Assets/Images/<?php echo $data1['user_proof']; ?>" target="_blank">proof</a></td>
    </tr>
    <?php
  }
  ?>
  </table>
  <?php
}
else
{
	
?>
<h2>NO ACCEPTED USERS</h2>
<?php
}
?>
  </form>
  <p>&nbsp;</p>
  <form>
   <?php
      $sel="select * from tbl_user where user_vstatus=2";
      $res2=$conn->query($sel);
      if($res2->num_rows>0)
  {
	?>
    <h2>REJECTED USERS</h2>
<table width="755" border="2">
  <tr>
    <td width="152">SlNo</td>
    <td width="152">Name</td>
    <td width="152">Email</td>
    <td width="152">Contact</td>
    <td width="111">Proof</td>
    </tr> 
	<?php
    $k=0;
    while($data2=$res2->fetch_assoc())
  {
	  ?>
<tr>
    <td height="31"><?php echo ++$k ?></td>
    <td><?php echo $data2['user_name']; ?></td>
    <td><?php echo $data2['user_email']; ?></td>
    <td><?php echo $data2['user_contact']; ?></td>
    <td><?php echo $data2['user_proof']; ?></td>
    </tr>
    <?php
  }
  ?>
</table>
<?php
  }
  else
  {?>
  <h2>NO REJECTED USERS</h2>
  <?php
  }
  ?>
</form>
<p>
</p>
</body>
<?php include("footer.php");?>
</html>