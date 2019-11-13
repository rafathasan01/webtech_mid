<?php
header("Content-type: text");

echo "<html>
<head>
	<title>HOTEL RANKING</title>
</head>
<body">
$file = fopen('hotelranks.text','rj') ;
?>

<center>
	<h1>HOTEL RANKING</h1><br><br>

 <img src="1.jpg" width ="30%" height="20%" align="left">
 <img src="2.jpg" width ="30%" height="20%" align="center">
 <img src="3.jpg" width ="30%" height="20%" align="right"><br><br>

<table border="2" width="80%" height="40%" align="center" colspan="2" bgcolor="#e235e4">
	
<th height="" width="10%">Hotel Name</th>
<th height="" width="10%">Location</th>
<th height="" width="20%">Total Rooms</th>
<th height="" width="10%">Catagory</th>
<th height="" width="5%">Ranking</th>



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
