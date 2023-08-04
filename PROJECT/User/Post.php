
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
include('head.php');
?>
<?php
include("../Assets/Connection/Connection.php");
	?>

<body>
<div id="tab" align="center">
<?php
$display="select * from tbl_post";
  $res=$conn->query($display);
  if($res->num_rows>0)
  {
 	  while($data=$res->fetch_assoc())
	  {
		  ?> 
<table width="600" border="1">
 <tr>
        
    <td width="368"><?php echo $data['post_title']?></td>
  </tr>
  <tr>
    <td><img width="200px" src="../Assets/Images/<?php echo $data['post_file']?>" /></td>
  </tr>
  <tr>
    <td><?php echo $data['post_content']?></td>
  </tr>
   <tr>
    <td><a href="Comment.php?pid=<?php echo $data['post_id']?>">Comment</a></td>
    <a href="Postcomplaint.php?pid=<?php echo $data['post_id']?>">Complaint</a>
  </tr>
</table>
<?php
	  }
  }
  ?>
</div>
</body>
<?php
include('footer.php');
?>
</html>