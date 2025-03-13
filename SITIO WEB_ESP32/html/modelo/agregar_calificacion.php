<?php
include 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_equipo = $_POST['id_equipo'];
    $id_evaluador = $_POST['id_evaluador'];
    $calificacion = $_POST['calificacion'];

    // Insertar calificación en la base de datos
    $sql = "INSERT INTO calificaciones (id_equipo, id_evaluador, calificacion) VALUES ('$id_equipo', '$id_evaluador', '$calificacion')";

    if ($conn->query($sql) === TRUE) {
        echo "Calificación agregada correctamente.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
