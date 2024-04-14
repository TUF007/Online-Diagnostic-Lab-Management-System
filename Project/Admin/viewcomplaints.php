<?php
include("..\Assets\Connection\Connection.php");
include("Head.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
	.stafflist{
      margin-top: 60px; /* You can adjust the value (e.g., 20px) to control the positioning */
    }
  </style>
</head>

<body>
<p align="center" style="font-size: 20px" class="userlist"><strong><u>USER COMPLAINTS</u></strong></p>
<div align="center">
<table width="200"  style="border: 1px solid black;" class="table table-bordered">
<tr>
  <td><strong>Sl No</strong></td>
  <td><strong>Title</strong></td>
  <td><strong>User Name</strong></td>
  <td><strong>Contact No</strong></td>
  <td><strong>Complaint</strong></td>
  <td><strong>Reply</strong></td>
  <td><strong>Date</strong></td>
  <td><strong>Action</strong></td>
</tr>

  <tr>
 <?php
  		$i=0;
  		$selQry="select * from tbl_complaint s inner join tbl_user c on c.user_id=s.user_id";
		$data=mysql_query($selQry);
		while($row=mysql_fetch_array($data))
		{
			$i++;
			?>
    <tr>
   <td><?php echo $i?> </td>
    <td><?php echo $row["complaint_title"]?></td>
    <td><?php echo $row["user_name"]?></td>
	<td><?php echo $row["user_contact"]?></td>
    <td><?php echo $row["complaint_content"]?></td>
    <td><?php echo $row["complaint_reply"]?></td>
    <td><?php echo $row["complaint_date"]?></td>
     <td><a href = "reply.php?did=<?php echo $row["complaint_id"]?>">Reply</td>
  </tr
   ><?php
		}
   ?>
   </table>
   <p align="center">&nbsp;</p>
   <p align="center" style="font-size: 20px"class="stafflist" ><strong><u>STAFF COMPLAINTS</u></strong></p>
   <table width="200"  style="border: 1px solid black;" class="table table-bordered">
   <tr>
  <td><strong>Sl No</strong></td>
  <td><strong>Title</strong></td>
  <td><strong>Staff Name</strong></td>
  <td><strong>Contact No</strong></td>
  <td><strong>Complaint</strong></td>
  <td><strong>Reply</strong></td>
  <td><strong>Date</strong></td>
  <td><strong>Action</strong></td>
</tr>
  
 <?php
  		$i=0;
  		$selQry="select * from tbl_complaint s inner join tbl_staff c on c.staff_id=s.staff_id";
		$data=mysql_query($selQry);
		while($row=mysql_fetch_array($data))
		{
			$i++;
			?>
  <tr>
   <td><?php echo $i?> </td>
    <td><?php echo $row["complaint_title"]?></td>
    <td><?php echo $row["staff_name"]?></td>
	<td><?php echo $row["staff_contact"]?></td>
    <td><?php echo $row["complaint_content"]?></td>
    <td><?php echo $row["complaint_reply"]?></td>
    <td><?php echo $row["complaint_date"]?></td>
     <td><a href = "reply.php?did=<?php echo $row["complaint_id"]?>">Reply</td>
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