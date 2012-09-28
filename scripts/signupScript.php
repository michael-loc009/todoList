<?php

require_once("../configuration/config.php");

$firstname = $_POST['firstname'];
$lastname  = $_POST['lastname'];
$email     = $_POST['email'];

$insert = mysql_query("INSERT INTO users (firstname, lastname, email) Values('$firstname', '$lastname', '$email')");

if(isset($insert)) {
	header("Location: todoList.html");
}
?>