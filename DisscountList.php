<?php
header("Content-type: text");

echo "<html>
<head>
	<title>Disscount List</title>
</head>
<body">
$file = fopen('Disscount.text','rt') ;
?>

<center>
	<h1>Discount Offer</h1><br>

<img src="logo2.png" width ="30%" height="20%" align="left">
 <img src="logo2.png" width ="30%" height="20%" align="center">
 <img src="logo2.png" width ="30%" height="20%" align="right"><br><br>

    <a href="Disscount.html">Add Disscount</a><br><br>
                    

<table border="2" width="80%" height="" align="center" bgcolor=" #C70039
">
	
<th height="" width="">Hotel Name</th>
<th height="" width="">Location</th>
<th height="" width="">Offer</th>
<th height="" width="">Offer validity</th>


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
