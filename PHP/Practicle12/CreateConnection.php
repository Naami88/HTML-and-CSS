<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "user_info";

$db = mysqli_connect($servername, $username, $password, $database);

if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}
?>