<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hosting</title>
    <link rel="stylesheet" href="../styles/styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 0;
            padding: 20px;
        }
        .content {
            width: 100%;
            max-width: 1200px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 40px;
        }
        table td {
            padding: 10px;
            border: 1px solid #ddd;
            vertical-align: top;
        }
        .plan-container {
            display: none;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }
        .plan-container.active {
            display: flex;
        }
        #planes {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }
        .plan {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 250px;
            padding: 20px;
            text-align: center;
            flex: 0 1 23%;
            box-sizing: border-box;
        }        
        .plan h2 {
            font-size: 24px;
            color: #333;
            margin: 10px 0;
        }        
        .plan p {
            font-size: 16px;
            color: #333;
            margin: 10px 0;
        }    
        .plan .price {
            font-size: 20px;
            color: #333;
            margin: 20px 0;
        }    
        .plan .button {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
            outline: none;
            color: #fff;
            background-color: #4CAF50;
            border: none;
            border-radius: 15px;
            box-shadow: 0 9px #999;
        }        
        .plan .button:hover {
            background-color: #3e8e41;
        }         
        .plan .button:active {
            background-color: #3e8e41;
            box-shadow: 0 5px #666;
            transform: translateY(4px);
        }
        .hostplan-button-rectangle {
            width: 300px;
            height: 40px;
            display: flex;
            justify-content: space-between;
            padding: 10px;
            background-color: #ffffff;
            border: 1px solid #050505;
            border-radius: 30px;
        }
        .hostplan-button-rectangle button {
            flex: 1;
            margin-right: 10px;
            font-size: 16px;
            background: linear-gradient(to left, #6EE8FC 0%, #6AE2FB 16%, #5ED1F7 37%, #4BB5F1 61%, #308EE8 87%, #267Fe5 96%);
            color: #fff;
            border: none;
            border: 1px solid #050505;
            border-radius: 25px;
            transition: background-color 0.3s, color 0.3s;
        }
        .hostplan-button-rectangle button:last-child {
            margin-right: 0;
        }
        .hostplan-button-rectangle button.active {
            background-color: #007bff;
            color: #fff;
        }
        .hostplan-button-rectangle button.inactive {
        background: #ffffff;
        color: #000000;
        }
        .hostplans {
            margin-top: 50px;
        }

        .hostplans div {
            margin-bottom: 20px;
        }
        .hostplans h2 {
            font-size: 24px;
            font-weight: bold;
            color: #ffffff;
            text-align: center;
        }
        .hostplans h3 {
            font-size: 18px;
            color: #ffffff;
            text-align: center;
        }
        .hostbutton-container {
            margin-right: 30px;
        }        

    </style>
    
</head>
<body class="content">

<?php
include '../menu/header.php';
?>

<section>
    <h1>Soluciones Web Hosting</h1>
    <table border="1">
        <tr>
            <td colspan="2">Hosting Confiable para Todo Tipo de Proyectos</td>
        </tr>
        <tr>
            <td><img src="../img/dominio.png" alt="" style="width: 95px; height: 45px;"></td>
            <td>Desde sitios personales hasta proyectos de alto rendimiento, ofrecemos planes de hosting que se adaptan a tus necesidades específicas. Ya sea que estés creando un blog, una tienda en línea o una página corporativa, puedes confiar en nosotros para mantener tu sitio siempre accesible y seguro.</td>
        </tr>
        <tr>
            <td colspan="2">Ventajas de Nuestros Servicios de Hosting</td>
        </tr>
        <tr>
            <td colspan="2">Rendimiento Superior: Servidores de alta velocidad para tiempos de carga rápidos.</td>
        </tr>
        <tr>
            <td colspan="2">Seguridad Garantizada: Protección avanzada contra amenazas y ataques.</td>
        </tr>
        <tr>
            <td colspan="2">Soporte Técnico 24/7: Asistencia profesional y amigable en todo momento.</td>
        </tr>
        <tr>
            <td colspan="2">Paneles de Control Intuitivos: Gestión sencilla con DirectAdmin, cPanel y WordPress.</td>
        </tr>
        <tr>
            <td colspan="2">Escalabilidad: Planes flexibles que crecen con tu negocio.</td>
        </tr>
        <tr>
            <td colspan="2">
                <button class="button" onclick="window.location.href='#planes'">Ver Planes</button>
            </td>
        </tr>
    </table>
</section>

<section class="hostplans">
    <div><h2>Planes Hosting y WordPress</h2></div>
    <div><h3>Simple y Transparente contigo.</h3></div>
    <div class="hostbutton-container">
        <div class="hostplan-button-rectangle">
            <button id="btn-hosting" onclick="toggleSection('hosting', this)">Hosting</button>
            <button id="btn-wordpress" onclick="toggleSection('wordpress', this)">WordPress</button>
        </div>
    </div>
</section>

<section id="hosting" class="plan-container">
    <div id="planes" >
        <div class="plan">
            <h2>ToHosting 1</h2>
            <button class="button">Comprar ToHosting 1</button>
            <p>Panel Plesk</p>
            <p class="price">$480 MXN Anual</p>
            <p>1 dominio</p>
            <p>6 Gb de almacenamiento</p>
            <p>5 base de datos</p>
            <p>Cuentas de correo Ilimitadas</p>
            <p>Soporte 24/7 vía Ticket</p>
            <p>Complementos Gratis</p>
        </div>
        <div class="plan">
            <h2>ToHosting 2</h2>
            <button class="button">Comprar ToHosting 2</button>
            <p>Panel Plesk</p>
            <p class="price">$960 MXN Anual</p>
            <p>2 dominio</p>
            <p>25 Gb de almacenamiento</p>
            <p>Bases de Datos Ilimitadas</p>
            <p>Cuentas de correo Ilimitadas</p>
            <p>Soporte 24/7 vía Ticket</p>
            <p>Complementos Gratis</p>
        </div>
        <div class="plan">
            <h2>ToHosting 3</h2>
            <button class="button">Comprar ToHosting 3</button>
            <p>Panel Plesk</p>
            <p class="price">$1800 MXN Anual</p>
            <p>Dominio Ilimitado</p>
            <p>50 Gb de almacenamiento</p>
            <p>Bases de Datos Ilimitadas</p>
            <p>Cuentas de correo Ilimitadas</p>
            <p>Soporte 24/7 vía Ticket</p>
            <p>Complementos Gratis</p>
        </div>
        <div class="plan">
            <h2>ToHosting 4</h2>
            <button class="button">Comprar ToHosting 4</button>
            <p>Panel Plesk</p>
            <p class="price">$2400 MXN Anual</p>
            <p>Dominio Ilimitado</p>
            <p>75 Gb de almacenamiento</p>
            <p>Bases de Datos Ilimitadas</p>
            <p>Cuentas de correo Ilimitadas</p>
            <p>Soporte 24/7 vía Ticket</p>
            <p>Complementos Gratis</p>
        </div>
    </div>
</section>

<section id="wordpress" class="plan-container">
    <div id="planes">
        <div class="plan">
            <h2>ToWordPress Mensual</h2>
            <button class="button">Comprar ToWordPress</button>
            <p>Panel WordPress</p>
            <p class="price">$90 MXN Anual</p>
            <p>1 dominio</p>
            <p>25 Gb de almacenamiento SSD</p>
            <p>Certificado SSL GRATIS</p>
            <p>2 base de datos</p>
            <p>20 Cuentas de correo</p>
            <p>Soporte 24/7 vía Ticket</p>
            <p>WordPress Toolkit Deluxe</p>
            <p>Complementos Gratis</p>
        </div>
        
        <div class="plan">
            <h2>ToWordPress Semestral</h2>
            <button class="button">Comprar Básico</button>
            <p>Panel WorkPress</p>
            <p class="price">$490 MXN Anual</p>
            <p>1 dominio</p>
            <p>25 Gb de almacenamiento SSD</p>
            <p>Certificado SSL GRATIS</p>
            <p>2 base de datos</p>
            <p>20 Cuentas de correo</p>
            <p>Soporte 24/7 vía Ticket</p>
            <p>WordPress Toolkit Deluxe</p>
            <p>Complementos Gratis</p>
        </div>
        <div class="plan">
            <h2>ToWordPress Anual</h2>
            <button class="button">Comprar Básico</button>
            <p>Panel WorkPress</p>
            <p class="price">$490 MXN Anual</p>
            <p>1 dominio</p>
            <p>25 Gb de almacenamiento SSD</p>
            <p>Certificado SSL GRATIS</p>
            <p>2 base de datos</p>
            <p>20 Cuentas de correo</p>
            <p>Soporte 24/7 vía Ticket</p>
            <p>WordPress Toolkit Deluxe</p>
            <p>Complementos Gratis</p>
            <p>Dominio GRATIS*
            (.com, .com.mx, .website, .space, .site, .online, .fun, .uno)</p>
        </div>
        <div class="plan">
            <h2>ToWordPress 3 años</h2>
            <button class="button">Comprar Básico</button>
            <p>Panel WorkPress</p>
            <p class="price">$490 MXN Anual</p>
            <p>1 dominio</p>
            <p>25 Gb de almacenamiento SSD</p>
            <p>Certificado SSL GRATIS</p>
            <p>2 base de datos</p>
            <p>20 Cuentas de correo</p>
            <p>Soporte 24/7 vía Ticket</p>
            <p>WordPress Toolkit Deluxe</p>
            <p>Complementos Gratis</p>
            <p>Dominio GRATIS*
            (.com, .com.mx, .website, .space, .site, .online, .fun, .uno)</p>
        </div>
    </div>
</section>

<section>
    <table>
        <tr>
            <td><h1>Rendimiento</h1></td>
            <td><h1>Rendimiento</h1></td>
            <td><h1>Rendimiento</h1></td>
            <td><h1>Rendimiento</h1></td>
        </tr>
    </table>
</section>

<section>
    <table>
        <tr>
            <td><h1>Requieres un servidor dedicado para tus dominio <a href="/servidores/servidores.php" style="color: #007bff; text-decoration: none;">clic aquí</h1></td>
        </tr>
    </table>
</section>

<?php
include '../menu/footer.php';
?>

<script src="../script/script.js"></script>

</body>
</html>
