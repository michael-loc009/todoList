<?php
session_start();

require_once("../configuration/config.php");

$email     = $_POST['email'];
$password  = $_POST['password'];

$result = mysql_query("SELECT id, firstname, lastname, email FROM users WHERE email='$email' AND password='$password' LIMIT 1") or die(mysql_error()); // Query database to find a user with the email and password entered into the login form
$row    = mysql_fetch_array($result); // Select rows returned

$count = mysql_num_rows($result); Select number of rows returned

// Number of rows return should be one because there should exist only one unique user with the email and password entered into the login form
if($count == 1) {
	$_SESSION['userId']    = $row[0];
    $_SESSION['firstname'] = $row[1];
    $_SESSION['lastname']  = $row[2];
    $_SESSION['email']     = $row[3];
    
    header("Location: ../todoList.php"); // redirect user to their todo list
} else {
    header("Location: ../"); // redirect user back to the home page if they enter an invalid email and password
}

?>