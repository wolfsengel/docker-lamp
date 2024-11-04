<?php
include('utils.php');
$error = "";
$success = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Validación de los campos
    $id = isset($_POST['id']) ? trim($_POST['id']) : null;
    $descripcion = isset($_POST['descripcion']) ? trim($_POST['descripcion']) : null;
    $estado = isset($_POST['estado']) ? trim($_POST['estado']) : null;

    if (!$id) {
        $error = "El campo Título es obligatorio.";
    } elseif (!$descripcion) {
        $error = "El campo Descripción es obligatorio.";
    } elseif (!$estado) {
        $error = "El campo Estado es obligatorio.";
    } else {
        // Llamada a la función que guarda la tarea
        $success = guardarTarea($id, $descripcion, $estado);
        if (!$success) {
            $error = "Hubo un error al guardar la tarea.";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Nueva Tarea</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <?php include("header.php"); ?>

    <div class="container-fluid">
        <div class="row">
           
            <?php include("menu.php"); ?>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h2>Crear Nueva Tarea</h2>
                </div>
                <div class="container">
                    <?php include("nueva.php"); ?>
                    <form class="mb-5" action="nuevaForm.php" method="POST">
                        <div class="mb-3">
                            <label for="id" class="form-label">Título</label>
                            <input type="text" class="form-control" id="id" name="id">
                        </div>
                        <div class="mb-3">
                            <label for="descripcion" class="form-label">Descripción</label>
                            <textarea class="form-control" id="descripcion" name="descripcion" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="estado" class="form-label">Estado</label>
                            <select class="form-select" id="estado" name="estado">
                                <option value="">Selecciona una opción</option>
                                <option value="Completada">Completada</option>
                                <option value="En Proceso">En Proceso</option>
                                <option value="Pendiente">Pendiente</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </form>
                </div>
            </main>
        </div>
    </div>

    <?php include("footer.php"); ?>
</body>
</html>
