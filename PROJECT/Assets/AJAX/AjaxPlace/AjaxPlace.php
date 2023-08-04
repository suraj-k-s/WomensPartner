<?php
include("../../Connection/Connection.php");
?>
<option>----Select Place------</option>
<?php
$selplace="select * from tbl_place where district_id=".$_GET['pid'];
$res=$conn->query($selplace);
while($data=$res->fetch_assoc())
{
	?>
	<option value="<?php echo $data['place_id']?>"><?php echo $data['place_name']?></option>
	<?php 
}
?>