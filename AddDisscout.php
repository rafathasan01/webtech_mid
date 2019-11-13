<?php


if(isset($_POST['submit']))
{ if(empty($_POST['Name']) || empty($_POST['add']) || empty($_POST['Offer']) || empty($_POST['OfferValidity']))
	{echo "field cannot be empty";}
else
{
	{
    $name= $_POST['Name'];
	$add= $_POST['add'];
	$offer= $_POST['Offer'];
	$offerv= $_POST['OfferValidity'];
	$myfile = fopen('Disscount.text','a');
	fwrite($myfile,"$name|$add|$offer|$offerv\r\n");
	fclose($myfile);
	header('location: Disscount.html');
}

}
}
else{header('location: AddDisscout.html');}

?>