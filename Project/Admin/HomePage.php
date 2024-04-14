<?php
session_start();

ob_start();
include('Head.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body style="background-image:url(../Assets/Templates/Main/images/slider-09.jpg);">
<div align="center">
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<h1 align="center" style="color:#fff">Welcome <?php echo $_SESSION['aname'] ?></h1>


</div>
</body>
<?php
include('Foot.php');
ob_flush();
?>
</html>