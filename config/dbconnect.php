<?php 

/* Credentials */
$host = "localhost";
$username = "root";
$password = "";
$database = "atiweb";


/* Connection */
$conn = new mysqli($host, $username, $password, $database);

/* If connection fails for some reason */
if ($conn->connect_error) {
	die("Database connection failed: ". $conn->connect_error);
}

?>