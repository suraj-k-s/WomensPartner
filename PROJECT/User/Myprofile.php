
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
    table{
    background-color: black !important;
    color: white !important;
  }
  </style>
</head>
<?php
include('head.php');
?>
<body>
  <div id="tab" align="center">
<h1>MY PROFILE</h1>
<script src="../Assets/JQ/jQuery.js"></script>
<?php 
include("../Assets/Connection/Connection.php");


if(isset($_GET["del"]))
{
  ?>

    <script>
      if(confirm('Are you sure do you want to delete this account ???'))
      {
         $.ajax({
            url:"../Assets/AJAX/AjaxDelete.php",
            success: function(html){
              if(html.trim()==="true")
              {
                alert("Account Deleted !!!");
                window.location="../Guest/";
              }
              else{
                alert("Failed !!!");
                window.location="MyProfile.php";
              }
            }
          });
      }
      else
      {
        window.location="MyProfile.php";
      }
      </script>

       
  <?php
}

$selqry="select * from tbl_user u inner join tbl_place p on p.place_id=u.place_id inner join tbl_district d on d.district_id=p.district_id where user_id='".$_SESSION['uid']."'";
$res=$conn->query($selqry);

if($data=$res->fetch_assoc())
{
?>
<p>&nbsp;</p>
  <table width="339" border="1">
    <tr>
      <td height="50" colspan="2"><img width="200px" src="../Assets/Images/<?php echo $data['user_photo']?>" /></td>
    </tr>
    <tr>
      <td height="50" width="147">Name</td>
      <td width="176"><?php echo $data['user_name']; ?></td>
    </tr>
    <tr>
      <td height="50">Email</td>
      <td><?php echo $data['user_email']; ?></td>
    </tr>
    <tr>
      <td height="50">Contact</td>
      <td><?php echo $data['user_contact'];?></td>
    </tr>
    <tr>
      <td height="50">Address</td>
      <td><?php echo $data['user_address']; ?></td>
    </tr>
     <tr>
      <td height="50">Place</td>
      <td><?php echo $data['place_name']; ?></td>
    </tr>
    <tr>
      <td height="50">District</td>
      <td><?php echo $data['district_name']; ?></td>
    </tr>
    <tr>
      <td><a href="Editprofile.php">edit profile</a></td>
      
      </td>
      <td>
      <a href="Changepassword.php">change password</a>
      </td>
    </tr>
    <tr>
      <td colspan="2" align="center"><a href="MyProfile.php?del=Delete">Delete</a></td>
      
      </td>
    </tr>
  </table>
<p>&nbsp;</p>
<?php
}
?>
</div>
</body>
<?php
include('footer.php');
?>
</html>