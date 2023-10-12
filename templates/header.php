<!doctype html>
<html lang="en">
<head>
  <title>Centro de Verificacion</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<?php
$url_base="http://localhost/proyecto/";
?>

</head>
<body>
  <header>
    <!-- place navbar here -->
  </header>
  <nav class="navbar navbar-expand navbar-light bg-light">
      <ul class="nav navbar-nav">
          <li class="nav-item">
              <a class="nav-link active" href="#" aria-current="page">Vereficentro <span class="visually-hidden">(current)</span></a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="<?php echo $url_base;?>secciones/contrato/">Contrato</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="<?php echo $url_base;?>secciones/empleados/">Empleados</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="<?php echo $url_base;?>secciones/vehiculo/">Vehiculo</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="<?php echo $url_base;?>secciones/verificacion/">Verificacion</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="<?php echo $url_base;?>secciones/informacion/">Información</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="">Cerrar Sesion</a>
          </li>
      </ul>
  </nav>
  <main class="container">