<?php
// Conexión a la base de datos
include 'conexion.php';

// Verificar si el formulario fue enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obtener los datos del formulario
    $nombre_equipo = $_POST['nombre_equipo'];

    // Preparar la consulta SQL para insertar el equipo en la base de datos
    $sql = "INSERT INTO equipos (nombre) VALUES ('$nombre_equipo')";

    // Ejecutar la consulta
    if ($conn->query($sql) === TRUE) {
        // Si se inserta correctamente, redirigir a la página de ver registros
        header('Location: ver_registros.php');
    } else {
        echo "Error: " . $conn->error;
    }

    // Cerrar la conexión
    $conn->close();
}
?>
