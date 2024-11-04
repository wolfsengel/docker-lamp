<?php
// (●'◡'●) <(Hola, este es el archivo utils.php. Aquí se encuentran las funciones que se utilizan en los archivos de la aplicación.)
define('TAREAS_FILE', 'tareas.json');

function obtenerTareas() {
    if (!file_exists(TAREAS_FILE)) {
        return [];
    }
    $json = file_get_contents(TAREAS_FILE);
    $tareas = json_decode($json, true);
    return $tareas;
}

function filtrarContenido($campo) {
    $campo = trim($campo);
    $campo = htmlspecialchars($campo, ENT_QUOTES, 'UTF-8');
    $campo = strip_tags($campo);
    $campo = preg_replace('/\s+/', ' ', $campo);
    return $campo;
}

function esTextoValido($campo) {
    $campo = filtrarContenido($campo);
    return !empty($campo);
}

function guardarTarea($id, $descripcion, $estado) {
    $tareas = obtenerTareas();

    $id = filtrarContenido($id);
    $descripcion = filtrarContenido($descripcion);
    $estado = filtrarContenido($estado);

    if (!esTextoValido($id) || !esTextoValido($descripcion) || !esTextoValido($estado)) {
        return false; 
    }

    $nuevaTarea = [
        "id" => $id,
        "descripcion" => $descripcion,
        "estado" => $estado
    ];

    $tareas[] = $nuevaTarea;

    $json = json_encode($tareas, JSON_PRETTY_PRINT);
    file_put_contents(TAREAS_FILE, $json);

    return true;
}
?>
