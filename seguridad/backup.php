<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Backup</title>
    <link rel="stylesheet" href="../styles/styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background: linear-gradient(to right,
                    #03091D 2%,
                    #132059 44%,
                    #03091D 77%);
            color: #ffffff;
        }

        .container {
            padding: 20px;
        }

        .section {
            margin-bottom: 40px;
        }

        .section h1,
        .section h2 {
            color: #0056b3;
        }

        .section p,
        .section li {
            color: #000;
            /* Color negro para textos */
        }

        .backup-description {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .backup-description button {
            padding: 10px 20px;
            font-size: 1em;
            background-color: #0056b3;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-left: 10px;
        }

        .backup-description button:hover {
            background-color: #004494;
        }

        .pricing-section {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }

        .pricing-plan {
            background-color: #f4f4f4;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            text-align: center;
            width: 200px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .pricing-plan h3 {
            margin-top: 0;
        }

        .pricing-plan p {
            margin: 10px 0;
        }

        .features ul {
            list-style-type: disc;
            padding-left: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table,
        th,
        td {
            border: 1px solid #ddd;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f4f4f4;
        }

        .button-container {
            text-align: center;
        }

        .button-container button {
            padding: 10px 20px;
            font-size: 1em;
            background-color: #0056b3;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin: 5px;
        }

        .button-container button:hover {
            background-color: #004494;
        }

        @media (max-width: 768px) {
            .pricing-section {
                flex-direction: column;
                align-items: center;
            }
        }
    </style>
</head>

<body>
    <?php include '../menu/header.php'; ?>

    <div class="container">
        <section class="section backup">
            <h1>Backup</h1>
            <div class="backup-description">
                <p>Contrata nuestro servicio de backup para proteger tus datos con la mejor seguridad y disponibilidad.
                </p>
                <button type="button">Planes</button>
                <span>$100 MXN mensuales</span>
            </div>
        </section>

        <section class="section pricing">
            <h2>Planes de Backup</h2>
            <div class="pricing-section">
                <div class="pricing-plan">
                    <h3>$50 MXN</h3>
                    <p>Backup diario</p>
                    <p>1 GB de respaldo</p>
                    <p>10 sitios</p>
                    <div class="button-container">
                        <button type="button">Contratar Ahora</button>
                    </div>
                </div>
                <div class="pricing-plan">
                    <h3>$100 MXN</h3>
                    <p>Backup diario</p>
                    <p>2 GB de respaldo</p>
                    <p>20 sitios</p>
                    <div class="button-container">
                        <button type="button">Contratar Ahora</button>
                    </div>
                </div>
                <div class="pricing-plan">
                    <h3>$200 MXN</h3>
                    <p>Backup diario</p>
                    <p>5 GB de respaldo</p>
                    <p>50 sitios</p>
                    <div class="button-container">
                        <button type="button">Contratar Ahora</button>
                    </div>
                </div>
                <div class="pricing-plan">
                    <h3>$300 MXN</h3>
                    <p>Backup diario</p>
                    <p>10 GB de respaldo</p>
                    <p>100 sitios</p>
                    <div class="button-container">
                        <button type="button">Contratar Ahora</button>
                    </div>
                </div>
            </div>
        </section>

        <section class="section features">
            <h2>¿Qué Ofrece Nuestro Backup?</h2>
            <ul>
                <li>Backups diarios automáticos</li>
                <li>Protección contra pérdida de datos</li>
                <li>Recuperación rápida y fácil</li>
                <li>Almacenamiento seguro y encriptado</li>
                <li>Soporte técnico especializado</li>
                <li>Acceso en línea a tus backups</li>
            </ul>
        </section>

        <section class="section comparison">
            <h2>Tabla Comparativa de Planes</h2>
            <table>
                <thead>
                    <tr>
                        <th>Comparación</th>
                        <th>Plan Básico</th>
                        <th>Plan Estándar</th>
                        <th>Plan Avanzado</th>
                        <th>Plan Premium</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Capacidad de almacenamiento</td>
                        <td>1 GB</td>
                        <td>2 GB</td>
                        <td>5 GB</td>
                        <td>10 GB</td>
                    </tr>
                    <tr>
                        <td>Sitios web</td>
                        <td>10</td>
                        <td>20</td>
                        <td>50</td>
                        <td>100</td>
                    </tr>
                    <tr>
                        <td>Bases de datos ilimitadas</td>
                        <td>No</td>
                        <td>Sí</td>
                        <td>Sí</td>
                        <td>Sí</td>
                    </tr>
                    <tr>
                        <td>Backup Mensual</td>
                        <td>Sí</td>
                        <td>Sí</td>
                        <td>Sí</td>
                        <td>Sí</td>
                    </tr>
                    <tr>
                        <td>Prioridad de ejecución</td>
                        <td>Normal</td>
                        <td>Alta</td>
                        <td>Alta</td>
                        <td>Prioritaria</td>
                    </tr>
                    <tr>
                        <td>Asesoría Personalizada</td>
                        <td>No</td>
                        <td>No</td>
                        <td>Sí</td>
                        <td>Sí</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td class="button-container"><button type="button">Contratar Ahora</button></td>
                        <td><button type="button">Contratar Ahora</button></td>
                        <td><button type="button">Contratar Ahora</button></td>
                        <td><button type="button">Contratar Ahora</button></td>
                    </tr>
                </tbody>
            </table>
        </section>
    </div>

    <?php include '../menu/footer.php'; ?>
</body>

</html>