<?php
include("..\Assets\Connection\Connection.php");
include("Head.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<p align="center"style="font-size: 20px" ><strong><u>RECORD</u></strong></p>
<div align="center">
  <table width="200"  style="border: 1px solid black;" class="table table-bordered">
    <tr>
    <td><strong>Sl No</strong></td>
<td><strong>Test Name</strong></td>
<td><strong>Test Price</strong></td>
<td><strong>User Name</strong></td>
<td><strong>User Address</strong></td>
<td><strong>User Contact No</strong></td>
<td><strong>Staff Name</strong></td>
<td><strong>Staff Contact No</strong></td>
<td><strong>Action</strong></td>
    </tr>
    <tr>
      <?php
  		$i=0;
  		$selQry="select *
from tbl_assignstaff s inner join tbl_booking c on c.booking_id = s.booking_id inner join tbl_user m on m.user_id = c.user_id inner join tbl_staff u on u.staff_id =s.staff_id inner join tbl_test r on r.test_id=c.test_id where booking_status=4";
		$data=mysql_query($selQry);
		while($row=mysql_fetch_array($data))
		{
			$i++;
			?>
    <tr>
      <td><?php echo $i?> </td>
      <td><?php echo $row["test_name"]?></td>
      <td><?php echo $row["test_price"]?></td>
      <td><?php echo $row["user_name"]?></td>
      <td><?php echo $row["user_address"]?></td>
      <td><?php echo $row["user_contact"]?></td>
      <td><?php echo $row["staff_name"]?></td>
      <td><?php echo $row["staff_contact"]?></td>
       <td class="text-success">Test Completed</td>
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