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
<h1 align="center">Welcome Staff</h1>
<h2 align="center"><?php echo $_SESSION['sname'] ?></h2>
<table width="200" border="1">
   <td><a href="Myprofile.php">Profile</a></td>
  </tr>
  <tr>
    <td><a href="Editprofile.php">EditProfile</a></td>
  </tr>
  <tr>
     <td><a href="viewassign.php">ViewAssign</a></td>
  <tr>
  <tr>
     <td><a href="ChangePassword.php">ChangePassword</a></td>
  <tr>
    <td><a href="complaint.php">Complaints</a></td>
  </tr>
</table>
</div>
</body>
</html>