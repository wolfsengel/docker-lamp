<<<<<<< HEAD
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UD2. Tarea</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php
        include('UD2/entregaTarea/header.php');
    ?>
    <div class="container-fluid">
        <div class="row">
            <?php
                include('UD2/entregaTarea/menu.php');
            ?>
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h2>Sobre mí</h2>
                </div>
                <div class="container">
                    <p>Hola, soy Ángel. Soy un desarrollador web en formación, apasionado por la tecnología y el aprendizaje continuo.</p>
                </div>
            </main>
=======
<html>
    <head>
        <title>Welcome to LAMP Infrastructure</title>
        <meta charset="utf-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
        <div class="container-fluid">
            <?php
                echo "<h1>¡Hola, Bienvenido al módulo de DWCS 2024-25!</h1>";
            ?> 

            <div class="table">
                <table class="table table-striped table-hover w-50">
                    <thead class="thead">
                        <tr>                            
                            <th>Unidad</th>
                            <th>Boletín</th>
                            <th>Solución</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><a href="https://manuais.pages.iessanclemente.net/plantillas/daw/dwcs-d/ud01/index.html" target="_blank">Unidad 1</a></td>
                            <td><a href="https://manuais.pages.iessanclemente.net/plantillas/daw/dwcs-d/ud01/tarea_ud01/index.html" target="_blank">Tarea</a></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><a href="https://manuais.pages.iessanclemente.net/plantillas/daw/dwcs-d/ud02/index.html" target="_blank">Unidad 2</a></td>
                            <td>
                                <a href="https://manuais.pages.iessanclemente.net/plantillas/daw/dwcs-d/ud02/9.anexos/1.tarea_ud02_introduccion/index.html" target="_blank">Boletín 1. Introducción</a><br />
                                <a href="https://manuais.pages.iessanclemente.net/plantillas/daw/dwcs-d/ud02/9.anexos/2.tarea_ud02_arrays_estructuras/index.html" target="_blank">Boletín 2. Arrays y estructuras de control</a><br />
                                <a href="https://manuais.pages.iessanclemente.net/plantillas/daw/dwcs-d/ud02/9.anexos/3.tarea_ud02_formularios/index.html" target="_blank">Boletín 3. Formularios</a><br />
                                <a href="https://manuais.pages.iessanclemente.net/plantillas/daw/dwcs-d/ud02/9.anexos/4.tarea_ud02_funciones/index.html" target="_blank">Boletín 4. Funciones</a><br />
                                <a href="https://manuais.pages.iessanclemente.net/plantillas/daw/dwcs-d/ud02/9.anexos/5.tarea_ud02_librerias/index.html" target="_blank">Boletín 5. Librerías</a><br />
                                <a href="#">Tarea</a>
                            </td>
                            <td>
                                <a href="UD2/anexos/1.introduccion.php" target="_blank">Solución 1. Introducción</a><br />
                                <a href="UD2/anexos/2.arrays.php" target="_blank">Solución 2. Arrays y estructuras de control</a><br />
                                <a href="UD2/anexos/3.formularios.php" target="_blank">Solución 3. Formularios</a><br />
                                <a href="UD2/anexos/4.funciones.php" target="_blank">Solución 4. Funciones</a><br />
                                <a href="UD2/anexos/5.librerias.php" target="_blank">Solución 5. Librería funciones</a> + 
                                <a href="UD2/anexos/5.librerias" target="_blank">index dividido</a><br />    
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
>>>>>>> 10f7e86a4229a7eb6dc0bd8dac336baaeb463066
        </div>
    </div>
    <?php
        include('UD2/entregaTarea/footer.php');
    ?>
</body>
</html>