<?php
include("..\Assets\Connection\Connection.php");
ob_start();
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

<body class="bg-all">
<div id="appointment" class="appointment-main">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="title-box">
						<h2>Booking</h2>
						<p>"Effortless Booking for Your Convenience." </p>
					</div>
				</div>
			</div>
			<div class="row">
      <div class="col-lg-6 col-md-6">
    <div class="well-block">
        <div class="well-title">
            <h2>Book a Test</h2>
        </div>
        <form id="form2" name="form2" method="post" action="">
            <!-- Form start -->
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label" for="date">Preferred Date</label>
                        <input required type="date" name="fordate" id="fordate" min="<?php echo date('Y-m-d') ?>" onchange="checkForDate()" class="form-control input-md">
                    </div>
                </div>
                <!-- Select Basic -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label" for="time">Preferred Time</label>
                        <input required type="time" name="fortime" id="fortime" class="form-control input-md">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label" for="cat">Category</label>
                        <select required name="category" id="category" onchange="getSubCategory(this.value)" class="form-control">
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
      </select>
                    </div>
                </div>
                <!-- Select Basic -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label" for="sub">Sub-Category</label>
                        <select required name="subcategory" id="subcategory" onchange="getTest(this.value)" class="form-control" >
      <option>--Select--</option>
    </select>
                    </div>
                </div>
                <!-- Select Basic -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label" for="appointmentfor">Test</label>
                        <select required name="test" id="test" class="form-control">
                            <option>---select---</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label" for="appointmentfor">Place</label>
                        <select required name="place" id="place" class="form-control">
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
                    </div>
                </div>
                <!-- Button -->
                <div class="col-md-12">
                    <div class="form-group">
                        <button id="submit" name="submit" class="new-btn-d br-2">Book Now</button>
                    </div>
                </div>
            </div>
        </form>
        <!-- form end -->
    </div>
            </div>

				<div class="col-lg-6 col-md-6">
					<div class="well-block">
                        <div class="well-title">
                            <h2>Why Make Booking with Us</h2>
                        </div>
                        <div class="feature-block">
                            <div class="feature feature-blurb-text">
                                <h4 class="feature-title">24/7 Hours Available</h4>
                                <div class="feature-content">
                                    <p>Our dedicated team of experienced professionals is always ready to assist you. With years of expertise, they are well-equipped to provide you with the best advice and support for your needs.</p>
                                </div>
                            </div>
                            <div class="feature feature-blurb-text">
                                <h4 class="feature-title">Experienced Staff Available</h4>
                                <div class="feature-content">
                                    <p>Our dedicated team of experienced professionals is always ready to assist you. With years of expertise, they are well-equipped to provide you with the best advice and support for your needs. </p>
                                </div>
                            </div>
                            <div class="feature feature-blurb-text">
                                <h4 class="feature-title">Low Price & Fees</h4>
                                <div class="feature-content">
                                    <p>We are committed to offering our services at competitive prices with minimal fees. We believe in providing high-quality service without burdening your wallet, ensuring great value for your money</p>
                                </div>
                            </div>
                        </div>
                    </div>
				</div>
			</div>
		</div>
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
ob_flush();
?>