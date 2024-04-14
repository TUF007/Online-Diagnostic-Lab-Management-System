<?php
$result="";
$number1="";
$number2="";
if(isset($_POST["btn_add"]))
{
 $number1=$_POST["txt_num1"];
 $number2=$_POST["txt_num2"];
 $result=$number1+$number2;
}
if(isset($_POST["btn_sub"]))
{
 $number1=$_POST["txt_num1"];
 $number2=$_POST["txt_num2"];
 $result=$number1-$number2;
}
if(isset($_POST["btn_mult"]))
{
 $number1=$_POST["txt_num1"];
 $number2=$_POST["txt_num2"];
 $result=$number1*$number2;
}
if(isset($_POST["btn_div"]))
{
 $number1=$_POST["txt_num1"];
 $number2=$_POST["txt_num2"];
 $result=$number1/$number2;
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<form id="form1" name="form1" method="post" action="">
<table width="200" border="1" cellpadding="10">
  <tr>
    <td width="59"><p>number1</p></td>
    <td width="89">
      <label for="txt_num1"></label>
      <input type="text" name="txt_num1" id="txt_num1" value=" <?php echo $number1; ?>"/>
   </td>
  </tr>
  <tr>
    <td>number2</td>
    <td><label for="txt_num2"></label>
      <input type="text" name="txt_num2" id="txt_num2" value=" <?php echo $number2; ?>" /></td>
  </tr>
  <tr>
    <td colspan="2"><input type="submit" name="btn_add" id="btn_add" value="add" />
      <input type="submit" name="btn_sub" id="btn_sub" value="Sub" />
      <input type="submit" name="btn_mult" id="btn_mult" value="Mult" />
      <input type="submit" name="btn_div" id="btn_div" value="div" /></td>
    </tr>
  <tr>
    <td>result</td>
    <td><?php echo $result; ?></td>
  </tr>
</table>
</form>
</body>
</html>