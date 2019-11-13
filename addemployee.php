<?php


if(isset($_POST['submit']))
{ if(empty($_POST['Id']) || empty($_POST['Name']) || empty($_POST['DOB']) || empty($_POST['add']) ||empty($_POST['Password'] ) ||empty($_POST['ConfirmPassword'])|| empty($_POST['gender'])|| empty($_POST['Employee'])||empty($_POST['Phn']))
	{echo "field cannot be empty";}
else
{if($_POST['Password']== $_POST['ConfirmPassword'])
	{$uid= $_POST['Id'];
	$name= $_POST['Name'];
	$dob= $_POST['DOB'];
	$pass= $_POST['Password'];
	$gender= $_POST['gender'];
    $add= $_POST['add'];
	$user= $_POST['Employee'];
	$Phn= $_POST['Phn'];

	$_SESSION["ID"] =$_POST['Id'];
	
	
	$myfile = fopen('employee.text','a');
	fwrite($myfile,"$uid|$pass|$name|$dob|$gender|$add|$Phn|$user\r\n");
	fclose($myfile);
	header('location: AddEmloyee.html');
}
else {echo "password doesnt match";}
}
}
else{header('location: AddEmployee.html');}

?>