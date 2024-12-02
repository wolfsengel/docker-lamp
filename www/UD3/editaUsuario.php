<?php
$dsn = 'mysql:host=db;dbname=colegio';
$username = 'colegio'; 
$password = 'colegio';

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->prepare("UPDATE usuarios SET username = :username, nombre = :nombre, apellidos = :apellidos WHERE id = :id");
    $stmt->bindParam(':username', $_POST['username']);
    $stmt->bindParam(':nombre', $_POST['nombre']);
    $stmt->bindParam(':apellidos', $_POST['apellidos']);
    $stmt->bindParam(':id', $_POST['id']);
    $stmt->execute();

    echo "Usuario actualizado correctamente";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
