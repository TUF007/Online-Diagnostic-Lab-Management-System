<?php
include("..\Assets\Connection\Connection.php");
include("Header.php");
session_start();
if($_GET["did"])
{
	$did=$_GET["did"];
	$updQry="update tbl_booking set booking_status=5 where booking_id=".$_GET['did'];
	mysql_query($updQry);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>View Bookings</title>
<style>
	.title-box h2 {
      margin-top: 60px; /* You can adjust the value (e.g., 20px) to control the positioning */
    }
  
</style>

</head>
<body class="bg-all" >
<div class="title-box">
						<h2>View My Bookings</h2>
					</div>
<div align="center">
<table width="825" height="223" border="1">
  <tr style="background-color: #00cb86;
    color: white">
    <td width="40">Sl No</td>
    <td width="101">Booked Time</td>
    <td width="99">Booked Date</td>
    <td width="40">Place</td>
    <td width="101">Address</td>
    <td width="81">Test Name</td>
    <td width="101">Action</td>
  </tr>
  <tr>
  <?php
  		$i=0;
  		$selQry="select * from tbl_booking s inner join tbl_place c on c.place_id=s.place_id inner join tbl_user m on s.user_id=m.user_id inner join tbl_test n on s.test_id=n.test_id where m.user_id='".$_SESSION["uid"]."'";
		$data=mysql_query($selQry);
		while($row=mysql_fetch_array($data))
		{
			$i++;
			?>
    <td> <?php echo $i?> </td>
    <td><?php echo $row["booking_time"]?></td>
    <td><?php echo $row["booking_date"]?></td>
    <td><?php echo $row["place_name"]?></td>
    <td><?php echo $row["user_address"]?></td>
    <td><?php echo $row["test_name"]?></td>
   <td>
   <?php
   if($row['booking_status']<3){
	   ?>
   <a href = "viewbooking.php?did=<?php echo $row["booking_id"]?>"class="text-danger">Cancel</a>
   <?php 
   }
   ?>
   <p>
   <?php
   if($row['booking_status']==0)
   {
	   echo "Payment Pending";
	   ?>
       <br />
       <a href="Payment.php?bid=<?php  echo $row["booking_id"] ?>" class="text-warning">Pay Now</a>
       <?php
   }
   else if($row['booking_status']==1)
   {
	   echo "Payment Completed <br> Staff Assigning Pending";
     ?>
      <br>
     <a href="bill.php?id=<?php echo $row["booking_id"] ?>" class="text-primary">View Invoice</a>
     <?php
   }
   else if($row['booking_status']==2)
   {
	   $selq="select * from tbl_assignstaff a inner join tbl_staff s on s.staff_id=a.staff_id where booking_id='".$row["booking_id"]."'";
	   $dataS=mysql_query($selq);
	   $rowS=mysql_fetch_array($dataS);
	   echo "Staff: ". $rowS["staff_name"],"<br>";
	   echo "Contact no: ". $rowS["staff_contact"];
   }else if($row['booking_status']==3)
   {
	   echo "Sample Collected";
   }else if($row['booking_status']==4)
   {
	   echo "Test Completed";
	   ?>
     <br>
       <a href="viewresult.php?did=<?php echo $row["booking_id"]?>"class="text-success">View Result</a>
       <?php
   }else if($row['booking_status']==6)
   {
	   echo "Delay in sample collection";
	  
   }
   else{
	   
	echo "Cancelled";   
   }
   ?>
   </p></td>
  </tr>
          <?php
		}
   ?> 
</table>
</div>
</body>
</html>
<?php
include("Footer.php");
?>