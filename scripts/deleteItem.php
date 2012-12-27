<?php
session_start();
require_once("../configuration/config.php");

$id = $_POST['id'];

mysql_query("DELETE FROM todoItems WHERE id='$id'") or die(mysql_error()); // Delete item that was clicked on from todo list

?>