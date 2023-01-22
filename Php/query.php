<?php

include_once("connect.php");

//Create database
$sql = "CREATE DATABASE retail_therapy";

//Create table
$sql_table = "CREATE TABLE Users(user_ID INT(6) AUTO_INCREMENT PRIMARY KEY, email VARCHAR(30) NOT NULL, firstname VARCHAR(15) NOT NULL, lastname VARCHAR(15) NOT NULL, password VARCHAR(10) NOT NULL, gender VARCHAR(10) NOT NULL)";

$email = $_POST['email'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$password = $_POST['password'];
$gender = $_POST['gender'];

//Insert table
$sql_insert = "INSERT INTO Users(email, firstname, lastname, password, gender) VALUES ('$email', '$firstname', '$lastname', '$password', '$gender')";


if ($conn->query($sql_insert) === TRUE){
	echo "Data Inserted<br>";
}
else{
	echo "Error Inserting Data<br>".$conn->error;
}