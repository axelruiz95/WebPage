<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error 404 - Página no encontrada</title>
    <link rel="stylesheet" href="../styles/styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 50px;
        }

        h1 {
            font-size: 2em;
        }
    </style>
</head>

<body class="content">
    <?php
    include '../menu/header.php';
    ?>
    <h1>Error 404 - Página no encontrada</h1>
    <p>Lo sentimos, la página que estás buscando no existe.</p>
    <p><a href="/">Volver a la página principal</a></p>
    <?php
    include '../menu/footer.php';
    ?>
</body>

</html>