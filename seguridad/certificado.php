<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Construyendo</title>
    <link rel="stylesheet" href="../styles/styles.css">
    <style>
        html, body {
            margin: 0;
            padding: 0;
            height: 100%;
        }
        .content {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        .containerdiv {
            text-align: center;
            flex: 1;
        }
        h1 {
            font-size: 3em;
            color: #4CAF50;
        }

        p {
            font-size: 1.5em;
        }
    </style>
</head>
<body class="content">
    <?php include '../menu/header.php'; ?>
    <div class="containerdiv">
        <h1>Construyendo</h1>
        <p>Estamos trabajando en algo nuevo. ¡Vuelve pronto!</p>
    </div>
    <?php include '../menu/footer.php'; ?>
</body>

</html>
