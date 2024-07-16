<?php
//poner en mayuscula el nombre de usuario
session_start();
$usuario = strtoupper($_SESSION['usuario']);

// solo pueden ingresar los administradores
if ($_SESSION['tipo'] = 'C'){
//print_r($_POST);

    $_SESSION['nombre'] = $_POST['nombre'];
    $_SESSION['madre'] = $_POST['madre'];
    $_SESSION['padre'] = $_POST['padre'];
    $_SESSION['Fecha_Nac'] = $_POST['Fecha_Nac'];
    $_SESSION['genero'] = $_POST['genero'];
    $_SESSION['peso'] = $_POST['peso'];
    $_SESSION['observacion'] = $_POST['observacion']; 
    $_SESSION['nombre_criador'] = $_POST['nombre_criador'];

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
        <H5>CRIADOR <?php echo $usuario;?></h5>
    </div>

    <nav class="navbar navbar-expand-sm bg-success navbar-light">
    <div class="container-fluid">
        <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="../index.php"><p class="fw-bolder">Regresar a la Pagina Principal</p></a>
        </li>
    </div>
    </nav>

    <form action="guardar-alta-productor.php" method="post">
    <div class="d-block mx-auto col-4">   
        <div  class="d-flex mx-aut">    
            <label for="usuario" class="form-label">Nombre : </label><p class="fw-bolder"><?php echo $_POST['nombre']; ?></p>
        </div>
        <div  class="d-flex mx-aut">    
            <label for="usuario" class="form-label">Nombre madre:  </label><p class="fw-bolder"><?php echo $_POST['madre']; ?></p>
        </div>
        <div  class="d-flex mx-aut">    
            <label for="usuario" class="form-label">Nombre padre:  </label><p class="fw-bolder"><?php echo $_POST['padre']; ?></p>
        </div>
        <div class="d-flex mx-auto">
            <label for="usuario" class="form-label">Fecha del Nacimiento:  </label><p class="fw-bolder"><?php echo $_POST['Fecha_Nac']; ?></p>
        </div>
        <div class="d-flex mx-auto">
            <label for="usuario" class="form-label">Género:  </label><p class="fw-bolder"><?php echo $_POST['genero']; ?></p>
        </div>
        <div class="d-flex mx-auto">
            <label for="usuario" class="form-label">Peso:  </label><p class="fw-bolder"><?php echo $_POST['peso']; ?></p>
        </div>
        <div class="d-flex mx-auto">
            <label for="usuario" class="form-label">Observación:  </label><p class="fw-bolder"><?php echo $_POST['observacion']; ?></p>
        </div>
       

        <div class="d-flex mx-auto">
            <label for="usuario" class="form-label">Nombre del Criador:  </label><p class="fw-bolder"><?php echo $_POST['nombre_criador']; ?></p>
        </div>

        <div class="d-flex">
            <div class="col-4 mx-auto p-2">
                <input type="button" class="btn btn-primary" onclick="javascript:history.go(-1)" name="Regresar" value="Volver Atrás">    
            </div>
            <div class="col-2 mx-auto">
                <button type="submit" class="btn btn-primary" name="guardar">Guardar</button>
            </div>
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