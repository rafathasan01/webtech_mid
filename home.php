<!DOCTYPE html>
<?php
session_start();
if(isset($_SESSION['id']))
{ $user= trim($_COOKIE['user']);
if( $user == "Admin")
	{	
?>
<html>
<head><title>Admin Panel</title>
</head>
<body>
<table border = "2" width="80%" height="" align="center" bgcolor="#e4b63b">
<tr><td>
<img src="a.jpg" width ="20%" height="20%" align="left">
<center><h1>WELCOME TO OUR HOTEL</h1><p>
<a href="logout.php"><button type="button" size="10" style="color:red;">Log Out</button></a>
<a href="Profile.php"><button type="button" size="10" style="color:green;">Profile</button></a>

</center>
</td></tr>
</table>


<center><img src="logo1.png" width="300px" height="150px"><br>
<h1>Welcome <font color="red"><?=$_SESSION['name'];?></font></h1></center><br><hr>

<table border="1" width="50%" align="center">
	<tr>
		<td bgcolor="#C70039">
			<a href="hotelranks.php"><button type="button" size="10" style="color:green;">Hotels Ranking List</button></a>
		</td>
		<td>
			<img src="1.jpg" width="100px" height="70px" align="center">
		</td>
	</tr>
	<tr>
		<td bgcolor=" #FFC300 ">
			<a href="DisscountList.php"><button type="button" size="10" style="color:maroon;">New Discount/ Offer Update</button></a>
		</td>
		<td>
			<img src="logo2.png" width="100px" height="70px" align="center">
		</td>
	</tr>
	<tr>
		<td bgcolor=" #DAF7A6 ">
			<a href="moderatorDetails.php"><button type="button" size="10" style="color:blue;">View Moderator's List</button></a>
		</td>
		<td>
			<img src="logo3.png" width="100px" height="70px" align="center">
		</td>
	</tr>
	<tr>
		<td bgcolor=" #581845 ">
			<a href="EmployeeDetails.php"><button type="button" size="10" style="color:red;">View Employee's List</button></a>
		</td>
		<td>
			<img src="logo4.png" width="100px" height="70px" align="center">
		</td>
	</tr>
	<tr>
		<td bgcolor="#b6e435">
			<a href="CustomerDetails.php"><button type="button" size="10" style="color:fuchsia;">View Customer's List</button></a>
		</td>
		<td>
			<img src="4.jpg" width="100px" height="70px" align="center">
		</td>
	</tr>
	<tr>
		<td bgcolor="#e235e4">
			<a href="totalroombooked.php"><button type="button" size="10" style="color:navy;">View Total Rooms Book</button></a></b>
		</td>
		<td>
			<img src="5.jpg" width="100px" height="70px" align="center">
		</td>
	</tr>
	
</table><hr><br><br>


<center><text>All rights reserved to OUR HOTEL | Privacy Policy | Terms & Conditions</text></center>





	
</body>
</html>

<?php
}
elseif ( $user == "User")
{

?>


<html>
<body>
<h1>CUSTOMER LOG IN SUCCESS!!!</h1><br>
<a href="logout.php"><button type="button" size="10">Log Out</button></a>
<a href="Profile.php"><button type="button" size="10">Profile</button></a>
<body>
</html>

<?php
}
else if ( $user == "Moderator")
	{

?>

<html>
<body>
<h1>MODERATOR LOG IN SUCCESS!!!</h1><br>
<a href="logout.php"><button type="button" size="10">Log Out</button></a>
<a href="Profile.php"><button type="button" size="10">Profile</button></a>
<body>
</html>

<?php
}
else
{

?>
<html>
<body>
<h1>EMPLOYEE LOG IN SUCCESS!!!</h1><br>
<a href="logout.php"><button type="button" size="10">Log Out</button></a>
<a href="Profile.php"><button type="button" size="10">Profile</button></a>
<body>
</html>

<?php
}}
?>