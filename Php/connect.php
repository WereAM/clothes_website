<?php

//Create a connection
$conn = new mysqli("localhost", "MichelleWere", "April(#1404)", "retail_therapy");

//Check connection
if ($conn->connect_error) {
	die("Not Connected".$conn->connect_error);
}
else{
	//echo "Connected Successfully<br>";
}

?>