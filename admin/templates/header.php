<?php

$urlBase = "http://localhost/sitioweb/admin/";

?>

<!doctype html>
<html lang="en">

<head>
  <title>Administrador del Sitio Web</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>

  <header>
    <nav class="navbar navbar-expand navbar-light bg-light">
        <div class="nav navbar-nav">
            <a class="nav-item nav-link active" href="<?php echo $urlBase;?>" aria-current="page">Administrador <span class="visually-hidden">(current)</span></a>
            <a class="nav-item nav-link" href="<?php echo $urlBase;?>secciones/servicios/">Servicios</a>
            <a class="nav-item nav-link" href="<?php echo $urlBase;?>secciones/portafolio/">Portafolio</a>
            <a class="nav-item nav-link" href="<?php echo $urlBase;?>secciones/entradas/">Entradas</a>
            <a class="nav-item nav-link" href="<?php echo $urlBase;?>secciones/equipo/">Equipo</a>
            <a class="nav-item nav-link" href="<?php echo $urlBase;?>secciones/configuraciones/">Configuraciones</a>
            <a class="nav-item nav-link" href="<?php echo $urlBase;?>secciones/usuarios/">Usuarios</a>
            <a class="nav-item nav-link" href="<?php echo $urlBase;?>login.php">Cerrar sesión</a>
        </div>
    </nav>
  </header>

  <main class="container">