<?php
$dsn = 'mysql:host=db;dbname=colegio';
$username = 'colegio'; 
$password = 'colegio';

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->query("SELECT * FROM usuarios");
    echo "<table>";
    echo "<tr><th>ID</th><th>Username</th><th>Nombre</th><th>Apellidos</th><th>Acciones</th></tr>";
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['username'] . "</td>";
        echo "<td>" . $row['nombre'] . "</td>";
        echo "<td>" . $row['apellidos'] . "</td>";
        echo "<td><a href='editaUsuarioForm.php?id=" . $row['id'] . "'>Editar</a> | <a href='borraUsuario.php?id=" . $row['id'] . "'>Borrar</a></td>";
        echo "</tr>";
    }
    echo "</table>";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
