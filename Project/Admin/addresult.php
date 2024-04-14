<?php
include("..\Assets\Connection\Connection.php");
include("Head.php");
if(isset($_POST['submit']))
{
	
	$result=$_FILES['result']['name'];
	$resulttemp=$_FILES['result']['tmp_name'];
	move_uploaded_file($resulttemp, '../Assets/Files/User/Result/'.$result);
	$bid=$_GET["bid"];
	$ins="insert into tbl_result(result_content,booking_id)
	values('".$result."','".$bid."')";
 	if(mysql_query($ins))
	{
	$upQry="update tbl_booking set booking_status=4 where booking_id='".$_GET["bid"]."'";
	mysql_query($upQry);	
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<p align="center" style="font-size: 20px;"><strong><u>RESULT</u></strong></p>
<div align="center">
<form id="form1" name="form1" enctype="multipart/form-data" method="post" action=""> 
  <table  width="500" height="200" border="1" style="font-size: 18px; text-align: center;">
    <tr>
    <td width="176" style="font-size: 20px;">Result</td>
    <td width="296" style="text-align: left;">
      <label for="result"></label>
      <input required type="file" name="result" id="result" style="width: 95%;"/>
   </td>
  </tr>
  <tr>
    <td colspan="2">
      <div align="center">
        <input type="submit" name="submit" id="submit" value="Submit" style="font-size: 20px; width: 100px; height: 40px; background-color: #5D87FF; color: white;" />
      </div>
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