<?php 

$host = 'localhost:3310';
$username = "root";
$password = "";
$database = "bistro";

$conn = mysqli_connect( $host, $username, $password, $database);

if (!$conn) {
    die("Connection failed " . mysqli_connect_error());
}