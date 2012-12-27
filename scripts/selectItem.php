<?php
session_start();
require_once("./configuration/config.php");

function todos() {

	$todouserid = $_SESSION['userId'];

	$result = mysql_query("SELECT todo, id FROM todoItems WHERE userId='$todouserid'"); // Query database for all of the current user's todo items

	while($row = mysql_fetch_array($result))
  		{
  			echo "<li id='" . $row['id'] . "'>" . $row['todo'] . " <button class='delete'>X</button></li>"; // Display the current user's todo items in a list
  		}
}

?>