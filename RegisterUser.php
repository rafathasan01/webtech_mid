<?php
if(isset($_POST['submit']))
{ if(empty($_POST['id']) || empty($_POST['pass']) || empty($_POST['confirmpass']) || empty($_POST['name']) ||empty($_POST['user']))
	{echo "field cannot be empty";}
else
{if($_POST['pass']== $_POST['confirmpass'])
	{$uid= $_POST['id'];
	$pass= $_POST['pass'];
	$name= $_POST['name'];
	$user= $_POST['user'];
	$myfile = fopen('user.text','a');
	fwrite($myfile,"$uid|$pass|$name|$user\r\n");
	fclose($myfile);
	header('location: SignIn.html');
}
else {echo "password doesnt match";}
}
}
else{header('location: Registration.html');}

?>