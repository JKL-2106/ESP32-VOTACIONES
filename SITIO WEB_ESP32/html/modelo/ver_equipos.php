<?php
include 'conexion.php';

$sql = "SELECT e.nombre AS equipo, e.calificacion AS calificacion FROM equipos e";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Equipos Registrados:</h2><ul>";
    while($row = $result->fetch_assoc()) {
        echo "<li>" . $row['equipo'] . " - Calificación: " . $row['calificacion'] . "</li>";
    }
    echo "</ul>";
} else {
    echo "No hay equipos registrados.";
}

$conn->close();
?>
