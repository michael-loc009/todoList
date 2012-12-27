<?php
session_start();

require_once("../configuration/config.php");

$todoItem  = $_POST['todoItem'];
$userId = $_SESSION['userId'];

mysql_query("INSERT INTO todoItems (todo, userId) VALUES ('$todoItem', '$userId')"); // Insert todo item to with the current user's id

header("Location: ../todoList.php");
?>