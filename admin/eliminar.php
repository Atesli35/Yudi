<?php
//poner en mayuscula el nombre de usuario
session_start();

// solo pueden ingresar los administradores
if ($_SESSION['tipo'] = 'A'){
    //print_r($_SESSION);
    $usuario = strtoupper($_SESSION['usuario']);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../libreria/estilos.css" rel="stylesheet" type="text/css">
    <title>La granja de Yudi</title>
  </head>

<body>
<div class="container-fluid">
    <div class="row text-xl-end col-lg-12 col-md-auto col-xl-12">
        <H5> ADMINISTRADOR <?php echo $usuario;?></h5>
    </div>

    <nav class="navbar navbar-expand-sm bg-success navbar-light">
    <div class="d-flex">
        <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="../index.php"><p class="fw-bolder">Salir</p></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="home-admin.php"><p class="fw-bolder">Pagina de Administrador</p></a>
        </li>
    </div>
    </nav>

    <form action="verificar-eliminacion.php" method="POST">
    <div class="d-block col-6 mx-auto text-xl-start col-lg-6 col-md-auto col-xl-6">    
        <div class="d-block mx-auto">
            <label for="usuario" class="form-label">Ingrese el nombre del cuidador, cuyos datos quiere eliminar: </label>
            <input type="usuario" class="form-control" name="nombreM" placeholder="Ingrese el nombre del cuidador ha eliminar">
        </div>

        <div class="d-flex">
            <button type="submit" class="btn btn-primary">Buscar</button>
        </div>
    </div>
    </form>
</div>
</body>
</html>

<?php
}
session_write_close();
?>