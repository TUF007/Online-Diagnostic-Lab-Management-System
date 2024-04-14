<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
include("..\Assets\Connection\Connection.php");
include("Head.php");
$subname="";
if(isset($_POST["submit"]))
{
 $subname=$_POST["subcategory"];
 $ins="insert into tbl_subcategory(subcategory_name,category_id)values('$subname','".$_POST["category"]."')";
 mysql_query($ins);
}
if($_GET["did"])
{
	$did=$_GET["did"];
	$delQry="delete from tbl_subcategory where subcategory_id='$did'";
	mysql_query($delQry);
}
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
	.subcategorylist{
      margin-top: 60px; /* You can adjust the value (e.g., 20px) to control the positioning */
    }
  </style>
</head>
<body>
<p align="center" style="font-size: 20px" ><strong><u>TEST SUB-CATEGORY</u></strong></p>
<div align="center">
<form id="form1" name="form1" method="post" action="">
<table width="842" height="300" border="1" style="font-size: 18px; text-align: center;">
  <tr>
    <td width="176" style="font-size: 20px;">Category</td>
    <td width="296" style="text-align: left;">
      <label for="category"></label>
      <select required name="category" id="category "style="width: 95%;" >
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
      </select>
   </td>
  </tr>
  <tr>
    <td width="176" style="font-size: 20px;">Subcategory</td>
    <td width="296" style="text-align: left;"
      <label for="subcategory"></label>
      <label for="subcategory"></label>
      <input type="text" name="subcategory" id="subcategory" required  style="width: 95%;"/>
   </td>
  </tr>
  <tr>
    <td colspan="2">
      <div align="center" >
      <input type="submit" name="submit" id="submit" value="Submit" style="font-size: 20px; width: 100px; height: 40px; background-color: #5D87FF; color: white;"  />
       <input type="reset" name="cancel" id="cancel" value="cancel" style="font-size: 20px; width: 100px; height: 40px; background-color: #5D87FF; color: white;"  />
      </div></td>
  </tr>
</table>
</form>
<p align="center">&nbsp;</p>
<p align="center"class="subcategorylist" style="font-size: 20px" ><strong><u>TEST SUB-CATEGORY LIST</u></strong></p>
<table width="200"  style="border: 1px solid black;" class="table table-bordered">
<tr>
    <td><strong>Sl No</strong></td>
    <td><strong>Category</strong></td>
    <td><strong>Sub-Category</strong></td>
    <td><strong>Action</strong></td>
</tr>

  <?php
  		$i=0;
  		$selQry="select * from tbl_subcategory s inner join tbl_category c on c.category_id=s.category_id";
		$data=mysql_query($selQry);
		while($row=mysql_fetch_array($data))
		{
			$i++;
			?>
    <tr>
   <td><?php echo $i?> </td>
    <td><?php echo $row["category_name"]?></td>
    <td><?php echo $row["subcategory_name"]?></td>
    <td><a href = "subcategory.php?did=<?php echo $row["subcategory_id"]?>" class="text-danger">Delete</td>
  </tr>
   <?php
		}
   ?>
</table>
</div>
</body>
</html>
<?php
include("Foot.php");
?>
