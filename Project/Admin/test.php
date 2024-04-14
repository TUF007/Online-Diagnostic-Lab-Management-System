<?php
include("..\Assets\Connection\Connection.php");
ob_start();
include("Head.php");
if(isset($_POST["submit"]))
{
 $testname=$_POST["tstname"];
 $testprice=$_POST["tstprice"];
 $subcategory=$_POST["subcategory"];
	$ins="insert into tbl_test(test_name,test_price,subcategory_id)
	values('".$testname."','".$testprice."','".$subcategory."')";
 mysql_query($ins);
}
if($_GET["did"])
{
	$did=$_GET["did"];
	$delQry="delete from tbl_test where test_id='$did'";
	mysql_query($delQry);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
	.testlist{
      margin-top: 60px; /* You can adjust the value (e.g., 20px) to control the positioning */
    }
  </style>
</head>

<body>
<p align="center" style="font-size: 20px"><strong><u>TEST</u></strong></p>
<div align="center">
<form id="form2" name="form2" method="post" action="">
<table width="842" height="300" border="1" style="font-size: 18px; text-align: center;">
  <tr>
    <td width="176" style="font-size: 20px;">Test Name</td>
    <td width="296" style="text-align: left;">
      <label for="tstname"></label>
      <input required type="text" name="tstname" id="tstname"  style="width: 95%;" />
    </td>
  </tr>
  <tr>
    <td width="176" style="font-size: 20px;" >Category</td>
    <td width="296" style="text-align: left;"><label for="category"></label>
      <select required name="category" id="category" onchange="getSubCategory(this.value)"  style="width: 95%;">
       <option value="">---Select---</option>
      <?php
	  $sel="select * from tbl_category";
	  $data=mysql_query($sel);
	  while($row=mysql_fetch_array($data))
	  {
		  
	  ?>
      <option value="<?php echo $row["category_id"]?>"><?php echo $row["category_name"]?></option>
      <?php
	  }
	  ?>
    </select></td>
  </tr>
  <tr>
    <td width="176" style="font-size: 20px;" >Sub Category</td>
    <td width="296" style="text-align: left;"><label for="subcategory"></label>
      <select required name="subcategory" id="subcategory"  style="width: 95%;">
      <option value="">---Select---</option>
    </select></td>
  </tr>
  <tr>
    <td width="176" style="font-size: 20px;">Test Price</td>
    <td width="296" style="text-align: left;">
      <label for="tstprice">  </label>
      <input type="text" name="tstprice" id="tstprice" required  style="width: 95%;" />
    </td>
  </tr>
  <tr>
    <td colspan="2">
      <div align="center">
        <input type="submit" name="submit" id="submit" value="Submit" style="font-size: 20px; width: 100px; height: 40px; background-color: #5D87FF; color: white;" />
      </div>
    </td>
  </tr>
</table>
<p>&nbsp;</p>
</form>
<p align="center">&nbsp;</p>
<p align="center" class="testlist" style="font-size: 20px" ><strong><u>TEST LIST</u></strong></p>
<table width="200"  style="border: 1px solid black;" class="table table-bordered">
  <tr>
  <td><strong>SL no</strong></td>
<td><strong>Test Name</strong></td>
<td><strong>Category</strong></td>
<td><strong>Sub Category</strong></td>
<td><strong>Price</strong></td>
<td><strong>Action</strong></td>
  </tr>
  <?php
  		$i=0;
  		$selQry="select * from tbl_test s inner join tbl_subcategory c on c.subcategory_id=s.subcategory_id inner join tbl_category m on c.category_id=m.category_id";
		$data=mysql_query($selQry);
		while($row=mysql_fetch_array($data))
		{
			$i++;
			?>
  <tr>
    <td><?php echo $i?></td>
    <td><?php echo $row["test_name"]?></td>
    <td><?php echo $row["category_name"]?></td>
    <td><?php echo $row["subcategory_name"]?></td>
    <td><?php echo $row["test_price"]?></td>
    <td><a href = "test.php?did=<?php echo $row["test_id"]?>" class="text-danger">Delete</td>
  </tr>
  <?php
		}
  ?>
  
</table>
</div>
</body>
<script src="../Assets/JQ/jQuery.js"></script>
<script>
function getSubCategory(did)
{
	$.ajax({
		url:"../Assets/AjaxPages/AjaxSubCategory.php?sid="+did,
		success: function(html){
			$("#subcategory").html(html);
		}
	});
}
</script>
</html>
<?php
include("Foot.php");
ob_flush();
?>