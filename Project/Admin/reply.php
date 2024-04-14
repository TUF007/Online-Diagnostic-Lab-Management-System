<?php
include("..\Assets\Connection\Connection.php");
include("Head.php");
$reply=$_POST["reply"];
if(isset($_POST["submit"]))
{
	 $uns="update tbl_complaint set complaint_status=1,complaint_reply='".$reply."' where complaint_id='".$_GET["did"]."'";
	  mysql_query($uns);
	  header("location:viewcomplaints.php");
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<p align="center"><strong><u>REPLY</u></strong></p>
<div align="center">
<form id="form1" name="form1" method="post" action="">
<table width="374" height="198" border="1">
  <tr>
    <td width="58">Reply</td>
    <td width="313">
      <label for="reply"></label>
      <textarea name="reply" id="reply" cols="45" rows="5" required></textarea>
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
</div>
</body>
</html>
<?php
include("Foot.php");
?>