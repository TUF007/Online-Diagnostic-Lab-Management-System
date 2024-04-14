<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MyProfile</title>
<!-- Add Bootstrap CSS link -->
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->

<!-- Add Bootstrap JS and jQuery -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->

<style>
	.title-box h2 {
      margin-top: 60px; /* You can adjust the value (e.g., 20px) to control the positioning */
    }
  
</style>

</head>

<?php
	 include("../Assets/connection/connection.php");
   include("Header.php");
   ob_start();
	 $sel="select * from tbl_user where user_id='".$_SESSION["uid"]."'";
	 $data=mysql_query($sel);
	 $row=mysql_fetch_array($data);
	 ?>
<body class="bg-all">
	        <div class="title-box">
						<h2>My Profile</h2>
					</div>
<div align="center">
<form id="form1" name="form1" method="post" action="">
  <div class="container mt-4">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <table class="table table-bordered">
          <tr>
            <td colspan="2" align="center">
              <img src="../Assets/Files/User/Photo/<?php echo $row["user_photo"]?>"  alt="User Photo" style="border-radius:75px" width="150" height="150">
            </td>
          </tr>
          <tr>
            <td  class="font-weight-bold"style="background-color: #00cb86;color:white;">Name</td>
            <td><?php echo $row["user_name"]?></td>
          </tr>
          <tr>
            <td class="font-weight-bold" style="background-color: #00cb86;color:white;">Email</td>
            <td><?php echo $row["user_email"]?></td>
          </tr>
          <tr>
            <td class="font-weight-bold" style="background-color: #00cb86;color:white;">Address</td>
            <td><?php echo $row["user_address"]?></td>
          </tr>
          <tr>
            <td class="font-weight-bold" style="background-color: #00cb86;color:white;">Contact No</td>
            <td><?php echo $row["user_contact"]?></td>
          </tr>
        </table>
      </div>
    </div>
  </div>
</form>

</body>
</div>
</html>
<?php
include("Footer.php");
?>