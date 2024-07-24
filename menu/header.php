<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú de Navegación</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .navbar {
            overflow: hidden;
            background: rgba(255, 255, 255, 0.1);
            justify-content: center;
            align-items: center;
        }
        .navbar a, .navbar img {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }
        .navbar img {
            padding: 0;
            margin-right: 80px;
        }
        .navbar a:hover, .dropdown:hover .dropbtn {
            background-color: #ddd;
            color: blue;
        }
        .dropdown {
            float: left;
            overflow: hidden;
        }
        .dropdown .dropbtn {
            font-size: 16px;
            border: none;
            outline: none;
            color: white;
            padding: 14px 16px;
            background-color: inherit;
            font-family: inherit;
            margin: 0;
        }
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }
        .dropdown-content a {
            float: none;
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }
        .dropdown-content a:hover {
            background-color: #ddd;
        }
        .dropdown:hover .dropdown-content {
            display: block;
        }
        .navbar .search-icon {
            float: right;
            margin-right: 20px;
        }
        .navbar .search-icon a {
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }
        .navbar .search-icon a:hover {
            background-color: #ddd;
            color: red;
        }
        .navbar .search-icon i {
            font-size: 16px;
        }
    </style>
</head>
<body>

<div class="navbar">
    <a href="/index.php">
        <img src="/img/google.png" alt="Logo" width="80" height="50">
    </a>
    <a href="/index.php">Home</a>
    <div class="dropdown">
        <button class="dropbtn">Dominio 
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
            <a href="/dominio/dominio.php">Buscar Dominio</a>
            <a href="/dominio/dominio.php">Whois</a>
        </div>
    </div>
    <div class="dropdown">
        <button class="dropbtn">Web Hosting 
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
            <a href="/hosting/hosting.php">Planes Hosting</a>
            <a href="/hosting/hosting.php">Wordpress</a>
            <a href="/hosting/hosting.php">Correo Empresarial</a>
        </div>
    </div>
    <div class="dropdown">
        <button class="dropbtn">Servidores 
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
            <a href="/servidores/vps.php">VPS</a>
            <a href="/servidores/cloudvps.php">Cloud VPS</a>
            <a href="/servidores/dedicado.php">Servidores Dedicados</a>
        </div>
    </div>
    <div class="dropdown">
        <button class="dropbtn">Seguridad 
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
            <a href="/seguridad/seguridad.php">Opción 1</a>
            <a href="/seguridad/seguridad.php">Opción 2</a>
        </div>
    </div>
    <div class="search-icon">
        <a href="/dominio/dominio.php"><i class="fas fa-search"></i></a>
    </div>
</div>

</body>
</html>
