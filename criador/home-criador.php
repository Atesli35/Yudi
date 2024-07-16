<?php
session_start();
//poner en mayuscula el nombre de usuario

// solo pueden ingresar los administradores
if ($_SESSION['tipo'] = 'C'){
  $usuario = strtoupper($_SESSION['usuario']);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="../libreria/estilos.css" rel="stylesheet" type="text/css">
    <title>La granja de Yudi</title>
  </head>

<body>
<div class="container-fluid">
  <div class="row text-xl-end col-lg-12 col-md-auto col-xl-12">
    <H4>BIENVENIDO CUIDADOR <?php echo $usuario;?>!</h4>
  </div>

  <nav class="navbar navbar-expand-sm bg-success navbar-ligth">
    <div class="container-fluid">
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">  
          <li class="nav-item">
            <a class="nav-link" href="../index.php"><p class="fw-bolder">Salir</p></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Ingresar</a>
            <ul class="dropdown-menu bg-secondary">
              <li><a class="dropdown-item" href="alta-paricion.php">nueva parición</a></li>
              <li><a class="dropdown-item" href="alta-productor.php">nuevo conejo productor</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Eliminar</a>
            <ul class="dropdown-menu bg-secondary">
              <li><a class="dropdown-item" href="eliminar-paricion.php">parición</a></li>
              <li><a class="dropdown-item" href="eliminar-conejoproductor.php">conejo productor</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  
 <!--INSERTO EL TIEMPO Y UN ALMANAQUE -->
  <div class="container-fluid p-2 col-12">
    <div class="d-flex col-12 mt-2 p-2">
     <!-- www.tutiempo.net - Ancho:477px - Alto:91px -->
      <div id="TT_JiJEkEEkkfjBdFIAKfzzjDzjj6uATECFbdEY1syIqEDo35m5G" class="mx-auto">El tiempo - Desde Tutiempo.net</div>
      <script type="text/javascript" src="https://www.tutiempo.net/s-widget/l_JiJEkEEkkfjBdFIAKfzzjDzjj6uATECFbdEY1syIqEDo35m5G"></script>  
    </div>
  
    <div class="d-flex col-12 mt-2 p-2">
      <div class="mx-auto">
        <iframe src="https://calendar.google.com/calendar/embed?height=600&wkst=1&bgcolor=%23ffffff&ctz=America%2FArgentina%2FSalta" style="border:solid 1px #777" width="800" height="350" frameborder="0" scrolling="no"></iframe>
      </div>
    </div>
  </div>

</body>
</html>

<?php
} 
//session_write_close();
?>