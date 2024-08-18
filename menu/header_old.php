<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú de Navegación</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .navbar {
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(255, 255, 255, 0.1);
            padding: 10px 0;
            color: #fff;
            position: sticky;
            top: 0;
            z-index: 1000;
        }
        .navbar-container {
            display: flex;
            align-items: center;
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
        }
        .navbar a {
            color: #fff;
            text-decoration: none;
            padding: 14px 20px;
            display: block;
            text-align: center;
            font-size: 16px;
            transition: background-color 0.3s, color 0.3s;
        }
        .navbar a:hover {
            background-color: #444;
            color: #ffd700;
        }
        .navbar img {
            height: 50px;
            margin-right: 20px;
        }
        .dropdown {
            position: relative;
            margin: 0 10px;
        }
        .dropbtn {
            background-color: inherit;
            border: none;
            color: #fff;
            padding: 14px 20px;
            font-size: 16px;
            cursor: pointer;
            font-family: inherit;
            transition: background-color 0.3s;
        }
        .dropbtn:hover {
            background-color: #444;
        }
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #333;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
            top: 100%;
            left: 0;
        }
        .dropdown-content a {
            color: #fff;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }
        .dropdown-content a:hover {
            background-color: #444;
        }
        .dropdown:hover .dropdown-content {
            display: block;
        }
        .search-icon {
            margin-left: auto;
        }
        .search-icon a {
            color: #fff;
            text-align: center;
            padding: 14px 20px;
            display: block;
            text-decoration: none;
        }
        .search-icon a:hover {
            background-color: #444;
            color: #ffd700;
        }
    </style>
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
        </div>
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

</body>
</html>
