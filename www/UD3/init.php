<?php
$servername = "db";
$username = "colegio";
$password = "colegio";
$dbname = "colegio";

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sql) === TRUE) {
    echo "Base de datos creada correctamente";
} else {
    echo "Error al crear la base de datos: " . $conn->error;
}

$conn->select_db($dbname);

$sql = "CREATE TABLE IF NOT EXISTS usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    nombre VARCHAR(50) NOT NULL,
    apellidos VARCHAR(100) NOT NULL,
    contrasena VARCHAR(100) NOT NULL
)";
if ($conn->query($sql) === TRUE) {
    echo "Tabla usuarios creada correctamente";
} else {
    echo "Error al crear la tabla usuarios: " . $conn->error;
}

$sql = "CREATE TABLE IF NOT EXISTS tareas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(50) NOT NULL,
    descripcion VARCHAR(250) NOT NULL,
    estado VARCHAR(50) NOT NULL,
    id_usuario INT,
    FOREIGN KEY (id_usuario) REFERENCES usuarios(id)
)";
if ($conn->query($sql) === TRUE) {
    echo "Tabla tareas creada correctamente";
} else {
    echo "Error al crear la tabla tareas: " . $conn->error;
}

$conn->close();
?>
