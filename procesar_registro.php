<?php
$servername = "127.0.0.1:3306";
$username = "Admin1";
$password = "1234";
$dbname = "conferencia";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$nombre = mysqli_real_escape_string($conn, $_POST['nombre']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$telefono = mysqli_real_escape_string($conn, $_POST['telefono']);
$mensaje = mysqli_real_escape_string($conn, $_POST['mensaje']);

$sql = "INSERT INTO registros (nombre, email, telefono, mensaje) 
        VALUES ('$nombre', '$email', '$telefono', '$mensaje')";

if ($conn->query($sql) === TRUE) {
    echo "Registro exitoso. Gracias por registrarte.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
include 'conexion.php';
$conn->close();
?>