<?php
$servername = "localhost";
$username = "Admin1";
$password = "1234";
$dbname = "conferencia";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>