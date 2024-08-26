<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta WHOIS</title>
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
        .container2 {
            text-align: center;
            flex: 1;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        th {
            background-color: #878787;
        }
        td {
            word-break: break-word;
        }
    </style>
</head>

<body class="content">
    <?php
    include '../menu/header.php';
    ?>
    <div class="container2">
        <h1>Consulta WHOIS de Dominio</h1>
        <form action="" method="post">
            <label for="domain">Ingresa el dominio:</label>
            <input type="text" id="domain" name="domain" required>
            <button type="submit">Consultar WHOIS</button>
        </form>
    </div>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['domain'])) {
        $domain = htmlspecialchars($_POST['domain']);
        $escaped_domain = escapeshellarg($domain);

        $whois = shell_exec("whois $escaped_domain");

        if ($whois === null) {
            echo "<p>No se pudo ejecutar WHOIS.</p>";
        } else {
            // Procesar la salida WHOIS en un array asociativo hasta DNSSEC
            $whoisArray = [];
            $lines = explode("\n", $whois);
            $stopKey = 'DNSSEC';

            foreach ($lines as $line) {
                $line = trim($line);
                if (strpos($line, ':') !== false) {
                    list($key, $value) = explode(':', $line, 2);
                    $key = trim($key);
                    $value = trim($value);
                    $whoisArray[$key] = $value;

                    if ($key === $stopKey) {
                        break; // Detener la lectura después de encontrar DNSSEC
                    }
                }
            }

            echo "<h1>Resultados de WHOIS</h1>";
            echo "<table>";
            echo "<thead><tr><th>Campo</th><th>Valor</th></tr></thead>";
            echo "<tbody>";
            foreach ($whoisArray as $key => $value) {
                echo "<tr><td>" . htmlspecialchars($key) . "</td><td>" . htmlspecialchars($value) . "</td></tr>";
            }
            echo "</tbody></table>";
        }
    }
    ?>

    <script src="js/script.js"></script>
    <?php include '../menu/footer.php'; ?>
</body>

</html>
