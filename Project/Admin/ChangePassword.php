<?php
	 include("../Assets/connection/connection.php");
	 include("Head.php");
	 session_start();
	
	
	
	if(isset($_POST["btn_update"]))
{
	
	
	$sel="select * from tbl_admin where admin_id='".$_SESSION["aid"]."'";
	$data=mysql_query($sel);
	$row=mysql_fetch_array($data);
	$db_password=$row["admin_password"];
	
	$current_password=$_POST["current_password"];
	$new_password=$_POST["new_password"];
	$re_password=$_POST["re_password"];
	

	if($db_password==$current_password)
	{
		if($new_password==$re_password)
		{
		  $upQry = "update tbl_admin set admin_password='$new_password' where admin_id='".$_SESSION["aid"]."'";
		  
		  if($data=mysql_query($upQry))
		  {
			echo "Password Updated";
		  }
		   else
		  {
			echo "Failed" ;
		  }
		}
		else
		{
			echo "Password Mismatch!!";
		}
	}
	else
	{
		echo "Invalid current password";
	}
	}
	
	?>	
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Style::ChangePassword</title>
</head>

<body>
<p align="center" style="font-size: 20px"><strong><u>CHANGE PASSWORD</u></strong></p>
<div align="center">
<form id="form1" name="from1" method="post" >
<table width="842" height="300" border="1" style="font-size: 18px; text-align: center;">
  <tr>
    <td width="176" style="font-size: 20px;">current password</td>
    <label for="current_password"></label>
    <td width="156"><input type="password" name="current_password" style="width: 95%;"></td>
  </tr>
  <tr>
    <td width="176" style="font-size: 20px;">new password</td>
    <label for="new_password"></label>
    <td><input required type="password" name="new_password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" style="width: 95%;"></td>
  </tr>
  <tr>
    <td width="176" style="font-size: 20px;">confirm password</td>
    <label for="re_password"></label>
    <td><input type="password" name="re_password" required style="width: 95%;"></td>
  </tr>
  <tr>
    <td colspan="2" align="center"><input type="submit" name="btn_update" id="btn_update" value="Update" style="font-size: 20px; width: 100px; height: 40px; background-color: #5D87FF; color: white;">
      <input type="reset" name="cancel" id="cancel" value="Cancel" style="font-size: 20px; width: 100px; height: 40px; background-color: #5D87FF; color: white;"/>
    </td>
    
  </tr>
</table>
</form>
</div>
</body>
</html>
<?php
include("Foot.php");
?>