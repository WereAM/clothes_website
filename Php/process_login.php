<?php
session_start();
require_once("connect.php");

if (isset($_POST['Login']))
{
	$email = $_POST['email'];
	$Password = $_POST['password'];

	$query = "SELECT * FROM Users WHERE email = '$email' AND password = '$password'";
	$qry = mysqli_query($conn, $query);
	$usertypes = mysqli_fetch_array($qry);

	$_SESSION['User'] = $firstname;
	header("location: dashboard.php");

}
?>