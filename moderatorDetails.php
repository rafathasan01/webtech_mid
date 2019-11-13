<?php
header("Content-type: text");

echo "<html>
<head>
	<title>Moderator List</title>
</head>
<body">
$file = fopen('moderator.text','ra') ;
?>

<center>
	<h1>Moderator List</h1><br>

	<img src="logo3.png" width ="30%" height="20%" align="left">
 <img src="logo3.png" width ="30%" height="20%" align="center">
 <img src="logo3.png" width ="30%" height="20%" align="right"><br><br>

    <a href="AddModerator.html">Add Moderstor</a><br><br>
	
                    

<table border="2" width="80%" height="40%" align="center" colspan="2" bgcolor=" #35e44d
">
	
<th height="" width="10%">Id</th>
<th height="" width="10%">Password</th>
<th height="" width="20%">Name</th>
<th height="" width="10%">Date Of Birth</th>
<th height="" width="5%">Gender</th>
<th height="" width="15%">Address</th>
<th height="" width="15%">Phone Number</th>
<th height="" width="10%">Type</th>


<?php
 
while(($row = fgets($file)) != false) {
	
	$col = explode("|",$row);
	echo "</tr>";
	echo "<tr>";
	foreach($col as $data) {
			
			echo "<td>". trim($data)."</td>";
	}
	echo "</tr>";
}
?>






</table>
</center>
<center><a href= "Home.php"> Go home </a></center>


</body>
</html>
