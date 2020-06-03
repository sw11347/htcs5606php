<?php
include_once "dbconnection.php";
session_start();
$_SESSION["username"] = $username;

show_profile($username);
?>
<p><a href="logout.php">Logout</a></p>
