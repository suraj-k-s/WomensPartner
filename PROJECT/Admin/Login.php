<?php
include("../Assets/Connection/Connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Women's Partner - LoginDetails</title>
</head>
<?php include("head.php");?>
<body>
<?php
$display="select * from tbl_login l inner join tbl_user u on l.user_id=u.user_id";
  $res=$conn->query($display);
  if($res->num_rows>0)
  {
	  ?>
      <table width="415" border="1">
      <tr>
        <td width="43">Sl.No</td>
        <td width="43">user name</td>
        <td width="43">date</td>
        <td width="43">status</td>
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
        <td><?php echo $data['user_name']?></td>
        <td><?php echo $data['login_date']?></td>
        <td>
            <?php
            if($data['login_status']==0)
            {
                echo"Logged Out";
            }
            else{
                echo"Logged In";
            }
        ?></td></tr>
        <?php
      }
    }
    ?>

</body>
</html>