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
        </div>
    </div>
    <?php
        include('UD2/entregaTarea/footer.php');
    ?>
</body>
</html>