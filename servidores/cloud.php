<!DOCTYPE HTML>
<html lang="es">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="content-language" content="es-mx" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5" />
    <title>Cloud VPS</title>
    <link rel="stylesheet" href="../styles/styles.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <style>
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
        .content-wrapper {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            gap: 20px;
        }
        .text-content {
            flex: 1;
            max-width: 60%;
        }
        .image-content {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .image-content img {
            max-width: 100%;
            height: auto;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        .list-item {
            display: flex;
            align-items: flex-start;
            gap: 10px;
        }
        .icon {
            flex-shrink: 0;
        }
        .text {
            flex: 1;
        }
        h1 {
            font-size: 2em;
            margin-bottom: 10px;
        }
        h2 {
            font-size: 1.5em;
            margin: 0;
        }
        p {
            margin: 5px 0 0;
        }
        .swiper-container {
            width: 100%;
            padding: 20px 0;
            position: relative;
            overflow: hidden;
        }
        .swiper-wrapper {
            display: flex;
            align-items: center;
        }
        .swiper-slide {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 400px;
            text-align: center;
        }
        .plan {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 2%00px;
            padding: 10px;
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
            margin: 10px 0;
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
        .swiper-button-next, .swiper-button-prev {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            z-index: 10;
            cursor: pointer;
        }
        .swiper-button-next {
            right: 10px;
        }
        .swiper-button-prev {
            left: 10px;
        }
    </style>
</head>
<body class="content">
    <?php include '../menu/header.php'; ?>
    <section>
        <div class="content-wrapper">
            <div class="text-content">
                <h1>
                    Servidor Virtual<span> (VPS)</span>
                </h1>
                <ul>
                    <li>
                        <div class="list-item">
                            <div class="icon">
                                <i> </i>
                            </div>
                            <div class="text">
                                <h2>Garantía de satisfacción 30 días </h2>
                                <p>Si no te convence nuestro servicio, te devolvemos tu dinero.</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="list-item">
                            <div class="icon">
                                <i></i>
                            </div>
                            <div class="text">
                                <h2>Soporte técnico avanzado 100% Mexicano</h2>
                                <p>¡Atención personalizada por expertos 24/7 y en tu idioma!</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="list-item">
                            <div class="icon">
                                <i></i>
                            </div>
                            <div class="text">
                                <h2>Almacenamiento NVMe</h2>
                                <p>Tus clientes verán tu sitio a la máxima velocidad.</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="list-item">
                            <div class="icon">
                                <i></i>
                            </div>
                            <div class="text">
                                <h2>Protección por denegación de servicio (DDOS)</h2>
                                <p>Protege tu proyecto en línea de tráfico malicioso.</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="image-content">
                <img src="../img/vps-info.png" alt="Información VPS" />
            </div>
        </div>
    </section>

    <section>
        <h1>Soluciones Cloud VPS</h1>
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide plan">
                    <h2>ToCloud 1</h2>
                    <button class="button">Comprar ToCloud 1</button>
                    <p class="price">$2,500 MXN Mensual + iva</p>
                    <p>5 vCPU</p>
                    <p>8 GB RAM</p>
                    <p>400 GB NVMe</p>
                    <p>1 IP dedicada</p>
                    <p>Soporte 24/7</p>
                </div>
                <div class="swiper-slide plan">
                    <h2>ToCloud 2</h2>
                    <button class="button">Comprar ToCloud 2</button>
                    <p class="price">$3,600 MXN Mensual + iva</p>
                    <p>6 vCPU</p>
                    <p>12 GB RAM</p>
                    <p>500 GB NVMe</p>
                    <p>1 IP dedicada</p>
                    <p>Soporte 24/7</p>
                </div>
                <div class="swiper-slide plan">
                    <h2>ToCloud 3</h2>
                    <button class="button">Comprar ToCloud 3</button>
                    <p class="price">$4,500 MXN Mensual + iva</p>
                    <p>6 vCPU</p>
                    <p>16 GB RAM</p>
                    <p>600 GB NVMe</p>
                    <p>1 IPs dedicadas</p>
                    <p>Soporte 24/7</p>
                </div>
                <div class="swiper-slide plan">
                    <h2>ToCloud 4</h2>
                    <button class="button">Comprar ToCloud 4</button>
                    <p class="price">$5,200 MXN Mensual + iva</p>
                    <p>6 vCPU</p>
                    <p>20 GB RAM</p>
                    <p>700 GB NVMe</p>
                    <p>1 IPs dedicadas</p>
                    <p>Soporte 24/7</p>
                </div>
                <div class="swiper-slide plan">
                    <h2>ToCloud 5</h2>
                    <button class="button">Comprar ToCloud 5</button>
                    <p class="price">$6,300 MXN Mensual + iva</p>
                    <p>8 vCPU</p>
                    <p>24 GB RAM</p>
                    <p>800 GB NVMe</p>
                    <p>1 IPs dedicadas</p>
                    <p>Soporte 24/7</p>
                </div>
                <div class="swiper-slide plan">
                    <h2>ToCloud 6</h2>
                    <button class="button">Comprar ToCloud 6</button>
                    <p class="price">$7,300 MXN Mensual + iva</p>
                    <p>10 vCPU</p>
                    <p>30 GB RAM</p>
                    <p>900 GB NVMe</p>
                    <p>1 IPs dedicadas</p>
                    <p>Soporte 24/7</p>
                </div>
                <div class="swiper-slide plan">
                    <h2>ToCloud 7</h2>
                    <button class="button">Comprar ToCloud 7</button>
                    <p class="price">$8,200 MXN Mensual + iva</p>
                    <p>12 vCPU</p>
                    <p>36 GB RAM</p>
                    <p>1000 GB NVMe</p>
                    <p>1 IPs dedicadas</p>
                    <p>Soporte 24/7</p>
                </div>
            </div>
            <!--<div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>-->
        </div>
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
    </section>
    <section>
        <div>
            Centro de Datos
        </div>
        <div>
            El mayor nivel de <strong> redundancia, seguridad y confianza</strong> que un Centro
            de
            Datos de clase mundial puede darte.
        </div>
    </section>
    <script>
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 3,
            spaceBetween: 50,
            loop: true,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                640: {
                    slidesPerView: 1,
                    spaceBetween: 10,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 20,
                },
            },
        });
    </script>
    <?php include '../menu/footer.php'; ?>
</body>
</html>
