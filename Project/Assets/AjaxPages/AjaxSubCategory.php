<option>---Select----</option>
<?php
include("../Connection/Connection.php");

$selQry = "select * from tbl_subcategory where category_id=".$_GET['sid'];
$result = mysql_query($selQry);
while($row = mysql_fetch_array($result))
{
	?>
    <option value="<?php echo $row['subcategory_id']; ?>"><?php echo $row['subcategory_name']; ?></option>
    <?php
}
?>