<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Menu de Opciones</title>
</head>
<body>

<div class="navbar">
    <div class="navbar-container">
        <a href="/index.php">
            <img src="/img/google.png" alt="Logo">
        </a>
        <a href="/index.php">Home</a>
        <div class="dropdown">
            <button class="dropbtn">Dominio<i class="fa fa-caret-down"></i></button>
            <div class="dropdown-content">
                <a href="/dominio/dominio.php">Buscar Dominio</a>
                <a href="/dominio/whois.php">Whois</a>
            </div>
        </div>ñ`+
        <div class="dropdown">
            <button class="dropbtn">Hosting<i class="fa fa-caret-down"></i></button>
            <div class="dropdown-content">
                <a href="/hosting/hosting.php">Planes Hosting</a>
                <a href="/hosting/hosting.php">Wordpress</a>
                <a href="/hosting/correo.php">Correo Empresarial</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">Servidores <i class="fa fa-caret-down"></i></button>
            <div class="dropdown-content">
                <a href="/servidores/vps.php">VPS</a>
                <a href="/servidores/cloud.php">Cloud VPS</a>
                <a href="/servidores/dedicado.php">Servidores Dedicados</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">Seguridad <i class="fa fa-caret-down"></i></button>
            <div class="dropdown-content">
                <a href="/seguridad/certificado.php">Certificados SSL</a>
                <a href="/seguridad/backup.php">Backup</a>
            </div>
        </div>
        <div class="search-icon">
            <a href="/dominio/dominio.php"><i class="fas fa-search"></i></a>
        </div>
    </div>
  </div>
</nav>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>