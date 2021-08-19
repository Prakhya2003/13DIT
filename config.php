<?php 

$server = "localhost";
$username = "id16960265_username_login_register";
$password = "ssd~E=gCKP|J4YU~";
$database = "id16960265_login_register";

$conn = mysqli_connect($server, $username, $password, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>

