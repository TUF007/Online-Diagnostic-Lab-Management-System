<!DOCTYPE html>
<!--=== Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="../Assets/Templates/User/style.css">
     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title>Regisration Form </title> 
    <style>
        .sumbit-btn{
            display: flex;
    align-items: center;
    justify-content: center;
    height: 45px;
    max-width: 200px;
    width: 100%;
    border: none;
    outline: none;
    color: #fff;
    border-radius: 5px;
    margin: 25px 0;
    background-color: #4070f4;
    transition: all 0.3s linear;
    cursor: pointer;
    padding: 10px 10px;
    margin-right: 5px;
        }
        .radio{
            font-size: 12px;
    font-weight: 500;
    color: #2e2e2e;
    padding-left:6%;
        }
    </style>
   <script>
    function validateEmail() {
        var email = document.getElementById("email").value;
        var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

        if (emailPattern.test(email)) {
            // Valid email
            document.getElementById("emailError").textContent = "";
            return true;
        } else {
            // Invalid email
            document.getElementById("emailError").textContent = "Please enter a valid email address.";
            return false;
        }
    }
</script> 
</head>
<body>
<?php
include("..\Assets\Connection\Connection.php");
if(isset($_POST['submit']))
{
	$uname=$_POST["name"];
	$email=$_POST["email"];
	$add=$_POST["address"];
	$pwd=$_POST["pwd"];
    $cpwd=$_POST["conpwd"];
	$contact=$_POST["contact"];
	$place=$_POST["place"];
    $age=$_POST["age"];
    $gender=$_POST["gender"];
	$proof=$_FILES['proof']['name'];
	$prooftemp=$_FILES['proof']['tmp_name'];
	move_uploaded_file($prooftemp, '../Assets/Files/User/Proof/'.$proof);
	$photo=$_FILES['photo']['name'];
	$phototemp=$_FILES['photo']['tmp_name'];
	move_uploaded_file($phototemp, '../Assets/Files/User/Photo/'.$photo);
	
    if($pwd==$cpwd)
{
	$ins="insert into tbl_user(user_name,user_address,user_proof,user_email,user_password,user_photo,place_id,user_contact,user_age,user_gender)
	values('".$uname."','".$add."','".$proof."','".$email."','".$pwd."','".$photo."','".$place."','".$contact."','".$age."','".$gender."')";
    if(mysql_query($ins)){
        ?>
        <script>
            alert('Registration Successfull')
            </script>
            <?php
    }
    else{
        ?>
        <script>
        alert('Registration Failed')
        </script>
        <?php
    }

}
else{
    ?>
 <script>
            alert('Password Mismatch')
            </script>
    <?php
}
}

?>

    <div class="container">
        <header>User Registration</header>

        <form method="post" enctype="multipart/form-data">
            <div class="form first">
                <div class="details personal">
                    <span class="title">Personal Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>User Name</label>
                            <input type="text" name="name" placeholder="Enter your name" title="Name Allows Only Alphabets,Spaces and First Letter Must Be Capital Letter" pattern="^[A-Z]+[a-zA-Z ]*$" required>
                        </div>

                        <div class="input-field">
                        <label>Email</label>
                        <input type="email" id="email" name="email" placeholder="Enter your email" required>
                        <span id="emailError" style="color: red;"></span>
                        </div>

                        <div class="input-field">
                            <label>Address</label>
                            <input type="text" name="address"  placeholder="Enter your address" required>
                        </div>

                        <div class="input-field">
                            <label>Contact No</label>
                            <input type="number" name="contact" placeholder="Enter your number" pattern="[7-9]{1}[0-9]{9}"  title="Phone number with 7-9 and remaing 9 digit with 0-9" required>
                        </div>

                        <div class="input-field">
                            <label>place</label>
                            <label for="place"></label>
                            <select required name="place" >
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
                        <div class="input-field">
                            <label>Age</label>
                            <input type="text" name="age" placeholder="Enter your age" required>
                        </div>
                        <div class="radio">
                            <label>Gender</label>
                            <input type="radio" name="gender" value="Male" >Male
                            <input type="radio" name="gender" value="Female" >Female
                        </div>
                        <div class="input-field" style="padding-left:4%;">
                            <label >Proof</label>
                            <input type="file" name="proof" placeholder="Enter your proof" style="padding:0px 20px;">
                        </div>
                        <div class="input-field">
                            <label>photo</label>
                            <input type="file" name="photo" placeholder="Enter your photo"s>
                        </div>
                        <div class="input-field">
                            <label>Password</label>
                            <input type="password" name="pwd" placeholder="Enter your password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                        </div>
                        
                        <div class="input-field">
                            <label>Re-Password</label>
                            <input type="password" name="conpwd" placeholder="Enter your re-password" required>
                        </div>
                        
                    <div class="buttons">
                        
                        <button class="sumbit-btn" type="submit" name="submit">
                            <span class="btnText" style="padding:10px 10px">Submit</span>
                            
                        </button>
                        <button class="sumbit" type="reset" name="cancel">
                            <span class="btnText" style="padding:10px 20px">Cancel</span>
                            
                        </button>
                    </div>
                </div> 
            </div>
        </form>
    </div>
    <script src="script.js"></script>
</body>
</html>