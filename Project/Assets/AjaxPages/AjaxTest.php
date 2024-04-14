<option>---Select---</option>
<?php
include("../Connection/Connection.php");

$selQry = "select * from tbl_test where subcategory_id=".$_GET['tid'];
echo $selQry;
$result = mysql_query($selQry);
while($row = mysql_fetch_array($result))
{
	?>
    <option value="<?php echo $row['test_id']; ?>"><?php echo $row['test_name']; ?></option>
    <?php
}
?>