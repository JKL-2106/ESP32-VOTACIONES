<?php
include 'CONEXION.php'; // incluye la conexión a la base de datos

$equipo_id = $_GET['equipo_id']; // Obtener el ID del equipo desde la URL o un formulario

$sql = "SELECT AVG(calificacion) AS promedio FROM calificaciones WHERE equipo_id = '$equipo_id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo "Promedio de calificación para el equipo: " . $row['promedio'];
} else {
    echo "No hay calificaciones para este equipo.";
}

$conn->close();
?>