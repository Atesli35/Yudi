<?php
//poner en mayuscula el nombre de usuario
session_start();
$usuario = strtoupper($_SESSION['usuario']);

// solo pueden ingresar los administradores
if ($_SESSION['tipo'] = 'A'){

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
    <div class="container-fluid">
        <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="../index.php"><p class="fw-bolder">Pagina Principal</p></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="home-admin.php"><p class="fw-bolder">Pagina de Administrador</p></a>
        </li>
    </div>
    </nav>

    <form action="validar-alta.php" method="POST">
    <div class="d-block text-xl-start col-lg-6 col-md-auto col-xl-6 mx-auto">    
        <div class="mb-3">
            <label for="usuario" class="form-label">Nombre del criador: </label><input type="usuario" class="form-control" name="nombre" placeholder="Ingrese el nombre del cuidador">
        </div>

        <div class="mb-3">
            <label for="usuario" class="form-label">Teléfono de contacto: </label><input type="telefono" class="form-control" name="contacto" placeholder="Ingrese el telefono de contacto del cuidador">
        </div>

        <div class="mb-3">
            <label for="usuario" class="form-label">Nombre de usuario del criador: </label><input type="usuario" class="form-control" name="usuario">
        </div>

        <div class="mb-3">
            <label for="usuario" class="form-label">Contraseña : </label><input type="password" class="form-control" name="pass">
        </div>
       
        <div class="mb-3">
            <label for="pass" class="form-label">Tipo de usuario: </label><br>
            <input type="radio" name="tipo" value="A"><label for="usuario" class="form-label">Administrador</label><br>
            <input type="radio" name="tipo" value="C"><label for="usuario" class="form-label">Criador</label>
        </div>

        <div class="d-flex">
            <div class="col-3 d-flex">
                <input type="button" class="btn btn-primary" onclick="javascript:history.go(-1)" name="Regresar" value="Volver Atrás">    
            </div>
            <div class="col-6 d-flex">
                <button type="submit" class="btn btn-primary" name="guardar">Ingresar nuevo usuario</button>
            </div>
        </div>

    </div>
    </form>
</div>
</body>
</html>

<?php
} else {
    print "Usted no tiene acceso a esta página.";
}
session_write_close();
?>