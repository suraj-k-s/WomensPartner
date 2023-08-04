<?php
include("../Assets/Connection/Connection.php");
session_start();
if(isset($_POST['btnsubmit']))
{
$complaint=$_POST['txtareareply'];
$editid=$_POST['txtid'];
$edit="update tbl_complaint set complaint_reply='".$complaint."', complaint_status = 1 where complaint_id='".$editid."'";
		if($conn->query($edit))
		{
			echo"Edited";
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
<?php include("head.php");?>
<body>
<?php
$check="select * from tbl_complaint";
$result=$conn->query($check);
$row=$result->fetch_assoc();
if($row['doctor_id']==0)
{
$display="select * from tbl_complaint";
}
else{
  $display="select * from tbl_complaint c inner join tbl_doctor d on c.doctor_id=d.doctor_id";
}

  $res=$conn->query($display);
  if($res->num_rows>0)
  {?>
	  <table width="800" border="1">
      <tr>
    <td>SlNo</td>
    <td> Title</td>
    <td>Content</td>
    <td>Reply</td>
    <td>Remark</td>
  </tr>
      <?php
      $i=0;
 	  while($data=$res->fetch_assoc())
	  {
		  ?>
          <tr>
            <td> <?php echo ++$i?></td>
    <td><?php echo $data['complaint_title'];?> </td>
    <td><?php echo $data['complaint_content'];?></td>
    <td>
      <?php 
      if($data['complaint_status']==0)
      {
        ?>
        <form action="" method="post">
        <textarea name="txtareareply" id="txtareareply" cols="45" rows="5"></textarea>
        <input type="hidden" name="txtid" id="txtid" value="<?php echo $data['complaint_id']?>"/>
       <input type="submit" name="btnsubmit" id="btnsubmit" value="Post Reply"/></td>
      </form>
      <?php
      }
      else{
        echo $data['complaint_reply'];
      }
      ?>
      </td>
      <td>
        <?php
        if($data['doctor_id']==0)
        {
          ?>
          <a href="ViewPost.php?pid=<?php echo $data['post_id']?>">View Post</a>
          <?php
        }
        else{
          echo $data['doctor_name'];
        }
        ?>
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
