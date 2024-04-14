<?php
include("..\Assets\Connection\Connection.php");
ob_start();
include("Header.php");
session_start();
$complaint="";
$title="";
$content="";
if(isset($_POST["submit"]))
{
 $title=$_POST["title"];
 $content=$_POST["complaint"];
 $hid=$_POST["txt_hid"];
 if($hid=="")
 {
 $ins="insert into tbl_complaint(complaint_title,complaint_content,complaint_date,user_id)
	values('".$title."','".$content."',curdate(),'".$_SESSION["uid"]."')";
 mysql_query($ins);
 header("location:complaint.php");
 }else{
	 $uns="update tbl_complaint set complaint_title='".$title."',complaint_content='".$content."' where complaint_id='".$hid."'";
	  mysql_query($uns);
	 }
}
if($_GET["did"])
{
	$did=$_GET["did"];
	$delQry="delete from tbl_complaint where complaint_id='$did'";
	mysql_query($delQry);
} 
if($_GET["qid"])
{
	$qid=$_GET["qid"];
	$selQry1="select * from tbl_complaint where complaint_id='$qid'";
	$data1=mysql_query($selQry1);
	$row1=mysql_fetch_array($data1);
	$complaint=$row1["complaint_id"];
	$title=$row1["complaint_title"];
	$content=$row1["complaint_content"];
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
    #title {
    width: 96%;
    }
	.title-box h2 {
      margin-top: 60px; /* You can adjust the value (e.g., 20px) to control the positioning */
    }
  </style>
</head>
<body class="bg-all" >
<div class="title-box">
						<h2>File a Complaint</h2>
					</div>
<div align="center">
<form id="form1" name="form1" method="post" action="">
<table width="420" height="211" border="1">
  <tr>
    <td style="background-color: #00cb86;
    color: white;" >Title</td>
    <td>
      <label for="title"></label>
      <input type="text" name="title" id="title" value="<?php echo $title ?>"  />
      <input type="hidden"  name="txt_hid" value="<?php echo $complaint?>" />
   </td>
  </tr>
  <tr>
    <td style="background-color: #00cb86;
    color: white;">complaint</td>
    <td><label for="complaint"></label>
      <textarea required name="complaint" id="complaint" cols="45" rows="5"><?php echo $content ?></textarea></td>
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
						<h2>My Complaints</h2>
					</div>
<table width="515" height="97" border="1">
  <tr style="background-color: #00cb86;
    color: white;" >
    <td>Sl No</td>
    <td>Title</td>
    <td>Complaint</td>
    <td>Reply</td>
    <td>Date</td>
    <td>Action</td>
  </tr>
   <?php
  		$i=0;
  		$selQry="select * from tbl_complaint where user_id='".$_SESSION["uid"]."'";
		$data=mysql_query($selQry);
		while($row=mysql_fetch_array($data))
		{
			$i++;
			?>
    <tr>
   <td><?php echo $i?> </td>
    <td><?php echo $row["complaint_title"]?></td>
    <td><?php echo $row["complaint_content"]?></td>
    <td><?php echo $row["complaint_reply"]?></td>
    <td><?php echo $row["complaint_date"]?></td>
    <td><a href ="complaint.php?qid=<?php echo $row["complaint_id"]?>"class="text-primary">edit/<a href ="complaint.php?did=<?php echo $row["complaint_id"]?>"class="text-danger">delete
    </td>
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