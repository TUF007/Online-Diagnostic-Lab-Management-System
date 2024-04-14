<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<div align="center">
<h1 align="center">Welcome User</h1>
<h2 align="center"><?php echo $_SESSION['uname'] ?></h2>

<table width="200" border="1">
  <tr>
    <td><a href="Myprofile.php">Profile</a></td>
  </tr>
  <tr>
    <td><a href="EditProfile.php">EditProfile</a></td>
  </tr>
  <tr>
     <td><a href="ChangePassword.php">ChangePassword</a></td>
  </tr>
 
  <tr>
    <td><a href="booking.php">Booking</a></td>
  </tr>
  <tr>
    <td><a href="viewbooking.php">View Booking</a></td>
  </tr>
  <tr>
    <td><a href="complaint.php">Complaints</a></td>
  </tr>
  <tr>
    <td><a href="feedback.php">feedbacks</a></td>
  </tr>
</table>
</div>
</body>
</html>