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
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
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
    </style>
    
</head>
<body  class="content">

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
            <td colspan="2"><button class="button" onclick="window.location.href='#planes'">Ver Planes</button>
            </td>
        </tr>
    </table>
</section>
<section>
    <div id="planes" class="plan-container">
        <div class="plan">
            <h2>Básico</h2>
            <button class="button">Comprar Básico</button>
            <p>Panel Plesk</p>
            <p class="price">$490 MXN Anual</p>
            <p>1 dominio</p>
            <p>24 Gb de almacenamiento</p>
            <p>1 base de datos</p>
            <p>Cuentas de correo Ilimitadas</p>
            <p>Soporte 24/7 vía Ticket</p>
            <p>Complementos Gratis</p>
        </div>
        <div class="plan">
            <h2>Básico</h2>
            <button class="button">Comprar Básico</button>
            <p>Panel Plesk</p>
            <p class="price">$490 MXN Anual</p>
            <p>1 dominio</p>
            <p>24 Gb de almacenamiento</p>
            <p>1 base de datos</p>
            <p>Cuentas de correo Ilimitadas</p>
            <p>Soporte 24/7 vía Ticket</p>
            <p>Complementos Gratis</p>
        </div>
        <div class="plan">
            <h2>Básico</h2>
            <button class="button">Comprar Básico</button>
            <p>Panel Plesk</p>
            <p class="price">$490 MXN Anual</p>
            <p>1 dominio</p>
            <p>24 Gb de almacenamiento</p>
            <p>1 base de datos</p>
            <p>Cuentas de correo Ilimitadas</p>
            <p>Soporte 24/7 vía Ticket</p>
            <p>Complementos Gratis</p>
        </div>
        <div class="plan">
            <h2>Básico</h2>
            <button class="button">Comprar Básico</button>
            <p>Panel Plesk</p>
            <p class="price">$490 MXN Anual</p>
            <p>1 dominio</p>
            <p>24 Gb de almacenamiento</p>
            <p>1 base de datos</p>
            <p>Cuentas de correo Ilimitadas</p>
            <p>Soporte 24/7 vía Ticket</p>
            <p>Complementos Gratis</p>
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
</body>
</html>