<?php

	$result=0;
	
	if(isset($_POST["btn_Add"]))
	{	
		$n1=$_POST["txt_number1"];
		$n2=$_POST["txt_number2"];
		$result=$n1+$n2;
	}
	
	if(isset($_POST["btn_Subtract"]))
	{	
		$n1=$_POST["txt_number1"];
		$n2=$_POST["txt_number2"];
		$result=$n1-$n2;
	}
	
	if(isset($_POST["btn_Multiply"]))
	{	
		$n1=$_POST["txt_number1"];
		$n2=$_POST["txt_number2"];
		$result=$n1*$n2;
	}
	
	if(isset($_POST["btn_Divide"]))
	{	
		$n1=$_POST["txt_number1"];
		$n2=$_POST["txt_number2"];
		$result=$n1/$n2;
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
  <table width="200" border="1">
    <tr>
      <td>Number1</td>
      <td><label for="Number_1"></label>
      <input type="text" name="txt_number1" id="txt_number1" /></td>
    </tr>
    <tr>
      <td>Number2</td>
      <td><label for="Number2"></label>
      <input type="text" name="txt_number2" id="txt_number2" /></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="btn_Add" id="btn_Add" value="Add" />
        <input type="submit" name="btn_Subtract" id="btn_Subtract" value="Subtract" />
        <input type="submit" name="btn_Multiply" id="btn_Multiply" value="Multiply" />
		<input type="submit" name="btn_Divide" id="btn_Divide" value="Divide" />
      </div></td>
    </tr>
    <tr>
      <td>Result</td>
      <td><?php
			echo $result;  
      	?></td>
    </tr>
  </table>
</form>
</body>
</html>