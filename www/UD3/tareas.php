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

$sql = "SELECT tareas.*, usuarios.username FROM tareas JOIN usuarios ON tareas.id_usuario = usuarios.id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr><th>ID</th><th>Título</th><th>Descripción</th><th>Estado</th><th>Usuario</th><th>Acciones</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['titulo'] . "</td>";
        echo "<td>" . $row['descripcion'] . "</td>";
        echo "<td>" . $row['estado'] . "</td>";
        echo "<td>" . $row['username'] . "</td>";
        echo "<td><a href='editaTareaForm.php?id=" . $row['id'] . "'>Editar</a> | <a href='borraTarea.php?id=" . $row['id'] . "'>Borrar</a></td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No hay tareas";
}
$conn->close();
?>
