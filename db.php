<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "demo_api";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed");
}
?>