<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<style>
    footer {
        padding: 20px 0;
    }

    .footer-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }

    .footer-logo {
        flex: 1;
        display: flex;
        align-items: center;
        margin-right: 20px;
    }

    .footer-content {
        flex: 3;
        display: flex;
        justify-content: space-between;
    }

    .footer-links {
        display: flex;
        flex: 2;
        justify-content: space-between;
    }

    .footer-section {
        flex: 1;
        margin: 0 10px;
    }

    .footer-section h3 {
        margin-bottom: 15px;
        font-size: 1.2em;
        color: #fff;
    }

    .footer-section h3 a {
        text-decoration: none;
        color: inherit;
    }

    .footer-section ul {
        list-style: none;
        padding: 0;
    }

    .footer-section ul li {
        margin-bottom: 10px;
    }

    .footer-section ul li a {
        color: #ddd;
        text-decoration: none;
    }

    .footer-section ul li a:hover {
        text-decoration: underline;
    }

    .social-icons {
        margin-top: 15px;
    }

    .social-icons a {
        margin-right: 10px;
    }

    .social-icons img {
        width: 24px;
        height: 24px;
    }

    .footer-copyright,
    .footer-disclaimer {
        text-align: center;
        margin-top: 20px;
        font-size: 0.9em;
    }

    .footer-disclaimer {
        display: block;
        margin-top: 10px;
        color: #aaa;
    }

    .social-icons a {
        color: #white;
        font-size: 24px;
        margin: 0 10px;
        transition: color 0.3s;
    }

    .social-icons a:hover {
        color: #ff4500;
    }
</style>
<footer>
    <div class="footer-container">
        <div class="footer-logo">
            <img src="/img/logo-sin-fondo.png" alt="Logo" style="width: 200px; height: 150px;">
        </div>
        <div class="footer-content">
            <div class="footer-section">
                <h3><a href="/index.php">CLOUD TO BIT</a></h3>
                <p><h5>Tu proveedor de soluciones en la nube.</h5></p>
                <div class="social-icons">
                    <a href="https://www.facebook.com" target="_blank" title="Facebook">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="https://www.instagram.com" target="_blank" title="Instagram">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="https://wa.me/1234567890" target="_blank" title="WhatsApp">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                </div>
            </div>
            <div class="footer-links">
                <div class="footer-section">
                    <h3>Compañía</h3>
                    <ul>
                        <li><a href="#">Acerca de Nosotros</a></li>
                        <li><a href="#">Contáctanos</a></li>
                        <li><a href="#">Soporte</a></li>
                        <li><a href="#">Mapa del Sitio</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h3>Servicios</h3>
                    <ul>
                        <li><a href="#">Plesk Hosting</a></li>
                        <li><a href="#">VPS Hosting</a></li>
                        <li><a href="#">Servidores Dedicados</a></li>
                        <li><a href="#">Nube Privada</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h3>Recursos</h3>
                    <ul>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Base de Conocimiento</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <p class="footer-copyright">
        &copy; <?php echo date("Y"); ?> Todos los derechos reservados. Cloudtbit.com
    </p>
    <small class="footer-disclaimer">
        Los precios están en pesos mexicanos (MXN), no incluyen IVA y están sujetos a cambios sin previo aviso.
    </small>
</footer>