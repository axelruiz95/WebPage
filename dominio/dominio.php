<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dominio</title>
    <link rel="stylesheet" href="../styles/styles.css">
    <style>
        .container {
            display: flex;
            justify-content: center;
            gap: 20px;
            padding: 10px;
        }
        .column {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }
        .column div {
            margin-bottom: 10px;
        }
        .column div img {
            width: 80px;
            height: auto;
        }
    </style>
</head>
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

<section>
    <div class="container">
        <div class="column">
            <div>Tu Dominio</div>
            <div>Imagen</div>
            <div>.com</div>
            <div>Desde</div>
            <div>$ 300 MXN</div>
        </div>
        <div class="column">
            <div>Tu Dominio</div>
            <div>Imagen</div>
            <div>.com.mx</div>
            <div>Desde</div>
            <div>$ 450 MXN</div>
        </div>
        <div class="column">
            <div>Tu Dominio</div>
            <div>Imagen</div>
            <div>.mx</div>
            <div>Desde</div>
            <div>$ 300 MXN</div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="column">
            <div>Tu Dominio</div>
            <div>Imagen</div>
            <div>.org</div>
            <div>Desde</div>
            <div>$ 500 MXN</div>
        </div>
        <div class="column">
            <div>Tu Dominio</div>
            <div>Imagen</div>
            <div>.net</div>
            <div>Desde</div>
            <div>$ 300 MXN</div>
        </div>
        <div class="column">
            <div>Tu Dominio</div>
            <div>Imagen</div>
            <div>.me</div>
            <div>Desde</div>
            <div>$ 500 MXN</div>
        </div>
    </div>
</section>

<section>
    <h2>Obten un 90% de descuento en tu nuevo dominio al contratar tu hosting o contratarlo a 2 años</h2>
</section>

<section>
    <h3>¿Busca tu Dominio?</h3>
    <div>
        <input type="text" class="dom" placeholder="Escribe Tu dominio aqui!">
        <button type="button" class="buscadordom">Buscar</button>
    </div>
</section>

<section>
    <h3>¿Qué es un Dominio?</h3>
    <table>
        <tr>
            <td><img src="../img/dominio.png" alt="" style="width: 95px; height: 45px;"></td>
            <td>Un dominio es una dirección única en Internet que permite identificar y acceder a un sitio web. Funciona como una dirección física, pero en el mundo digital. Por ejemplo, www.tusitioweb.com es un dominio.
                Los dominios están compuestos por dos partes principales: el nombre y la extensión. En el caso de "tusitioweb.com", "tusitioweb" es el nombre del dominio y ".com" es la extensión. Existen muchas extensiones diferentes, como .org, .net, .edu, entre otras, cada una con un propósito específico.
                Registrar un dominio es un paso crucial para establecer tu presencia en línea, ya que es la forma en la que los usuarios encontrarán y accederán a tu sitio web. Es importante elegir un nombre de dominio que sea fácil de recordar, relevante para tu marca y único.
            </td>
        </tr>
    </table>
</section>
<?php
include '../menu/footer.php';
?>
<script src="js/script.js"></script>

</body>
</html>
