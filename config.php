<?php 

$server = "localhost";
$username = "id16960265_username_login_register";
$password = "ssd~E=gCKP|J4YU~";
$database = "id16960265_login_register";

$conn = mysqli_connect($server, $username, $password, $database); // $conn is used to establish a connection with 

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>"); // if connection is not established, show error 
}

// This code is included on every page where a connection to the database is required (common code)

?>
