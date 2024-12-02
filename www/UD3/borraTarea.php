<?php
$servername = "db";
$username = "colegio";
$password = "colegio";
$dbname = "colegio";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$id = $_GET['id'];

$sql = "DELETE FROM tareas WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    echo "Tarea borrada correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
