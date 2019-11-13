<?php
session_start();
if(isset($_SESSION['id']))
{
?>
<htm>
<body>
<center> <b>Profile</b> </center><br><br>
<center><table border="1" height= "40%" width= "80%">




<tr> 
<td height= "" width= "40%"> id</td>

<td height= "" width= "40%"><?=$_SESSION['id'];?></td>
</tr>
<tr>
<td> Name</td>

<td height= "" width= "40%"><?=$_SESSION['name'];?></td>
</tr>
<tr>
<td> User Type</td>

<td height= "" width= "40%"><?=$_COOKIE['user'];?></td>
</tr>
<tr>
<td  height= "" width= "80%"colspan= "2"> <a href= "Home.php"> Go home </a> </td>

</tr>

<tr> 


</table></center>
</body>
</html>
<?php
}
?>