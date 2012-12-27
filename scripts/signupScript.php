<?php

require_once("../configuration/config.php");

$firstname = $_POST['firstname'];
$lastname  = $_POST['lastname'];
$email     = $_POST['email'];
$password  = $_POST['password'];

$insert = mysql_query("INSERT INTO users (firstname, lastname, email, password) Values('$firstname', '$lastname', '$email', '$password')"); // Insert new a user's information in the database

if(isset($insert)) {
	header("Location: ../"); // Redirect new user back to the homepage to login
}
?>