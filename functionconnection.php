<?php
session_start();
// define database connection parameters
$host = "localhost";
$user = "root";
$password = "";
$database = "mydb";

// create a mysqli connection object and store it in $mysqli variable
$mysqli = mysqli_connect($host, $user, $password, $database);

// check for connection errors
if (!$mysqli) {
  die("Connection failed: " . mysqli_connect_error());
}
else{
	echo "";
}

// select the database you want to work with
mysqli_select_db($mysqli, "mydb");

// rest of your code goes here...

