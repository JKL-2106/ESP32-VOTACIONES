<?php
$servername = "localhost";
$username = "root"; // Cambia si usas otro usuario
$password = "7894561230"; // Cambia si tienes contraseña
$dbname = "evaluaciones_ESP32"; // Tu base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Configuración para admitir caracteres especiales
$conn->set_charset("utf8");
?>
