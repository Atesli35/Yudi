<?php
session_start();
session_destroy();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>La granja de Yudi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link href="libreria/estilos.css" rel="stylesheet" type="text/css">
  </head>

<body>
    <!-- =============  CORRUSEL y LOGO JUNTOS   ================= -->
<div class="container bg-success" > 
<div class="d-flex row-1 col-12 mt-1 p-1">
  
  <div class="d-block row col-4 ">
    <div id="demo" class="carousel slide" data-bs-ride="carousel">
      <!-- Indicators/dots -->
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
      </div>

      <!-- The slideshow/carousel -->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/conejo1.jpg" class="d-block w-100 rounded m-l-none" alt="conejo1">
        </div>
        <div class="carousel-item">
          <img src="img/conejo2.jpg" class="d-block w-100 rounded m-l-none" alt="conejo2">
        </div>
        <div class="carousel-item">
          <img src="img/conejo5.jpg" class="d-block w-99 rounded m-l-none" alt="conejo5">    
        </div>
        <div class="carousel-item">
          <img src="img/conejo3.jpg" class="d-block w-99 rounded m-l-none" alt="conejo3">
        </div>

        <!-- Left and right controls/icons -->
        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
          <span class="carousel-control-next-icon"></span>
        </button>
      </div>
    </div> 
  </div>

  <div class="p-4 mt-4 col-5">
    <h2 class="fw-bold text-center">LA GRANJA DE YUDI</h2>
  </div> 

  <div class="container-fluid p-1 row-1 col-5">
    <form action="validar.php" method="post">
      <div class="d-flex p-1 row-1 col-8">
        <label for="usuario" class="form-label">Usuario:</label><input type="usuario" class="form-control" name="usuario">
      </div>
      <div class="d-flex p-1 row-1 col-8">
        <label for="usuario" class="form-label">Contraseña:</label><input type="password" class="form-control" name="pass">
      </div>
      <div class="d-flex p-1 col-8">
        <button type="submit" class="btn btn-primary">Iniciar Sesion</button>
      </div>    
    </form>        
  </div>

</div>
</div>
              
<div class="container-fluid p-2 col-12">
  <div class="d-flex col-12 mt-2 p-2">

  <!--<div class="badge bg-primary text-wrap" ">-->

    <div class="d-block bg-success text-center px-3" style="width: 40rem;">
      <a href="https://inta.gob.ar/noticias/incorporacion-de-conejos-al-esquema-de-huerta-familiar" class="link-dark"><p class="fw-bold">Incorporación de conejos a la Huerta Familiar</p></a>
      <p class="fst-italic">La cría de estos animales es muy beneficiosa, en este artículo se abordan los diversos requerimientos para desarrollar de manera óptima esta producción.</p><br><br>

      <a href="https://faolex.fao.org/docs/pdf/arg148953.pdf" class="link-dark"><p class="fw-bold">Provincia de Salta. Ley Provincial 7391</p></a>
      <p class="fst-italic">Declara de Interés Pcial. el consumo de carne de conejo, promoción, explotación, fomento y desarrollo de la cunicultura y toda actividad industrial, artesanal y comercial.</p> 

    </div>
    
    <!--INSERTO UN MAPA -->
    <div class="d-block text-center px-3 bg-info" style="width: 40rem;">
      <p class="fw-bold">Sede de la ASOCIACIÓN CRIADORES DE CONEJOS DE SALTA</p>Leguizamón Nº 1.634, Salta.
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3622.372942100184!2d-65.42691958499869!3d-24.782680084090618!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x941bc3b5a3af8679%3A0x828d156d0bc558ae!2sLeguizam%C3%B3n%201634%2C%20Salta!5e0!3m2!1ses!2sar!4v1676424024811!5m2!1ses!2sar" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    
    <div class="d-block bg-success text-center px-3" style="width: 40rem;">
      <a href="libreria/manual_de_cunicultura_Argentina.pdf" class="link-dark"><p class="fw-bold">Manual de Cunicultura</p></a>
      <img src="img/manual_cunicultura.jpg" width="300px">
    </div> 
  </div>       
</div>

</body>
</html>