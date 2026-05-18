<?php
// includes/dbconnect.php
$servername = "localhost";
$username = "root";
$password = "";
$database = "farmconnect"; // Keeping original typo as per user's old dbconnect

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    // We suppress the die during development or show a clean error
    // die("Connection failed: " . mysqli_connect_error());
}
?>
