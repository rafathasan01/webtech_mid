<?php
header("Content-type: text");

echo "<html>
<head>
	<title>TOTAL ROOMS BOOKED</title>
</head>
<body">
$file = fopen('totalroomboked.text','rj') ;
?>

<center>
	<h1>TOTAL ROOMS BOOKED</h1><br>

 <img src="r1.jpg" width ="30%" height="20%" align="left">
 <img src="r2.jpg" width ="30%" height="20%" align="center">
 <img src="r3.jpg" width ="30%" height="20%" align="right"><br><br>          

<table border="2" width="80%" height="40%" align="center" colspan="2" bgcolor=" #7535e4
" >
	
<th height="" width="10%">Hotel Name</th>
<th height="" width="10%">Rooms Available</th>
<th height="" width="20%">Rooms Booked</th>
<th height="" width="10%">Location</th>
<th height="" width="5%">Catagory</th>
<th height="" width="15%">Ranking</th>


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
