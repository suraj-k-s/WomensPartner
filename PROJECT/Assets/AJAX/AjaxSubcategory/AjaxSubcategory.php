<?php
include("../../Connection/Connection.php");
?>
<option value="" disabled selected>Subcategory</option>
<?php
$selsubcategory="select * from tbl_subcategory where category_id=".$_GET['id'];
$res=$conn->query($selsubcategory);
while($data=$res->fetch_assoc())
{
	?>
	<option value="<?php echo $data['subcategory_id']?>"><?php echo $data['subcategory_name']?></option>
	<?php 
}
?>