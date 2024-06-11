<?php
$servername = "localhost";
$username = "id22216403_si";
$password = "a12345678@A";
$dbname = "id22216403_papus";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
