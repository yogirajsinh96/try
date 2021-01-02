<?php
	include_once "conn.php";
	if (isset($_POST['submit'])){
		$name=$_POST['emp_name'];
		$mobile_num=$_POST['mo_name'];
		$email=$_POST['email'];
		$age=$_POST['age'];
		$exp=$_POST['exp'];
		$skill="";
		if(isset($_POST['skill1'])){
		$skill=$skill.$_POST['skill1'];
		}
		
		if(isset($_POST['skill2'])){
			if(isset($_POST['skill1'])){
			$skill=$skill. " , ".$_POST['skill2'];
		}else{
			$skill=$skill.$_POST['skill2'];
		}		
		}
		
		$file=$_POST['file'];
		
		//echo $name." , ".$mobile_num." , ".$email." , ".$age." , ".$exp." , ".$skill1." , ".$skill2." , ".$file;
		
		$query= "insert into employee (emp_name,emp_mobile_number,emp_email,emp_age,emp_exp,emp_skill,emp_file) values ('".$name."' , ".$mobile_num." , '".$email."' , ".$age." , ".$exp." , '".$skill."' ,' ".$file."')";
		$chk=mysqli_query($con,$query);
		echo $query;
		if($chk){
			echo "inserted";
		}else{
			echo $chk;
		}
	}

?>

<html>
<head>
	<title>Employee Details</title>
</head>
<body>
	<center>
		<form method="post" action="#">
		<table>
			<tr>
			<td>
		Name : </td><td><input id="emp_name" name="emp_name" type="text" required/><td></tr>
<tr>
			<td>
			Mobile Number : </td><td><input id="mo_name" minlength="10" name="mo_name" type="text" required/><td></tr>
			<tr>
			<td>
			Email :</td><td> <input id="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" type="text" required/><td></tr>
			<tr>
			<td>
			Age :</td><td> <input id="age" name="age" type="number" min="20" max="30" required/><td></tr>
			<tr>
			<td>
			Employee Exp. : </td><td><input id="exp" name="exp" type="text" required/><td></tr>
			<tr>
			<td>
			Employee skill :</td><td> <input id="skill1" name="skill1" type="checkbox" value="java" />java  <input id="skill2" name="skill2" type="checkbox" value="java script" />java script <td></tr>
			<tr>
			<td>
			Resume :</td><td> <input id="file" name="file" type="file" required/><td></tr>
			
					<tr>
			<td></td><td>
			<input type="submit" name="submit" value="submit"/><td></tr>
			</table>
		</form>
	</center>
</body>
</html>