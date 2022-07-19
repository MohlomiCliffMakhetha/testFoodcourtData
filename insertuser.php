<?php
	$Connection = mysqli connect("databases.000webhost.com", "id18610833_klener","_(Nig{6}9L?+J#tE"); 
	$DateBase = mysqli_select_db($Connection, "id18610833_myklener");

	$EncodedData=file get contents('php://input'); 
	$DecodedData=json_decode($EncodedData, true);

	$Name = $DecodedData['Name']; 
	$Surname = $DecodedData['Surname'];
	$Email = $DecodedData['Email'];
	$Cell = $DecodedData['Cell'];
	$Password = $DecodedData['Password '];
	$Date = $DecodedData['Date'];

	$Query ="insert into userTable(Name,Surname,Email, Cell, Password, Date) values ('$Name', '$Surname', '$Email','$Cell','$Password',$Date)";
	$Read=mysqli_query($Connection,$Query);

	if ($Read)
	{
		$Message="Student has been registered successfully";
	}
	else
	{
		$Message="Server Error.. Please try latter";
	}

	$Response []=array ("Message"=> $Message); 
	echo json encode($Response);
?>
