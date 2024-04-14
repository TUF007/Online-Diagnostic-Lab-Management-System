<?php
	 include("../Assets/connection/connection.php");
	 include("Header.php");
	 session_start();
	
	
	
	if(isset($_POST["btn_update"]))
{
	
	
	$sel="select * from tbl_user where user_id='".$_SESSION["uid"]."'";
	$data=mysql_query($sel);
	$row=mysql_fetch_array($data);
	$db_password=$row["user_password"];
	
	$current_password=$_POST["current_password"];
	$new_password=$_POST["new_password"];
	$re_password=$_POST["re_password"];
	

	if($db_password==$current_password)
	{
		if($new_password==$re_password)
		{
		  $upQry = "update tbl_user set user_password='$new_password' where user_id='".$_SESSION["uid"]."'";
		  
		  if($data=mysql_query($upQry))
		  {
			?>
        <script>
            alert('Password Changed')
            </script>
            <?php
		  }
		   else
		  {
			?>
        <script>
            alert('Failed')
            </script>
            <?php
		  }
		}
		else
		{
			?>
        <script>
            alert('Password Mismatch!!')
            </script>
            <?php
		}
	}
	else
	{
		?>
        <script>
            alert('Invalid current password')
            </script>
            <?php
	}
}
	?>	
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Style::ChangePassword</title>
</head>
<style>
  #btn_update, #cancel {
    background-color:#088F8F; 
    color: white;
  }
	.title-box h2 {
      margin-top: 60px; /* You can adjust the value (e.g., 20px) to control the positioning */
    }
  
</style>
<body class="bg-all">
<div class="title-box">
<h2>Change Password</h2>
</div>
<div align="center">
<form id="form1" name="from1" method="post" >
<table width="379" height="165" border="1">
  <tr>
    <td width="149"style="background-color: #00cb86;color:white;">Current password</td>
    <label for="current_password"></label>
    <td width="156"><input type="password" name="current_password"></td>
  </tr>
  <tr>
    <td style="background-color: #00cb86;color:white;">New Password</td>
    <label for="new_password"></label>
    <td><input required type="password" name="new_password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"></td>
  </tr>
  <tr>
    <td style="background-color: #00cb86;color:white;">Confirm Password</td>
    <label for="re_password"></label>
    <td><input type="password" name="re_password" required ></td>
  </tr>
  <tr>
    <td colspan="2" align="center"><input type="submit" name="btn_update" id="btn_update" value="Update">
      <input type="reset" name="cancel" id="cancel" value="Cancel" />
    </td>
    
  </tr>
</table>
</form>
</div>
</body>
</html>
<?php
include("Footer.php");
?>