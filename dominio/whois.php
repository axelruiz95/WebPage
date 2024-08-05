<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta WHOIS</title>
    <link rel="stylesheet" href="../styles/styles.css">
</head>

<body class="content">
    <?php
    include '../menu/header.php';
    ?>

    <h1>Consulta WHOIS de Dominio</h1>
    <form action="" method="post">
        <label for="domain">Ingresa el dominio:</label>
        <input type="text" id="domain" name="domain" required>
        <button type="submit">Consultar WHOIS</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['domain'])) {
        $domain = htmlspecialchars($_POST['domain']);

        $escaped_domain = escapeshellarg($domain);

        $whois = shell_exec("whois $escaped_domain");

        if ($whois === null) {
            echo "<p>No se pudo ejecutars WHOIS..</p>";
        } else {
            echo "<h1>Resultados de WHOIS</h1>";
            echo "<pre>$whois</pre>";
        }
    } else {
    }
    ?>
    <div></div>
    <?php
    include '../menu/footer.php';
    ?>
    <script src="js/script.js"></script>

</body>

</html>