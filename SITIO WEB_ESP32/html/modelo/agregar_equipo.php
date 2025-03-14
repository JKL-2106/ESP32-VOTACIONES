<?php
include 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre_equipo'];

    // Insertar evaluador en la base de datos
    $sql = "INSERT INTO evaluadores (nombre, cargo) VALUES ('$nombre')";

    if ($conn->query($sql) === TRUE) {
        echo "Evaluador agregado correctamente.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
