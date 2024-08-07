<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VPS, Cloud VPS</title>
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
            display: flex;
            align-items: center;
            padding: 20px;
            gap: 20px;
        }

        .info-content {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .info-container img {
            max-width: 200px;
            height: auto;
            border-radius: 8px;
        }

        .text-content {
            flex: 1;
        }

        h2 {
            font-size: 24px;
            color: #333;
            margin-bottom: 10px;
        }

        p {
            font-size: 18px;
            color: #333;
            margin: 10px 0;
        }

        .offer {
            font-size: 20px;
            color: #ff4500;
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
        <div class="info-content">
            <img src="../img/vps-info.png" alt="Información VPS">
            <div class="text-content">
                <h2>¿Qué es un VPS?</h2>
                <p>Un Servidor Virtual Privado (VPS) es un servicio de alojamiento que utiliza la virtualización para
                    ofrecerte recursos dedicados en un servidor con múltiples usuarios. Es una solución ideal para
                    proyectos que necesitan más potencia y flexibilidad que el alojamiento compartido.</p>
                <p class="offer">¡Oferta especial! Contrata cualquier plan VPS y obtén un mes adicional gratis.
                    Disponibilidad garantizada y soporte 24/7.</p>
            </div>
        </div>
    </section>

    <section>
        <h1>Soluciones VPS</h1>
        <div class="plan-container">
            <div class="plan">
                <h2>ToVps 1</h2>
                <button class="button">Comprar ToVps 1</button>
                <p class="price">$490 MXN Mensual + iva</p>
                <p>1 vCPU</p>
                <p>2 GB RAM</p>
                <p>50 GB SSD</p>
                <p>1 IP dedicada</p>
                <p>Soporte 24/7</p>
            </div>
            <div class="plan">
                <h2>ToVps 2</h2>
                <button class="button">Comprar ToVps 2</button>
                <p class="price">$700 MXN Mensual + iva</p>
                <p>2 vCPU</p>
                <p>4 GB RAM</p>
                <p>80 GB SSD</p>
                <p>1 IP dedicada</p>
                <p>Soporte 24/7</p>
            </div>
            <div class="plan">
                <h2>ToVps 3</h2>
                <button class="button">Comprar ToVps 3</button>
                <p class="price">$950 MXN Mensual + iva</p>
                <p>4 vCPU</p>
                <p>8 GB RAM</p>
                <p>160 GB SSD</p>
                <p>1 IPs dedicadas</p>
                <p>Soporte 24/7</p>
            </div>
            <div class="plan">
                <h2>ToVps 4</h2>
                <button class="button">Comprar ToVps 4</button>
                <p class="price">$1700 MXN Mensual + iva</p>
                <p>6 vCPU</p>
                <p>10 GB RAM</p>
                <p>250 GB SSD</p>
                <p>1 IPs dedicadas</p>
                <p>Soporte 24/7</p>
            </div>
            <div class="plan">
                <h2>ToVps 5</h2>
                <button class="button">Comprar ToVps 5</button>
                <p class="price">$2500 MXN Mensual + iva</p>
                <p>6 vCPU</p>
                <p>16 GB RAM</p>
                <p>320 GB SSD</p>
                <p>1 IPs dedicadas</p>
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
                <td>
                    <h1>¿Necesitas un servidor Cloud para tus proyectos? <a href="/servidores/cloud.php"
                            style="color: #007bff; text-decoration: none;">Clic aquí</a></h1>
                </td>
            </tr>
        </table>
    </section>

    <section>
        <div>
            <p>Además todos nuestros paquetes cuentan con:</p>
        </div>
        <div>
            <h3><strong>Accede de manera remota por SSH</strong> y administra
                tu VPS de manera personalizada.</h3>
        </div>
        <div>
            <h3>Aloja en tu VPS los Dominios que desees de acuerdo a tu plan y
                <strong>agrega subdominios de forma ilimitada.</strong>
            </h3>
        </div>
        <div>
            <h3>Obtén estabilidad en tu proyecto con las
                <strong>distribuciones Linux más seguras</strong> y usadas en el mundo
                profesional.
            </h3>
        </div>
        </div>
        <div>
            Centro de Datos
        </div>
        <div>
            El mayor nivel de <strong> redundancia, seguridad y confianza</strong> que un Centro
            de
            Datos de clase mundial puede darte.
        </div>
    </section>

    <section>

    </section>

    <?php
    include '../menu/footer.php';
    ?>
</body>

</html>