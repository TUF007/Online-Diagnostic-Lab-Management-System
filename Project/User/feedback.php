<?php
include("..\Assets\Connection\Connection.php");
ob_start();
include("Header.php");
session_start();
$content="";
if(isset($_POST["submit"]))
{
 $content=$_POST["feedback"];
 $ins="insert into tbl_feedback(feedback_content,user_id)values('$content','".$_SESSION['uid']."')";
 mysql_query($ins);
}
if($_GET["did"])
{
	$did=$_GET["did"];
	$delQry="delete from tbl_feedback where feedback_id='$did'";
	mysql_query($delQry);
	 header("location:feedback.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
  #submit,#cancel {
    background-color: #088F8F;
    color: white; 
  }
    .title-box h2 {
      margin-top: 60px; /* You can adjust the value (e.g., 20px) to control the positioning */
    }

  </style>
</head>
<body class="bg-all">
<div class="title-box">
						<h2>Give Feedback</h2>
					</div>
<div align="center">
<form id="form1" name="form1" method="post" action="">
<table width="200" border="1">
  <tr>
    <td style="background-color: #00cb86;
    color: white;">Feedback</td>
    <td>
      <label for="feedback"></label>
      <textarea name="feedback" id="feedback" cols="45" rows="5"required></textarea>
    </td>
  </tr>
  <tr>
    <td colspan="2"><div align="center">
      <input type="submit" name="submit" id="submit" value="Submit" />
      <input type="reset" name="cancel" id="cancel" value="cancel" />
    </div></td>
  </tr>
</table>
</form>
<p align="center">&nbsp;</p>
<div class="title-box">
						<h2>My Feedbacks</h2>
					</div>

<table width="366" height="98" border="1">
  <tr style="background-color: #00cb86;
    color: white;">
    <td>Sl No</td>
    <td>feedback</td>
    <td>Action</td>
  </tr>
    <?php
  		$i=0;
  		$selQry="select * from tbl_feedback where user_id='".$_SESSION["uid"]."'";
		$data=mysql_query($selQry);
		while($row=mysql_fetch_array($data))
		{
			$i++;
			?>
    <tr>
   <td><?php echo $i?> </td>
    <td><?php echo $row["feedback_content"]?></td>
    <td><a href = "feedback.php?did=<?php echo $row["feedback_id"]?>"class="text-danger">Delete</td>
  </tr>
   <?php
		}
   ?>
</table>
</div>
</body>
</html>
<?php
include("Footer.php");
ob_flush();
?>