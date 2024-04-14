<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="../Assets/Templates/Login/style.css">

</head>
<body>
<?php
include('../Assets/Connection/Connection.php');
session_start();
if(isset($_POST['submit'])){
	$email=$_POST['email'];
	$password=$_POST['pwd'];
	$selUser="select * from tbl_user where user_email='$email' and user_password='$password'";
	$selAdmin="select * from tbl_admin where admin_email='$email' and admin_password='$password'";
	$selStaff="select * from tbl_staff where staff_email='$email' and staff_password='$password'";
	$resUser=mysql_query($selUser);
	$resAdmin=mysql_query($selAdmin);
	$resStaff=mysql_query($selStaff);
	if($data=mysql_fetch_array($resUser))
	{
		$_SESSION['uid']=$data['user_id'];
		$_SESSION['uname']=$data['user_name'];
		header("location: ../User/HomePage.php");
	}
	else if($data=mysql_fetch_array($resAdmin))
	{
		$_SESSION['aid']=$data['admin_id'];
		$_SESSION['aname']=$data['admin_name'];
		header("location: ../Admin/HomePage.php");	
	}
	else if($data=mysql_fetch_array($resStaff))
	{
		$_SESSION['sid']=$data['staff_id'];
		$_SESSION['sname']=$data['staff_name'];
		header("location: ../Staff/HomePage.php");	
	}
	
	else{
		?>
		<script>
alert("Invalid Credential");
			</script>
	
		<?php
	}
}
?>
<!-- partial:index.partial.html -->
<div id="login-form-wrap">
  <h2>Login</h2>
  <form id="login-form" method="post">
  <p>
    <input type="email" id="email" name="email" placeholder="Email Address" required><i class="validation"><span></span><span></span></i>
    </p>
    <p>
    <input type="password" id="pwd" name="pwd" placeholder="Password" required><i class="validation"><span></span><span></span></i>
    </p>
    
    <p>
    <input type="submit" id="login" name="submit" value="Login">
    </p>
  </form>
  <div id="create-account-wrap">
    <p>Not a member? <a href="userregistration.php">Create Account</a><p>
  </div><!--create-account-wrap-->
</div><!--login-form-wrap-->
<!-- partial -->
  
</body>
</html>
