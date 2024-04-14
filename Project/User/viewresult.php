<?php
session_start();
include("..\Assets\Connection\Connection.php");
include("Header.php");
	  $sel="select * from tbl_booking s inner join tbl_test c on c.test_id=s.test_id inner join tbl_result m on s.booking_id=m.booking_id inner join tbl_user u on u.user_id=s.user_id where s.booking_id='".$_GET["did"]."' and s.user_id='".$_SESSION["uid"]."' ";
	 $data=mysql_query($sel);
	 $row=mysql_fetch_array($data);
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
<body class="bg-all" >
<div class="title-box">
						<h2>View Result</h2>
					</div>
<div align="center">
<table width="398" height="80" border="1" align="center">
  <tr>
    <td width="93"style="background-color: #00cb86;color:white;" >Name</td>
    <td width="91"><?php echo $row["user_name"]?></td>
  </tr>
  <tr>
    <td style="background-color: #00cb86;color:white;" >Address</td>
    <td><?php echo $row["user_address"]?></td>
  </tr>
  <tr>
    <td style="background-color: #00cb86;color:white;" >Contact No</td>
    <td><?php echo $row["user_contact"]?></td>
  </tr>
  <tr>
    <td style="background-color: #00cb86;color:white;" >Test Name</td>
    <td><?php echo $row["test_name"]?></td>
  </tr>
  <tr>
    <td style="background-color: #00cb86;color:white;" >Result</td>
    <td><a href="../Assets/Files/User/Result/<?php echo $row["result_content"]?>" class="text-danger" download>Download</a></td>
  </tr>
</table>
</div>
</body>
</html>
<?php
include("Footer.php");
?>