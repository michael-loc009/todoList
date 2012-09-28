<?php
session_start();

require_once("../configuration/config.php");

$firstname = $_POST['firstname'];
$lastname  = $_POST['lastname'];
$email     = $_POST['email'];

$result = mysql_query("SELECT firstname, lastname, email FROM users WHERE firstname='$firstname' AND lastname='$lastname' AND email='$email' LIMIT 1") or die(mysql_error());
$row = mysql_fetch_array($result);

$count = mysql_num_rows($result);

if($count == 1) {
    $_SESSION['firstname'] = $row[0];
    $_SESSION['lastname']  = $row[1];
    $_SESSION['email']     = $row[2];
    
    header("Location: ../todoList.php");
} else {
    echo "Invalid Login Info.";
}

?>