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
    <div class="row text-xl-end col-lg-12 col-md-auto col-xl-12">
        <H5> ADMINISTRADOR <?php echo $usuario;?></h5>
    </div>

    <nav class="navbar navbar-expand-sm bg-success navbar-light">
    <div class="container-fluid">
        <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="../index.php"><p class="fw-bolder">Salir</p></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="home-admin.php"><p class="fw-bolder">Pagina de Administrador</p></a>
        </li>
    </div>
    </nav>
<div class="container mx-auto">
    <form action="emitir-consulta.php" method="POST">
    <div class="row text-xl-start col-lg-6 col-md-auto col-xl-6">    
        <div class="mb-3">
            <label for="usuario" class="form-label">Desea consultar sobre: </label><br><br>
            <input type="radio" id="cuidador" name="tabla" value="cuidador">
            <label for="cuidadores">Cuidadores</label><br>
            <input type="radio" id="conejo_productor" name="tabla" value="conejo_productor">
            <label for="conejo_productor">Conejos Productores</label><br>
        </div>
        <div class="d-grid">
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