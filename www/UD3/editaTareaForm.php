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
$sql = "SELECT * FROM tareas WHERE id = $id";
$result = $conn->query($sql);
$tarea = $result->fetch_assoc();
?>

<form action="editaTarea.php" method="post">
    <input type="hidden" name="id" value="<?php echo $tarea['id']; ?>">
    Título: <input type="text" name="titulo" value="<?php echo $tarea['titulo']; ?>"><br>
    Descripción: <input type="text" name="descripcion" value="<?php echo $tarea['descripcion']; ?>"><br>
    Estado: <input type="text" name="estado" value="<?php echo $tarea['estado']; ?>"><br>
    Usuario ID: <input type="text" name="id_usuario" value="<?php echo $tarea['id_usuario']; ?>"><br>
    <input type="submit" value="Actualizar Tarea">
</form>
