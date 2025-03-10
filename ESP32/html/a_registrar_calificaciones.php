<?php
include 'CONEXION.php'; // incluye la conexión a la base de datos

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $equipo_id = $_POST['equipo_id'];
    $evaluador_id = $_POST['evaluador_id'];
    $calificacion = $_POST['calificacion'];

    $sql = "INSERT INTO calificaciones (equipo_id, evaluador_id, calificacion) VALUES ('$equipo_id', '$evaluador_id', '$calificacion')";

    if ($conn->query($sql) === TRUE) {
        echo "Calificación registrada correctamente";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
