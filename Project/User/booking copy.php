<?php
include("..\Assets\Connection\Connection.php");
include("Header.php");
session_start();
$userid=$_SESSION['uid'];
$subname="";

if(isset($_POST["submit"]))
{
 $fortime=$_POST["fortime"];
 $fordate=$_POST["fordate"];
 $place=$_POST["place"];
 $testname=$_POST["test"];
 

 
 $ins="insert into tbl_booking(booking_time,booking_date,user_id,place_id,test_id,booked_datetime)values('$fortime','$fordate','$userid','$place','$testname',Now())";
 mysql_query($ins);
 
 
 
 $selQryBooking="select max(booking_id) as id from tbl_booking b inner join tbl_test t on t.test_id=b.test_id where user_id=".$_SESSION['uid'];
 $resBooking=mysql_query($selQryBooking);
 $bookingData=mysql_fetch_array($resBooking);
 $_SESSION["rate"]=$bookingData["test_price"];
 header("location: Payment.php?bid=".$bookingData['id']);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<p align="center"><strong><u>BOOKINGS</u></strong></p>
<div align="center">
<form id="form2" name="form2" method="post" action="">
<table width="492" height="378" border="1">
<tr>
    <td>For Date</td>
    <td>
      <label for="fordate"></label>
      <input required type="date" name="fordate" id="fordate" onchange="checkForDate()" />
   </td>
  </tr>
  <tr>
    <td width="99"> For Time</td>
    <td width="85">
      <label for="fortime"></label>
      <input required type="time" name="fortime" id="fortime" />
    </td>
  </tr>
  
  <tr>
    <td>Place</td>
    <td>
      <label for="place"></label>
      <select required name="place" id="place">
        <option>---select---</option> 
        <?php
	  $sel="select * from tbl_place";
	  $data=mysql_query($sel);
	  while($row=mysql_fetch_array($data))
	  {
		  
	  ?>
        <option value="<?php echo $row["place_id"]?>"><?php echo $row["place_name"]?></option>
        <?php
	  }
	  ?>
        </select>
      </td>
  </tr>
  <tr>
    <td>Category</td>
    <td><label for="category"></label>
      <select required name="category" id="category" onchange="getSubCategory(this.value)">
        <option value="">---Select---</option>
        <?php
	  $sel="select * from tbl_category";
	  $data=mysql_query($sel);
	  while($row=mysql_fetch_array($data))
	  {
		  
	  ?>
        <option value="<?php echo $row["category_id"]?>"><?php echo $row["category_name"]?></option>
        <?php
	  }
	  ?>
      </select></td>
  </tr>
  <tr>
    <td>Sub Category</td>
    <td><label for="subcategory"></label>
      <select required name="subcategory" id="subcategory" onchange="getTest(this.value)">
      <option>--Select--</option>
    </select></td>
  </tr>
  <tr>
    <td>Test Name</td>
    <td>
      <label for="test"></label>
      <select required name="test" id="test" >
      <option>--Select--</option>
      </select>
  </td>
  </tr>
  <tr>
    <td colspan="2">
      <div align="center">
        <input type="reset" name="cancel" id="cancel" value="Cancel" />
        <input type="submit" name="submit" id="submit" value="Book" />
      </div>
    </td>
  </tr>         
</table>
</form>
</div>
</body>
<script src="../Assets/JQ/jQuery.js"></script>
<script>
function getSubCategory(did)
{
	$.ajax({
		url:"../Assets/AjaxPages/AjaxSubCategory.php?sid="+did,
		success: function(html){
			$("#subcategory").html(html);
		}
	});
}
function getTest(sid)
{
	$.ajax({
		url:"../Assets/AjaxPages/AjaxTest.php?tid="+sid,
		success: function(html){
			$("#test").html(html);
		}
	});
}
function checkForDate() {
    var fordateInput = document.getElementById("fordate");
    var fortimeInput = document.getElementById("fortime");
    
    var currentDate = new Date();
    var selectedDate = new Date(fordateInput.value);
    
    if (selectedDate.toDateString() === currentDate.toDateString()) {
      
        currentDate.setHours(currentDate.getHours() + 3);
        var hours = String(currentDate.getHours()).padStart(2, '0');
        var minutes = String(currentDate.getMinutes()).padStart(2, '0');
        var minTime = hours + ':' + minutes;
        fortimeInput.min = minTime;
        fortimeInput.value = minTime;
    } else {
        
        fortimeInput.min = "";
        fortimeInput.value = "";
    }
    

    var minTimeValue = fortimeInput.min;
    var timeOptions = fortimeInput.getElementsByTagName("option");
    
    for (var i = 0; i < timeOptions.length; i++) {
        var timeOption = timeOptions[i];
        if (timeOption.value < minTimeValue) {
            timeOption.disabled = true;
        } else {
            timeOption.disabled = false;
        }
    }
}

</script>
</html>
<?php
include("Footer.php");
?>