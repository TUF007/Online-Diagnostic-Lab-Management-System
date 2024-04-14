<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
include("..\Assets\Connection\Connection.php");
include("Head.php");
if(isset($_POST['submit']))
{
	$uname=$_POST["name"];
	$email=$_POST["email"];
	$add=$_POST["address"];
	$pwd=$_POST["pwd"];
	$contact=$_POST["contact"];
	$place=$_POST["place"];
  $age=$_POST["age"];
  $gender=$_POST["gender"];
	$proof=$_FILES['proof']['name'];
	$prooftemp=$_FILES['proof']['tmp_name'];
	move_uploaded_file($prooftemp, '../Assets/Files/Staff/Proof/'.$proof);
	$photo=$_FILES['photo']['name'];
	$phototemp=$_FILES['photo']['tmp_name'];
	move_uploaded_file($phototemp, '../Assets/Files/Staff/Photo/'.$photo);
	
	$ins="insert into tbl_staff(staff_name,staff_address,staff_proof,staff_email,staff_password,staff_photo,place_id,staff_contact,staff_age,staff_gender)
	values('".$uname."','".$add."','".$proof."','".$email."','".$pwd."','".$photo."','".$place."','".$contact."','".$age."','".$gender."')";
 mysql_query($ins);

}
{
	$did=$_GET["did"];
	$delQry="delete from tbl_staff where staff_id='$did'";
	mysql_query($delQry);
}
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
    .gender-label {
        margin-right: 10px; /* Adjust the margin as needed for spacing */
    }
    
	.stafflist{
      margin-top: 60px; /* You can adjust the value (e.g., 20px) to control the positioning */
    }
  </style>
</head>

<body>
<p align="center" style="font-size: 20px"  ><strong><u>STAFF REGISTRATION</u></strong></p>
<div align="center">
<form id="form1" name="form1" method="post" action="" enctype="multipart/form-data">
<table width="842" height="800" border="1" style="font-size: 18px; text-align: center;">
  <tr>
    <td width="176" style="font-size: 20px;">Name</td>
    <td width="296" style="text-align: left;">
      <label for="name"></label>
      <input required type="text" name="name" id="name" title="Name Allows Only Alphabets,Spaces and First Letter Must Be Capital Letter" pattern="^[A-Z]+[a-zA-Z ]*$" style="width: 95%;"/>
    </td>
  </tr>
  <tr>
    <td width="176" style="font-size: 20px;">Email</td>
    <td width="296" style="text-align: left;">
      <label for="email"></label>
      <input type="email" required name="email" id="email"style="width: 95%;" />
   </td>
  </tr>
  <tr>
    <td width="176" style="font-size: 20px;">Address</td>
    <td width="296" style="text-align: left;"> 
      <label for="address"></label>
      <textarea name="address" id="address" cols="45" rows="5" required style="width: 95%;" ></textarea>
      </td>
  </tr>
  <tr>
    <td width="176" style="font-size: 20px;" >Contact No</td>
    <td width="296" style="text-align: left;"><label for="contact"></label>
      <input type="text" required name="contact" id="contact"  pattern="[7-9]{1}[0-9]{9}" 
                title="Phone number with 7-9 and remaing 9 digit with 0-9" style="width: 95%;"/></td>
  </tr>
  <tr>
    <td width="176" style="font-size: 20px;">Place</td>
    <td width="296" style="text-align: left;"> 
      <label for="place"></label>
      <select required name="place" style="width: 95%;">
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
    <td width="176" style="font-size: 20px;">Age</td>
    <td width="296" style="text-align: left;">
        <input type="number" name="age" required style="width: 95%;">
    </td>
</tr>
<tr>
    <td width="176" style="font-size: 20px;">Gender</td>
    <td width="296" style="text-align: left;">
        <span style="margin-left: 80px;">
        <input type="radio" name="gender" value="Male" id="male"><label for="male"style="margin-left: 10px;" >Male</label>
        <span style="margin-left: 150px;"></span><!-- Add an empty span with margin to create space -->
        <input type="radio" name="gender" value="Female" id="female"><label for="female" style="margin-left: 10px;">Female</label>

    </td>
</tr>

  <tr>
    <td width="176" style="font-size: 20px;">Proof</td>
    <td width="296" style="text-align: left;">
      <label for="proof"></label>
      <input type="file" name="proof" id="proof" style="width: 95%;"/>
    </td>
  </tr>
  <tr>
    <td width="176" style="font-size: 20px;" >Photo</td>
    <td width="296" style="text-align: left;" >
      <label for="photo"></label>
      <input type="file" name="photo" id="photo" style="width: 95%;"/>
      </td>
  </tr>
  <tr>
    <td width="176" style="font-size: 20px;">Password</td>
    <td width="296" style="text-align: left;" ><label for="pwd"></label>
      <input type="password" name="pwd" id="pwd" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" style="width: 95%;"/></td>
  </tr>
  <tr>
    <td width="176" style="font-size: 20px;" >Re-Password</td>
    <td width="296" style="text-align: left;" ><label for="conpwd"></label>
      <input type="password" required name="conpwd" id="conpwd" style="width: 95%;"/></td>
  </tr>
  <tr>
    <td colspan="2">
      <div align="center">
      <input type="submit" name="submit" id="submit" value="Submit" style="font-size: 20px; width: 100px; height: 40px; background-color: #5D87FF; color: white;" />  
      <input type="reset" name="cancel" id="cancel" value="Cancel" style="font-size: 20px; width: 100px; height: 40px; background-color: #5D87FF; color: white;" />
      </div>
   </td>
  </tr>
 </table>
</form>
<p align="center">&nbsp;</p>
<p align="center" style="font-size: 20px" class="stafflist"><strong><u>STAFF LIST</u></strong></p>
<table width="200"  style="border: 1px solid black;" class="table table-bordered">
<tr>
    <td><strong>Sl no</strong></td>
    <td><strong>Name</strong></td>
    <td><strong>Address</strong></td>
    <td><strong>Age</strong></td>
    <td><strong>Gender</strong></td>
    <td><strong>Contact No</strong></td>
    <td><strong>Email</strong></td>
    <td><strong>Password</strong></td>
    <td><strong>Action</strong></td>
</tr>

  <tr>
   <?php
  		$i=0;
  		$selQry="select * from tbl_staff";
		$data=mysql_query($selQry);
		while($row=mysql_fetch_array($data))
		{
			$i++;
			?>
   <td><?php echo $i?>  </td>
    <td><?php echo $row["staff_name"]?></td>
    <td><?php echo $row["staff_address"]?></td>
    <td><?php echo $row["staff_age"]?></td>
    <td><?php echo $row["staff_gender"]?></td>
    <td><?php echo $row["staff_contact"]?></td>
    <td><?php echo $row["staff_email"]?></td>
    <td><?php echo $row["staff_password"]?></td>
    <td><a href = "staffregistration.php?did=<?php echo $row["staff_id"]?>" class="text-danger">Delete</td>
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
