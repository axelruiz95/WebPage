<?php
function checkDomainAvailability($domain) {
    $extensions = ['.com', '.net', '.org', '.info', '.biz', '.co', '.us', '.online', '.tech', '.store'];
    $results = [];

    foreach ($extensions as $ext) {
        $full_domain = $domain . $ext;
        
        // Verifica la disponibilidad del dominio
        $command = "whois " . escapeshellarg($full_domain) . " 2>&1";
        $whois_result = shell_exec($command);
        
        // Simple chequeo de disponibilidad basado en el texto típico de WHOIS
        if (strpos($whois_result, 'No match for') !== false || strpos($whois_result, 'NOT FOUND') !== false) {
            $results[$full_domain] = 'Disponible';
        } else {
            $results[$full_domain] = 'No disponible';
        }
    }

    return $results;
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['name'])) {
    $name = htmlspecialchars($_POST['name']);
    $availability = checkDomainAvailability($name);
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificador de Dominios</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Verificador de Disponibilidad de Dominios</h1>
    <form action="" method="post">
        <label for="name">Ingresa el nombre:</label>
        <input type="text" id="name" name="name" required>
        <button type="submit">Verificar</button>
    </form>

    <?php if (isset($availability)): ?>
        <h2>Resultados de Disponibilidad</h2>
        <table>
            <tr>
                <th>Dominio</th>
                <th>Disponibilidad</th>
            </tr>
            <?php foreach ($availability as $domain => $status): ?>
                <tr>
                    <td><?php echo htmlspecialchars($domain); ?></td>
                    <td><?php echo htmlspecialchars($status); ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
</body>
</html>
