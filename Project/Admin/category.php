<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
include("..\Assets\Connection\Connection.php");
include("Head.php");
$cname="";
if(isset($_POST["btn_submit"]))
{
 $cname=$_POST["category"];
 $ins="insert into tbl_category(category_name)values('$cname')";
 mysql_query($ins);
}
if($_GET["did"])
{
	$did=$_GET["did"];
	$delQry="delete from tbl_category where category_id='$did'";
	mysql_query($delQry);
}
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
	.categorylist{
      margin-top: 60px; /* You can adjust the value (e.g., 20px) to control the positioning */
    }
  </style>
</head>

<body>
<p align="center" style="font-size: 20px"  ><strong><u>TEST CATEGORY</u></strong></p>
<div align="center">
<form id="form1" name="form1" method="post" action="">
  <table width="842" height="200" border="1" style="font-size: 18px; text-align: center;">
    <tr>
      <td width="176" style="font-size: 20px;">Category</td>
      <td width="296" style="text-align: left;">
        <label for="category"></label>
        <input type="text" required name="category" id="category" style="width: 95%;" />
      </td>
    </tr>
    <tr>
      <td colspan="2">
        <div align="center">
          <input type="submit" name="btn_submit" value="Submit" style="font-size: 20px; width: 100px; height: 40px; background-color: #5D87FF; color: white;" />
        </div>
      </td>
    </tr>
  </table>
</form>

<p align="center">&nbsp;</p>
<p align="center"class="categorylist" style="font-size: 20px"  ><strong><u>TEST LIST</u></strong></p>
<table width="200"  style="border: 1px solid black;" class="table table-bordered">
<tr>
    <td><strong>Sl No</strong></td>
    <td><strong>Category</strong></td>
    <td><strong>Action</strong></td>
</tr>
  <?php
  		$i=0;
  		$selQry="select * from tbl_category";
		$data=mysql_query($selQry);
		while($row=mysql_fetch_array($data))
		{
			$i++;
			?>
    <tr>
   <td><?php echo $i?> </td>
    <td><?php echo $row["category_name"]?></td>
    <td><a href = "category.php?did=<?php echo $row["category_id"]?>" class="text-danger">Delete</td>
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