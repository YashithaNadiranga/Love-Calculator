<?php
	$servername = "localhost";
	$username = "yashitha_love";
	$password = "Yashitha@123";
	$db="yashitha_love";
	// $conn = mysqli_connect($servername, $username, $password,$db);

	$mysqli = new mysqli($servername, $username, $password,$db);

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
?>