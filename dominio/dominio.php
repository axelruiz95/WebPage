<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../styles/styles.css">
</head>
<script>
    .dom {
    position: absolute;
    width: 550px;
    height: 60px;
    left: 750px;
    top: 70px;
    background: #FFFFFF;
    border-radius: 50px;
    font-family: 'Inter';
    font-style: normal;
    font-weight: 400;
    font-size: 16px;
    line-height: 19px;
    }
    .buscadordom {
        position: absolute;
        width: 95px;
        height: 45px;
        left: 750px;
        top: 70px;
        background:linear-gradient(225deg,rgba(212, 8, 140, 0.8) 14.64%, rgba(204, 8, 140, 0.8) 17.47%, rgba(133, 7, 138, 0.8) 47.17%, rgba(89, 6, 137, 0.8) 68.39%, rgba(72, 6, 137, 0.8) 79%);
        border-radius: 20px; 
    }
</script>
<body class="content">

<?php
include '../menu/header.php';
?>
<section>
    <h1>Encuentra tu Dominio</h1>
    <h3>Busca un dominio para tu empresa y personalisa tu sitio Web</h3>
</section>
<section>
    <div>
            <input type="text" class="dom" placeholder="Escribe Tu dominio aqui!">
            <button type="button" class="buscadordom">Buscar</button>
    </div>
</section>
<section>
    <h2>Por qué necesitas registrar un nombre de Dominio</h2>
    <h4>Con tu nombre de dominio web, las personas sabrán a simple vista por qué estás en línea (y por qué eres increíble). Encuentra la extensión de dominio perfecta para destacarte en internet y atraer a más visitantes.</h4>
</section>

<section> <!-- Se moejorara con una base de datos-->
    <table border="1">
        <tr>
            <th>Dominio</th>
        </tr>
        <tr><td>Imagen</td></tr>
        <tr><td><h6>.com</h6></td></tr>
        <tr><td><h6>$ 150 MXN</h6></td></tr>
    </table>
    <table border="1">
        <tr>
            <th>Dominio</th>
        </tr>
        <tr><td>Imagen</td></tr>
        <tr><td><h6>.com</h6></td></tr>
        <tr><td><h6>$ 150 MXN</h6></td></tr>
    </table>
</section>

<?php
    include '../menu/footer.php';
    ?>
    <script src="js/script.js"></script>
    
</body>
</html>