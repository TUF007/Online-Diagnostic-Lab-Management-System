<?php
include("..\Assets\Connection\Connection.php");
include("Header.php");
session_start();
if($_GET["did"])
{
	$bid=$_GET["did"];
	$delQry="update tbl_booking set booking_status=3 where booking_id=".$_GET['did'];
	mysql_query($delQry);
}
if($_GET["bid"])
{
	$bid=$_GET["did"];
	$delQry="update tbl_booking set booking_status=6 where booking_id=".$_GET['bid'];
	mysql_query($delQry);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
	.title-box h2 {
      margin-top: 60px; /* You can adjust the value (e.g., 20px) to control the positioning */
    }
  </style>
</head>

<body class="bg-all">
<div class="title-box">
						<h2>My Assignments</h2>
					</div>
<div align="center">
<table width="667" height="89" border="1">
  <tr style="background-color: #00cb86;
    color: white;">
    <td width="66">Sl No</td>
    <td width="116">Booked Date</td>
    <td width="88">Booked Time</td>
    <td width="103">User Name</td>
    <td width="69">Place</td>
    <td width="73">Address</td>
    <td width="62">Action</td>
  </tr>
  <?php
  		$i=0;
  		$selQry="select * from tbl_assignstaff s inner join tbl_booking c on s.booking_id=c.booking_id inner join tbl_staff m on s.staff_id=m.staff_id inner join tbl_place p on p.place_id=c.place_id inner join tbl_user u on u.user_id=c.user_id where s.staff_id='".$_SESSION["sid"]."' and booking_status=2 or booking_status=6 ";
		$data=mysql_query($selQry);
		while($row=mysql_fetch_array($data))
		{
			$i++;
			?>
  <tr>
    <td><?php echo $i?></td>
    <td><?php echo $row["booking_date"]?></td>
    <td><?php echo $row["booking_time"]?></td>
    <td><?php echo $row["user_name"]?></td>
    <td><?php echo $row["place_name"]?></td>
    <td><?php echo $row["user_address"]?></td>
    <td><?php
    if($row['booking_status']==2)
   {
	
	   ?>
       <br />
        <a href="viewassign.php?bid=<?php echo $row["booking_id"] ?>"class="text-danger">Update delay</a>||<a href = "viewassign.php?did=<?php echo $row["booking_id"]?>" class="text-success">sample collected</a>
       <?php
   
		}
		else  if($row['booking_status']==6)
   {
	   echo "Delay in collection";
	
	   ?>
       <br />
     	<a href = "viewassign.php?did=<?php echo $row["booking_id"]?>"class="text-success">sample collected</a>
       <?php
   }
		
		else{
		echo "Sample Collected";	
		}
		}
   ?> 
</table>
</div>
</body>
</html>
<?php
include("Footer.php");
?>