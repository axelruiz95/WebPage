<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['domain'])) {
    $domain = htmlspecialchars($_POST['domain']);
    
    // Escapa el dominio para evitar problemas de seguridad
    $escaped_domain = escapeshellarg($domain);
    
    // Realiza la consulta WHOIS
    $whois = shell_exec("whois $escaped_domain");
    
    if ($whois === null) {
        echo "<p>No se pudo ejecutar el comando WHOIS. Verifica los permisos y la disponibilidad del comando.</p>";
    } else {
        // Mostrar los resultados
        echo "<h1>Resultados de WHOIS</h1>";
        echo "<pre>$whois</pre>";
    }
} else {
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta WHOIS</title>
</head>
<body>
    <h1>Consulta WHOIS de Dominio</h1>
    <form action="" method="post">
        <label for="domain">Ingresa el dominio:</label>
        <input type="text" id="domain" name="domain" required>
        <button type="submit">Consultar WHOIS</button>
    </form>
</body>
</html>
<?php
}
?>
