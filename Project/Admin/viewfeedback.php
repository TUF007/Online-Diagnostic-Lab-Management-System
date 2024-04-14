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
<p align="center" style="font-size: 20px"><strong><u>FEEDBACKS</u></strong></p>
<div align="center">
<table width="200"  style="border: 1px solid black;" class="table table-bordered">
<tr>
  <td><strong>Sl No</strong></td>
  <td><strong>Feedbacks</strong></td>
  <td><strong>Username</strong></td>
</tr>
    <?php
  		$i=0;
  		$selQry="select * from tbl_feedback s inner join tbl_user m on m.user_id=s.user_id";
		$data=mysql_query($selQry);
		while($row=mysql_fetch_array($data))
		{
			$i++;
			?>
   <tr>
   <td><?php echo $i?> </td>
    <td><?php echo $row["feedback_content"]?></td>
    <td><?php echo $row["user_name"]?></td>
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
