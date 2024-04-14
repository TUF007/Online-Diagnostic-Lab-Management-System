<?php
include("..\Assets\Connection\Connection.php");
include("Head.php");
session_start();
if(isset($_POST["submit"]))
{
  $staff=$_POST["staff"];
  $book=$_GET["bid"];
 $ins="insert into tbl_assignstaff(staff_id,booking_id)values('$staff','$book')";
 
 if(mysql_query($ins))
 {
	$update="update tbl_booking set booking_status=2 where booking_id='".$_GET["bid"]."' "; 
	 mysql_query($update);
 }
}
$selData='select * from tbl_booking	where booking_id='.$_GET["bid"];
$resData=mysql_query($selData);
$rowData=mysql_fetch_array($resData);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
	.assigned{
      margin-top: 60px; /* You can adjust the value (e.g., 20px) to control the positioning */
    }
  </style>
</head>

<body>
<p align="center" style="font-size: 20px" ><strong><u>ASSIGN STAFF</u></strong></p>
<div align="center">
<form id="form2" name="form2" method="post" action="">
<table width="842" height="200" border="1" style="font-size: 18px; text-align: center;">
  <tr>
    <td width="176" style="font-size: 20px;">Staff</td>
    <td width="296" style="text-align: left;">
      <label for="staff"></label>
      <select required name="staff" id="staff" style="width: 95%;" >
      <option value="">---Select---</option>
      <?php
	  $sel="select * from tbl_staff where place_id=".$rowData['place_id'];
	  $data=mysql_query($sel);
	  while($row=mysql_fetch_array($data))
	  {
		  
	  ?>
      <option value="<?php echo $row["staff_id"]?>"><?php echo $row["staff_name"]?></option>
      <?php
	  }
	  ?>
      </select>
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
</form>
<p align="center">&nbsp;</p>
<p align="center" style="font-size: 20px" class="assigned"><strong><u>ASSIGNED STAFFS</u></strong></p>
<table width="200"  style="border: 1px solid black;" class="table table-bordered">
<tr>
  <td><strong>Sl No</strong></td>
  <td><strong>User Name</strong></td>
  <td><strong>Staff Name</strong></td>
  <td><strong>Booked Date</strong></td>
  <td><strong>Booked Time</strong></td>
</tr>

    <?php
  		$i=0;
  		$selQry="select * from tbl_booking s inner join tbl_assignstaff c on c.booking_id=s.booking_id inner join tbl_staff m on m.staff_id=c.staff_id inner join tbl_user e on e.user_id=s.user_id where s.booking_status=2";
		$data=mysql_query($selQry);
		while($row=mysql_fetch_array($data))
		{
			$i++;
			?>
    <tr>
   <td><?php echo $i?> </td>
   <td><?php echo $row["user_name"]?></td>
   <td><?php echo $row["staff_name"]?></td>
   <td><?php echo $row["booking_date"]?></td>
    <td><?php echo $row["booking_time"]?></td>
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