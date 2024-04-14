<?php
include("..\Assets\Connection\Connection.php");
include("Head.php");
if($_GET["did"])
{
	$did=$_GET["did"];
	$delQry="delete from tbl_user where user_id='$did'";
	mysql_query($delQry);
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<p align="center" style="font-size: 20px" class="stafflist"><strong><u>USER LIST</u></strong></p>
<div align="center">
<table width="200"  style="border: 1px solid black;" class="table table-bordered">
<tr>
    <td><strong>Sl no</strong></td>
    <td><strong>Name</strong></td>
    <td><strong>Address</strong></td>
    <td><strong>Age</strong></td>
    <td><strong>Gender</strong></td>
    <td><strong>Contact No</strong></td>
    <td><strong>Email</strong></td>
    <td><strong>Password</strong></td>
    <td><strong>Action</strong></td>
</tr>
   <?php
  		$i=0;
  		$selQry="select * from tbl_user";
		$data=mysql_query($selQry);
		while($row=mysql_fetch_array($data))
		{
			$i++;
			?>
   <tr>
   <td><?php echo $i?>  </td>
    <td><?php echo $row["user_name"]?></td>
    <td><?php echo $row["user_address"]?></td>
    <td><?php echo $row["user_age"]?></td>
    <td><?php echo $row["user_gender"]?></td>
    <td><?php echo $row["user_contact"]?></td>
    <td><?php echo $row["user_email"]?></td>
    <td><?php echo $row["user_password"]?></td>
    <td><a href = "userlist.php?did=<?php echo $row["user_id"]?>"class="text-danger" >Delete</td>
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