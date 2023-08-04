
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
$i=0;
include("../Assets/Connection/Connection.php");
session_start();
if(isset($_GET['did']))
{
	$delqry="delete from tbl_complaint where complaint_id=".$_GET['did'];
	if($conn->query($delqry))
	{
		?>
        <script>
		alert("Deleted");
		window.location="mycomplaint.php";
		</script>
        <?php
	}
}
	?>
<body>
    <div id="tab" align="center">
      <?php
            $display="select * from tbl_complaint c inner join tbl_user u on u.user_id=c.user_id where c.user_id='".$_SESSION['uid']."'";
              $res=$conn->query($display);
            if($res->num_rows>0)
              { 
                ?>
                <table border='1'>
                  <tr>
                    <th>SlNo</th>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Datetime</th>
                    <th>Reply</th>
              </tr>
                  <?php
          while($data=$res->fetch_assoc())
          {
          
            ?>
            <tr>
              <td><?php echo ++$i?></td>
            <td><?php echo $data['complaint_title'];?> </td> 
            <td><?php echo $data['complaint_content'];?> </td>
            <td><?php echo $data['complaint_datetime'];?> </td>
          <td> </td>
        
          <?php
          }
          ?>
          </table>
        <?php
        }
        ?>
    </div>
    <?php
      include('footer.php');
      ?>
</body>


</html>