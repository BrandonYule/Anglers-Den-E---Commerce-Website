<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "angler-den";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);
$conn = New mysqli('localhost', 'root','','angler-den');
// Check connection
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
}

?>