<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<style>
  #btn_sub {
    background-color: #088F8F;
    color: white; 
  }
  .title-box h2 {
      margin-top: 60px; /* You can adjust the value (e.g., 20px) to control the positioning */
    }
</style>
<?php
	 include("../Assets/connection/connection.php");
   ob_start();
	  session_start();
   include("Header.php");
	
	 if(isset($_POST["btn_sub"]))
	 {
		$update="update tbl_user set user_name='".$_POST["text_no1"]."',user_email='".$_POST["text_no2"]."',user_address='".$_POST["text_no3"]."',user_contact='".$_POST["text_no4"]."' where user_id='".$_SESSION["uid"]."'";
		 mysql_query($update);
		 header("location:MyProfile.php");
	 }
	 $sel="select * from tbl_user where user_id='".$_SESSION["uid"]."'";
	 $data=mysql_query($sel);
	 $row=mysql_fetch_array($data);
	 ?>
 <body class="bg-all">
 <div class="title-box">
						<h2>Edit My Profile</h2>
					</div>
<div align="center">
<form id="form1" name="form1" method="post" action="">
  <table width="258" height="180" border="1">
    <tr>
      <td style="background-color: #00cb86;color:white;" >Name</td>
      <td><label for="text_no1"></label>
      <input type="text" name="text_no1" id="text_no1"  value="<?php echo $row["user_name"]?>"/></td>
    </tr>
 <tr>
      <td style="background-color: #00cb86;color:white;">Email</td>
      <td><label for="text_no2"></label>
      <input type="text" name="text_no2" id="text_no2" value="<?php echo $row["user_email"]?>"/></td>
    </tr>
  
    <tr>
      <td style="background-color: #00cb86;color:white;">Address</td>
      <td><label for="text_no3"></label>
      <input type="text" name="text_no3" id="text_no3" value="<?php echo $row["user_address"]?>"/></td>
    </tr>
    <tr>
      <td align="center" style="background-color: #00cb86;color:white;"><div align="left">Contact No</div></td>
      <td align="center"><label for="text_no4"></label>
        <div align="left">
          <input type="text" name="text_no4" id="text_no4" pattern="[7-9]{1}[0-9]{9}" 
                title="Phone number with 7-9 and remaing 9 digit with 0-9" value="<?php echo $row["user_contact"]?>"/>
      </div></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="btn_sub" id="btn_sub" value="update" /></td>
    </tr>
  </table>
</form>
</div>
</body>
</html>
<?php
include("Footer.php");
ob_flush();
?>