<?php
include 'conexion.php';

$sql = "SELECT * FROM evaluadores";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Evaluadores Registrados:</h2><ul>";
    while($row = $result->fetch_assoc()) {
        echo "<li>" . $row['nombre'] . " - " . $row['cargo'] . "</li>";
    }
    echo "</ul>";
} else {
    echo "No hay evaluadores registrados.";
}

$conn->close();
?>
