<?php

$serverName = "localhost";
$dbName = "home_nha";
$dbUser = "root";
$dbPwd = "";

// connect to the database
$conn = mysqli_connect($serverName, $dbUser, $dbPwd, $dbName);

// check connection
if (!$conn) {
	echo 'Connection error: ' . mysqli_connect_error();
}
