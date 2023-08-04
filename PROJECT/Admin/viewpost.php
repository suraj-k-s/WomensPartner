<?php
session_start();
include("../Assets/Connection/Connection.php");
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

  if(isset($_GET["del"]))
  {
    $del="delete from tbl_post where post_id='".$_GET["del"]."'";
    if($conn->query($del))
    {
      header("location:Complaints.php");
    }
  }


$display="select * from tbl_post where post_id='".$_GET["pid"]."'";
  $res=$conn->query($display);
  if($data=$res->fetch_assoc())
  {
  ?> 
  <table width="600" border="1">
  <tr>
          
          <td align="right"><a href="viewpost.php?del=<?php echo $_GET["pid"] ?>">Remove Post</a></td>
        </tr>
   <tr>
          
      <td width="368"><?php echo $data['post_title']?></td>
    </tr>
    <tr>
      <td><img width="200px" src="../Assets/Images/<?php echo $data['post_file']?>" /></td>
    </tr>
    <tr>
      <td><?php echo $data['post_content']?></td>
    </tr>
</table>
<?php
  }
  else{
    echo "<h1>POST NOT FOUND</h1>";
  }
?>
</body>
<?php include("footer.php");?>
</html>