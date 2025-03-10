<?php
// Incluir archivo de conexión
include 'CONEXION.php';

// Verificar si se envió el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $nombre_equipo = $_POST['nombre_equipo'];

    // Insertar el nuevo equipo en la base de datos
    $sql = "INSERT INTO equipos (nombre_equipo) VALUES ('$nombre_equipo')";

    if ($conn->query($sql) === TRUE) {
        echo "Nuevo equipo agregado exitosamente";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Cerrar la conexión
$conn->close();
?>
