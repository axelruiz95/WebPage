<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encuentra tu Dominio</title>
    <link rel="stylesheet" href="../styles/styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            color: #333;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            padding: 20px;
        }

        .column {
            background-color: #f4f4f4;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            text-align: center;
            width: 250px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .column img {
            width: 80px;
            height: auto;
            margin-bottom: 10px;
        }

        .column h4 {
            margin: 10px 0;
            font-size: 1.2em;
        }

        .column p {
            margin: 5px 0;
            font-size: 1em;
        }

        .header, .footer {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }

        .header a, .footer a {
            color: #fff;
            text-decoration: none;
        }

        .header a:hover, .footer a:hover {
            text-decoration: underline;
        }

        section {
            padding: 20px;
        }

        section h1, section h2, section h3, section h4 {
            color: #0056b3;
        }
        section h4, section p {
            color: #000;
        }
        input[type="text"] {
            padding: 10px;
            font-size: 1em;
            border: 1px solid #ddd;
            border-radius: 4px;
            width: calc(100% - 22px);
            box-sizing: border-box;
        }

        button {
            padding: 10px 20px;
            font-size: 1em;
            background-color: #0056b3;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #004494;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f4f4f4;
        }

        @media (max-width: 768px) {
            .container {
                flex-direction: column;
                align-items: center;
            }

            .column {
                width: 100%;
                max-width: 400px;
            }
        }
    </style>
</head>

<body class="content">
    <?php include '../menu/header.php'; ?>

    <section>
        <div class="container">
            <h1>Encuentra tu Dominio</h1>
            <p>Busca un dominio para tu empresa y personaliza tu sitio Web</p>
        </div>
    </section>

    <section>
        <div class="container">
            <input type="text" class="dom" placeholder="Escribe tu dominio aquí!">
            <button type="button" class="buscadordom">Buscar</button>
        </div>
    </section>

    <section>
        <div class="container">
            <h2>Por qué necesitas registrar un nombre de Dominio</h2>
            <p>Con tu nombre de dominio web, las personas sabrán a simple vista por qué estás en línea (y por qué eres increíble). Encuentra la extensión de dominio perfecta para destacarte en internet y atraer a más visitantes.</p>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="column">
                <img src="../img/domain-icon.png" alt="Icono .com">
                <h4>.com</h4>
                <p>Desde $300 MXN</p>
            </div>
            <div class="column">
                <img src="../img/domain-icon.png" alt="Icono .com.mx">
                <h4>.com.mx</h4>
                <p>Desde $450 MXN</p>
            </div>
            <div class="column">
                <img src="../img/domain-icon.png" alt="Icono .mx">
                <h4>.mx</h4>
                <p>Desde $300 MXN</p>
            </div>
            <div class="column">
                <img src="../img/domain-icon.png" alt="Icono .org">
                <h4>.org</h4>
                <p>Desde $500 MXN</p>
            </div>
            <div class="column">
                <img src="../img/domain-icon.png" alt="Icono .net">
                <h4>.net</h4>
                <p>Desde $300 MXN</p>
            </div>
            <div class="column">
                <img src="../img/domain-icon.png" alt="Icono .me">
                <h4>.me</h4>
                <p>Desde $500 MXN</p>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <h2>Obtén un 90% de descuento en tu nuevo dominio al contratar tu hosting o al contratarlo por 2 años</h2>
        </div>
    </section>

    <section>
        <div class="container">
            <h3>¿Buscas tu Dominio?</h3>
            <input type="text" class="dom" placeholder="Escribe tu dominio aquí!">
            <button type="button" class="buscadordom">Buscar</button>
        </div>
    </section>


    <?php include '../menu/footer.php'; ?>
    <script src="js/script.js"></script>
</body>

</html>
