<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Odoo Demo</title>
    <link rel="stylesheet" href="../path/to/your/styles.css"> <!-- Asegúrate de vincular tu archivo CSS -->
    <style>
        .demo-form form {
            display: flex;
            flex-direction: column;
            gap: 15px; /* Espacio entre los elementos */
        }

        .demo-form label {
            font-weight: bold;
            margin-bottom: 5px;
        }

        .demo-form input,
        .demo-form button {
            padding: 10px;
            font-size: 16px;
            width: 100%;
            box-sizing: border-box;
        }

        .demo-form button {
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
            margin-bottom: 50px; /* Espacio en blanco abajo del botón */
        }

        .demo-form button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<?php
include '../menu/header.php';
?>

<section class="demo-form">
    <div class="container">
        <h1>Odoo Demo</h1>
        <p>Por favor, complete el formulario para solicitar una demo personalizada de Odoo.</p>

        <form action="" method="post">
            <label for="nombre">Nombre y Apellido</label>
            <input type="text" id="nombre" name="nombre" required>

            <label for="correo">Correo Electrónico</label>
            <input type="email" id="correo" name="correo" required>

            <label for="empresa">Nombre de su Empresa</label>
            <input type="text" id="empresa" name="empresa" required>

            <label for="pagina_web">Página Web</label>
            <input type="url" id="pagina_web" name="pagina_web">

            <label for="telefono">Número Telefónico</label>
            <input type="tel" id="telefono" name="telefono" required>

            <label for="ciudad">Ciudad</label>
            <input type="text" id="ciudad" name="ciudad" required>

            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
</section>

<?php
include '../menu/footer.php';
?>

</body>
</html>
