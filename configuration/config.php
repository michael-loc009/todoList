<?php

define(DB_NAME, "todoList");
define(DB_HOST, "localhost");
define(DB_USERNAME, "root");
define(DB_PASSWORD, "");

$con = mysql_connect(DB_HOST, DB_USERNAME, DB_PASSWORD);

if(!$con) {
	die('Could not connect: ' . mysql_error());
}


mysql_select_db(DB_NAME, $con);

?>