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
        .info-container {
            text-align: center;
            margin-bottom: 40px;
        }
        .info-container img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
        }
        .info-container h2 {
            font-size: 24px;
            color: #333;
            margin: 20px 0 10px;
        }
        .info-container p {
            font-size: 18px;
            color: #333;
            margin: 10px 0;
        }
        .info-container .offer {
            font-size: 20px;
            color: #ff4500;
            margin: 20px 0;
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
<body class="content">

<?php
include '../menu/header.php';
?>

<section class="info-container">
    <img src="../img/vps-info.png" alt="Información VPS">
    <h2>¿Qué es un VPS?</h2>
    <p>Un Servidor Virtual Privado (VPS) es un servicio de alojamiento que utiliza la virtualización para ofrecerte recursos dedicados en un servidor con múltiples usuarios. Es una solución ideal para proyectos que necesitan más potencia y flexibilidad que el alojamiento compartido.</p>
    <p class="offer">¡Oferta especial! Contrata cualquier plan VPS y obtén un mes adicional gratis. Disponibilidad garantizada y soporte 24/7.</p>
</section>

<section>
    <h1>Soluciones VPS</h1>
    <div class="plan-container">
        <div class="plan">
            <h2>VPS Básico</h2>
            <button class="button">Comprar Básico</button>
            <p class="price">$490 MXN Anual</p>
            <p>1 vCPU</p>
            <p>2 GB RAM</p>
            <p>20 GB SSD</p>
            <p>1 IP dedicada</p>
            <p>Soporte 24/7</p>
        </div>
        <div class="plan">
            <h2>VPS Avanzado</h2>
            <button class="button">Comprar Avanzado</button>
            <p class="price">$990 MXN Anual</p>
            <p>2 vCPU</p>
            <p>4 GB RAM</p>
            <p>40 GB SSD</p>
            <p>1 IP dedicada</p>
            <p>Soporte 24/7</p>
        </div>
        <div class="plan">
            <h2>VPS Profesional</h2>
            <button class="button">Comprar Profesional</button>
            <p class="price">$1490 MXN Anual</p>
            <p>4 vCPU</p>
            <p>8 GB RAM</p>
            <p>80 GB SSD</p>
            <p>2 IPs dedicadas</p>
            <p>Soporte 24/7</p>
        </div>
        <div class="plan">
            <h2>VPS Empresarial</h2>
            <button class="button">Comprar Empresarial</button>
            <p class="price">$1990 MXN Anual</p>
            <p>8 vCPU</p>
            <p>16 GB RAM</p>
            <p>160 GB SSD</p>
            <p>2 IPs dedicadas</p>
            <p>Soporte 24/7</p>
        </div>
    </div>
</section>

<section>
    <table>
        <tr>
            <td colspan="2">Ventajas de Nuestros Servicios de VPS</td>
        </tr>
        <tr>
            <td>Rendimiento Superior</td>
            <td>Servidores de alta velocidad para tiempos de carga rápidos.</td>
        </tr>
        <tr>
            <td>Seguridad Garantizada</td>
            <td>Protección avanzada contra amenazas y ataques.</td>
        </tr>
        <tr>
            <td>Soporte Técnico 24/7</td>
            <td>Asistencia profesional y amigable en todo momento.</td>
        </tr>
        <tr>
            <td>Escalabilidad</td>
            <td>Planes flexibles que crecen con tu negocio.</td>
        </tr>
    </table>
</section>

<section>
    <table>
        <tr>
            <td><h1>¿Necesitas un servidor dedicado para tus proyectos? <a href="/servidores/servidores.php" style="color: #007bff; text-decoration: none;">Clic aquí</a></h1></td>
        </tr>
    </table>
</section>

<?php
include '../menu/footer.php';
?>
</body>
</html>
