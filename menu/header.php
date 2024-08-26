<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Menu de Opciones</title>
</head>
<body>
    
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="/index.php"><img src="/img/logo-sin-fondo.png" alt="Logo" width="100px" height="50"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/index.php">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="true">
            Dominio
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/dominio/dominio.php">Buscar Dominio</a></li>
            <li><a class="dropdown-item" href="/dominio/whois.php">Whois</a></li>
            <li><hr class="dropdown-divider"></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="true">
          Hosting
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/hosting/hosting.php">Planes Hosting</a></li>
            <li><a class="dropdown-item" href="/hosting/hosting.php">Wordpress</a></li>
            <li><a class="dropdown-item" href="/hosting/correo.php">Correo Empresarial</a></li>
            <li><hr class="dropdown-divider"></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="true">
          Servidores
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/servidores/vps.php">VPS</a></li>
            <li><a class="dropdown-item" href="/servidores/cloud.php">Cloud VPS</a></li>
            <li><a class="dropdown-item" href="/servidores/dedicado.php">Servidores Dedicados</a></li>
            <li><hr class="dropdown-divider"></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="true">
            Seguridad
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/seguridad/certificado.php">Certificados SSL</a></li>
            <li><a class="dropdown-item" href="/seguridad/backup.php">Backup</a></li>
            <li><hr class="dropdown-divider"></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="true">
            CRM
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/crm/odoo.php">Odoo</a></li>
            <li><a class="dropdown-item" href="/seguridad/backup.php">Backup</a></li>
            <li><hr class="dropdown-divider"></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="true">
            Reseller
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/reseller/reseller">Hosting</a></li>
            <li><a class="dropdown-item" href="/reseller/reseller">Referidos</a></li>
            <li><hr class="dropdown-divider"></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>