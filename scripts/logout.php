<?php
session_start();
session_destroy(); // Kill sessinon in order to log out
header("Location: ../"); // Redirect user to homepage once logged out
?>