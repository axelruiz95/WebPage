<!-- header.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Título de tu Sitio</title>
    <link rel="stylesheet" href="./styles/styles.css">
</head>

<style>
        .dominio-menu {
            display: block;
            padding: 10px;
            text-decoration: none;
            color: black;
            background-color: lightgray;
            border: 1px solid gray;
        }
        .menu {
            position: relative;
            display: inline-block;
        }
        .menu-content {
            display: none;
            position: absolute;
            background-color: white;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }
        .menu-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }.menu-content a:hover {
            background-color: lightgray;
        }
        .menu:hover .menu-content {
            display: block;
        }
    </style>
<body>
    <header>
    <!-- <section class="linea-horizontal">
            <div class="email-linea">Corre@gmail.com</div>
            <div class="phone-linea">Telefono</div>
            <div class="support-linea">Soporte</div>
            <div class="help-linea">Ayuda</div>
    </section>-->
    <section class="content-home">
        <div class="menu-container">
            <div><img src="./img/google.png" alt="" width="80" height="50"></div>
            <div><a class="home-menu">Home</a></div>
            <div class="menu">
                <a class="dominio-menu">Dominio</a>
                <div class="menu-content">
                    <a href="#opcion1">Buscar dominio</a>
                    <a href="#opcion2">Whois</a>
                </div>
            </div>
            <div class="menu">
                <a class="dominio-menu">Web Hosting</a>
                <div class="menu-content">
                    <a href="#opcion1">Planes Hosting</a>
                    <a href="#opcion2">Hosting WordPress</a>
                    <a href="#opcion3">Correo Empresarial</a>
                </div>
            </div>
            <div class="menu">
                <a class="dominio-menu">Servidores</a>
                <div class="menu-content">
                    <a href="#opcion1">VPS</a>
                    <a href="#opcion2">Cloud VPS</a>
                    <a href="#opcion3">¿Que es un VPS?</a>
                </div>
            </div>
            <div class="menu">
                <a class="dominio-menu"> Seguridad</a>
                <div class="menu-content">
                    <a href="#opcion1">Certificados SSL</a>
                    <a href="#opcion2">Certificados SSL Administrativos</a>
                </div>
            </div>
            <!--<div><button type="button" onclick="window.location.href='#'" class="boton-login">Login</button></div>-->
        </div>
    </section>
    </header>
