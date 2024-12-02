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

$titulo = $_POST['titulo'];
$descripcion = $_POST['descripcion'];
$estado = $_POST['estado'];
$id_usuario = $_POST['id_usuario'];

$sql = "INSERT INTO tareas (titulo, descripcion, estado, id_usuario) VALUES ('$titulo', '$descripcion', '$estado', '$id_usuario')";

if ($conn->query($sql) === TRUE) {
    echo "Tarea creada correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
