<?php
// Incluir archivo de conexión
include 'CONEXION.php';

// Comprobar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los valores del formulario
    $nombre_evaluador = $_POST['Nambre del evaluador'];
    $cargo = $_POST['Cargo'];

    // Preparar la consulta SQL para insertar los datos
    $sql = "INSERT INTO evaluadores (nombre_evaluador, carrera_division) VALUES ('$nombre_evaluador', '$cargo')";

    // Ejecutar la consulta
    if ($conn->query($sql) === TRUE) {
        echo "Nuevo evaluador agregado con éxito";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Cerrar la conexión
$conn->close();
?>
