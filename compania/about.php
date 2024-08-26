<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acerca de Nosotros - Cloudtobit</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .about-section {
            padding: 60px 0;
            background-color: #f8f9fa;
            text-align: center;
        }
        .about-section h2 {
            font-size: 36px;
            margin-bottom: 20px;
        }
        .about-section p {
            font-size: 18px;
            margin-bottom: 40px;
        }
        .vision-mission-values-section {
            padding: 40px 0;
            background-color: #ffffff;
            text-align: center;
        }
        .vision-mission-values-section h3 {
            font-size: 28px;
            margin-bottom: 20px;
        }
        .vision-mission-values-section p {
            font-size: 16px;
            margin-bottom: 30px;
        }
        .history-section {
            padding: 40px 0;
            background-color: #f8f9fa;
            text-align: center;
        }
        .history-section h3 {
            font-size: 28px;
            margin-bottom: 20px;
        }
        .history-section p {
            font-size: 16px;
            margin-bottom: 30px;
        }
        .team-section {
            padding: 40px 0;
        }
        .team-member {
            margin-bottom: 30px;
            text-align: center;
        }
        .team-member img {
            border-radius: 50%;
            width: 150px;
            height: 150px;
        }
        .team-member h5 {
            margin-top: 15px;
            font-size: 18px;
        }
        .team-member p {
            font-size: 14px;
            color: #6c757d;
        }
    </style>
</head>
<body>
    
<?php
include '../menu/header.php';
?>
    <header class="bg-primary text-white text-center py-4">
        <h1>Cloudtobit</h1>
        <p>Transformando el futuro con tecnología innovadora</p>
    </header>

    <div class="about-section">
        <div class="container">
            <h2>Acerca de Nosotros</h2>
            <p>En Cloudtobit, nos dedicamos a ofrecer soluciones tecnológicas de vanguardia para empresas de todo el mundo. Nuestra misión es ayudar a nuestros clientes a alcanzar sus metas a través de la innovación y la excelencia en servicios digitales.</p>
        </div>
    </div>

    <div class="vision-mission-values-section">
        <div class="container">
            <h3>Nuestra Visión</h3>
            <p>Ser líderes en la transformación digital global, impulsando el progreso y la innovación en cada rincón del mundo.</p>
            <h3>Nuestra Misión</h3>
            <p>Ofrecer soluciones tecnológicas que potencien a nuestros clientes, creando un impacto positivo y duradero en sus negocios.</p>
            <h3>Nuestros Valores</h3>
            <p>Integridad, Innovación, Excelencia, Colaboración, y Compromiso con la Sostenibilidad.</p>
        </div>
    </div>

    <div class="history-section">
        <div class="container">
            <h3>Nuestra Historia</h3>
            <p>Cloudtobit nació del deseo de dos jóvenes emprendedores de hacer que la tecnología sea accesible para todos. Vimos cómo amigos y conocidos luchaban con los altos costos de alojar sus páginas web y dominios. Con la ayuda de un socio experto en DevOps, comenzamos a ofrecer soluciones administradas de alta calidad a precios accesibles. Hoy, nuestro objetivo sigue siendo el mismo: asegurarnos de que nuestros futuros clientes no tengan que preocuparse por los costos elevados, sino que puedan enfocarse en lo que realmente importa: hacer crecer sus negocios.</p>
        </div>
    </div>

    <!--<div class="team-section">
        <div class="container">
            <h2 class="text-center">Nuestro Equipo</h2>
            <div class="row">
                <div class="col-md-4 team-member">
                    <img src="equipo1.jpg" alt="Miembro del Equipo 1">
                    <h5>Nombre del Miembro 1</h5>
                    <p>CEO & Fundador</p>
                </div>
                <div class="col-md-4 team-member">
                    <img src="equipo2.jpg" alt="Miembro del Equipo 2">
                    <h5>Nombre del Miembro 2</h5>
                    <p>CTO</p>
                </div>
                <div class="col-md-4 team-member">
                    <img src="equipo3.jpg" alt="Miembro del Equipo 3">
                    <h5>Nombre del Miembro 3</h5>
                    <p>CMO</p>
                </div>
            </div>
        </div>
    </div>-->

    <?php include '../menu/footer.php'; ?>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
