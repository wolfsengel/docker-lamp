<?php
$dsn = 'mysql:host=db;dbname=colegio';
$username = 'colegio'; 
$password = 'colegio';

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->prepare("DELETE FROM usuarios WHERE id = :id");
    $stmt->bindParam(':id', $_GET['id']);
    $stmt->execute();

    echo "Usuario borrado correctamente";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
