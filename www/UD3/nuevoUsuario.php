<?php
$dsn = 'mysql:host=db;dbname=colegio';
$username = 'colegio'; 
$password = 'colegio';

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->prepare("INSERT INTO usuarios (username, nombre, apellidos, contrasena) VALUES (:username, :nombre, :apellidos, :contrasena)");
    $stmt->bindParam(':username', $_POST['username']);
    $stmt->bindParam(':nombre', $_POST['nombre']);
    $stmt->bindParam(':apellidos', $_POST['apellidos']);
    $stmt->bindParam(':contrasena', password_hash($_POST['contrasena'], PASSWORD_DEFAULT));
    $stmt->execute();

    echo "Usuario creado correctamente";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
