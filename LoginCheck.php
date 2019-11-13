<?php
session_start();
if(isset($_POST['submit']))
{ if(empty($_POST['id']) || empty($_POST['pass']) )
	{echo "field cannot be empty";}
else
{ 
	$uid= $_POST['id'];
	$pass= $_POST['pass'];
	
	$myfile = fopen('user.text','r');
	while(!feof($myfile))
	{$line = fgets($myfile);
	$data= explode("|",$line);
	if($uid==$data[0] && $pass==$data[1])
	{$_SESSION['id']=$uid;
	$_SESSION['pass']=$pass;
	$_SESSION['name']=$data[2];
	setcookie('user',$data[3], time()+3600,"/");
	
	fclose($myfile);
	header('location: Home.php');
}

}
		
	
}
}
else{header('location: SignIn.html');}

?>