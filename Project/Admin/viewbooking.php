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
<p align="center" style="font-size: 20px" ><strong><u>VIEW BOOKINGS</u></strong></p>
<div align="center">
<table width="200"  style="border: 1px solid black;" class="table table-bordered">
  <tr>
  <td><strong>Sl No</strong></td>
<td><strong>User Name</strong></td>
<td><strong>Booked Time</strong></td>
<td><strong>Booked Date</strong></td>
<td><strong>Place</strong></td>
<td><strong>Address</strong></td>
<td><strong>Test Name</strong></td>
<td><strong>Action</strong></td>

  </tr>
  <tr>
    <?php
  		$i=0;
  		$selQry="select * from tbl_booking s inner join tbl_place c on c.place_id=s.place_id inner join tbl_user m on s.user_id=m.user_id inner join tbl_test n on s.test_id=n.test_id where booking_status=1 or booking_status=3 ";
		$data=mysql_query($selQry);
		while($row=mysql_fetch_array($data))
		{
			$i++;
			?>
    <td> <?php echo $i?> </td>
    <td><?php echo $row["user_name"]?></td>
    <td><?php echo $row["booking_time"]?></td>
    <td><?php echo $row["booking_date"]?></td>
    <td><?php echo $row["place_name"]?></td>
    <td><?php echo $row["user_address"]?></td>
    <td><?php echo $row["test_name"]?></td>
    <td><?php
    if($row["booking_status"]==1)
	{
	?><a href="assignstaff.php?bid=<?php echo $row['booking_id']?>" class="text-warning">Assign Staff</a>
    <?php
	}else if($row["booking_status"]==3)
	{
		?>
        <a href="addresult.php?bid=<?php echo $row['booking_id']?>" class="text-primary">Add Result</a>
        <?php
	}
	?></td>
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