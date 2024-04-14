<?php
$name="";
$firstname="";
$lastname="";
$gender="";
$marital="";
$department="";
$bs="";
$ta="";
$da="";
$hra="";
$lic="";
$pf="";
$ded="";
$net="";
if(isset($_POST["submit"]))
{
	$firstname=$_POST["Fname"];
	$lastname=$_POST["Lname"];
	$name=$firstname." ".$lastname;
	$gender=$_POST["gender"];
	$marital=$_POST["marital"];
	$department=$_POST["op"];
	$bs=$_POST["Bsalary"];
	
}
if($gender=="male")
$name="Mr"." ".$name;
if($gender=="female")
{
if($marital=="single")	
$name="Ms"." ".$name;
else
$name="Mrs"." ".$name;
}
if($bs>=10000)
{
	$ta=(40/100)*$bs;
	$da=(35/100)*$bs;
	$hra=(30/100)*$bs;
	$lic=(25/100)*$bs;
	$pf=(20/100)*$bs;
}
else if($bs>=5000 && $bs<10000)
{
	$ta=(35/100)*$bs;
	$da=(30/100)*$bs;
	$hra=(25/100)*$bs;
	$lic=(20/100)*$bs;
	$pf=(15/100)*$bs;
}
else if($bs<5000)
{
	$ta=(30/100)*$bs;
	$da=(25/100)*$bs;
	$hra=(20/100)*$bs;
	$lic=(15/100)*$bs;
	$pf=(5/100)*$bs;
}
$ded=$lic+$pf;
$net=$bs+$ta+$da+$hra-($lic+$pf);
?>
<html> 
<title> Form </title>
</head>
<body>
<form id="form1" name="form1" method="post" action="">

<table border=2>
<tr>
<td> Firstname:</td><td><input type="text" name="Fname">  </td>
</tr>
<tr>
<td> Lastname:</td><td><input type="text" name="Lname">  </td>
</tr>
<tr>
<td> gender</td>:<td> <input type="radio" value="male" name="gender"> male 
                 <input type="radio" value="female" name="gender"> female  </td>
</tr> 
<tr>
<td> maritial</td>:<td> <input type="radio" value="single" name="marital"> single 
                   <input type="radio" value="married" name="marital"> married </td>
</tr>
<tr>
<td>department </td>:<td><select name ="op">
                    <option value="">---select---</option> 
                    <option value="BCA">BCA</option>
                    <option value="Bcom">Bcom</option>
                    <option value="BA">BA</option>
                    </select> </td> </tr>
</tr>
<tr>
<th> Basic Salary </th><td><input type="text" name="Bsalary"> </td>
</tr>
<tr>
<td colspan="2" align="center"><input type="submit" name="submit" value="submit">
            <input type="reset" name="cancel"  value="cancel">
</center>
</td>
</tr>
</table>


<table width="250" border=2>
<tr>
<th width="96">Name</th>
<td width="70"><?php echo $name; ?> </td>
</tr>
<tr>
<th>Gender</th><td><?php echo $gender; ?> 
</td>
</tr>
<tr>
<th>Marital</th>
<td><?php echo $marital; ?> </td>
</tr>
<tr>
<th>Department</th>
<td><?php echo $department; ?></td>
</tr>
<tr>
<th>Basic Salary</th>
<td><?php echo $bs; ?></td>
</tr>
<tr>
<th>T.A</th>
<td><?php echo $ta; ?></td>
</tr>
<tr>
<th>D.A</th>
<td><?php echo $da; ?></td>
</tr>
<tr>
<th>HRA</th>
<td><?php echo $hra; ?></td>
</tr>
<tr>
<th>LIC</th>
<td><?php echo $lic; ?></td>
</tr>
<tr>
<th>P.F</th>
<td><?php echo $pf; ?></td>
</tr>
<tr>
<th>DEDUCTION</th>
<td><?php echo $ded; ?></td>
</tr>
<tr>
<th>NET</th>
<td><?php echo $net; ?></td>
</tr>
</table>
</form>
</html>