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

$id = $_POST['id'];
$titulo = $_POST['titulo'];
$descripcion = $_POST['descripcion'];
$estado = $_POST['estado'];
$id_usuario = $_POST['id_usuario'];

$sql = "UPDATE tareas SET titulo='$titulo', descripcion='$descripcion', estado='$estado', id_usuario='$id_usuario' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Tarea actualizada correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
