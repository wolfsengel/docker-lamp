<?php
$dsn = 'mysql:host=db;dbname=colegio';
$username = 'colegio'; 
$password = 'colegio';

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE id = :id");
    $stmt->bindParam(':id', $_GET['id']);
    $stmt->execute();
    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>

<form action="editaUsuario.php" method="post">
    <input type="hidden" name="id" value="<?php echo $usuario['id']; ?>">
    Username: <input type="text" name="username" value="<?php echo $usuario['username']; ?>"><br>
    Nombre: <input type="text" name="nombre" value="<?php echo $usuario['nombre']; ?>"><br>
    Apellidos: <input type="text" name="apellidos" value="<?php echo $usuario['apellidos']; ?>"><br>
    <input type="submit" value="Actualizar Usuario">
</form>
