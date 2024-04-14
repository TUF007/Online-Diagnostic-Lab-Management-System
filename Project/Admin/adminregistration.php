<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
include("..\Assets\Connection\Connection.php");
include("Head.php");
if(isset($_POST['submit']))
{
	$name=$_POST["name"];
	$email=$_POST["email"];
	$pwd=$_POST["password"];
	$contact=$_POST["contact"];
	$ins="insert into tbl_admin(admin_name,admin_email,admin_password,admin_contact)
	values('".$name."','".$email."','".$pwd."','".$contact."')";
 mysql_query($ins);
}
 if($_GET["did"])
{
	$did=$_GET["did"];
	$delQry="delete from tbl_admin where admin_id='$did'";
	mysql_query($delQry);
}
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
	.reglist{
      margin-top: 60px; /* You can adjust the value (e.g., 20px) to control the positioning */
    }
  </style>
</head>

<body>
<p align="center" style="font-size: 20px" ><strong><u>ADMIN REGISTRATION</u></strong></p>
<div align="center">
<form id="form1" name="form1" method="post" action="">
<table  width="842" height="350" border="1" style="font-size: 18px; text-align: center;">
  <tr>
    <td width="176" style="font-size: 20px;">Name</td>
    <td width="296" style="text-align: left;">
    <label for="name"></label>
      <input required type="text" name="name" id="name" title="Name Allows Only Alphabets,Spaces and First Letter Must Be Capital Letter" pattern="^[A-Z]+[a-zA-Z ]*$" style="width: 95%;" />
    </td>
  </tr>
  <tr>
    <td width="176" style="font-size: 20px;">Contact</td>
    <td width="296" style="text-align: left;"><label for="contact"></label>
      <input type="text" required name="contact" id="contact" pattern="[6-9]{1}[0-9]{9}" 
                title="Phone number with 6-9 and remaing 9 digit with 0-9" style="width: 95%;"/></td>
  </tr>
  <tr>
    <td width="176" style="font-size: 20px;">Email</td>
    <td width="296" style="text-align: left;"><label for="email"></label>
      <input type="email" required name="email" id="email" style="width: 95%;"/></td>
  </tr>
  <tr>
  <td width="176" style="font-size: 20px;">Password</td>
    <td width="296" style="text-align: left;"><label for="password"></label>
      <input type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required name="password" id="password" style="width: 95%;"/></td>
  </tr>
  <tr>
  <td colspan="2"><div align="center">
  <input type="submit" name="submit" id="submit" value="Submit" style="font-size: 20px; width: 100px; height: 40px; background-color: #5D87FF; color: white;"/>
   <input type="reset" name="cancel" id="cancel" value="cancel" style="font-size: 20px; width: 100px; height: 40px; background-color: #5D87FF; color: white;" />
  </div></td>
  </tr>
</table>

</form>
<p align="center">&nbsp;</p>
<p align="center" style="font-size: 20px" class="reglist"><strong><u>ADMIN LIST</u></strong></p>
<table width="200"  style="border: 1px solid black;" class="table table-bordered">
<tr>
    <td><strong>Sl no</strong></td>
    <td><strong>Name</strong></td>
    <td><strong>Contact</strong></td>
    <td><strong>Email</strong></td>
    <td><strong>Password</strong></td>
    <td><strong>Action</strong></td>
</tr>
   <?php
  		$i=0;
  		$selQry="select * from tbl_admin";
		$data=mysql_query($selQry);
		while($row=mysql_fetch_array($data))
		{
			$i++;
			?>
  <tr>
   <td><?php echo $i?>  </td>
    <td><?php echo $row["admin_name"]?></td>
    <td><?php echo $row["admin_contact"]?></td>
    <td><?php echo $row["admin_email"]?></td>
    <td><?php echo $row["admin_password"]?></td>
   <td><a href = "adminregistration.php?did=<?php echo $row["admin_id"]?>"class="text-danger" >Delete</td>
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