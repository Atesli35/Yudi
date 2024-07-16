<?php
//poner en mayuscula el nombre de usuario
session_start();
$usuario = strtoupper($_SESSION['usuario']);

// solo pueden ingresar los administradores
if ($_SESSION['tipo'] = 'C'){

    $_SESSION['progenitor_A'] = $_POST['progenitor_A'];
    $_SESSION['progenitor_B'] = $_POST['progenitor_B'];
    $_SESSION['cant_gazapos'] = $_POST['cant_gazapos'];
    $_SESSION['fecha'] = $_POST['fecha'];
    $_SESSION['observacion'] = $_POST['observacion'];

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

    <form action="guardar-alta-paricion.php" method="post">
    <div class="d-block mx-auto col-4">   
        <div  class="d-flex mx-aut">    
            <label for="usuario" class="form-label">Nombre madre:  </label><p class="fw-bolder"><?php echo $_POST['progenitor_A']; ?></p>
        </div>
        <div  class="d-flex mx-aut">    
            <label for="usuario" class="form-label">Nombre padre:  </label><p class="fw-bolder"><?php echo $_POST['progenitor_B']; ?></p>
        </div>

        <div class="d-flex mx-auto">
            <label for="usuario" class="form-label">Cantidad de gazapos:  </label><p class="fw-bolder"><?php echo $_POST['cant_gazapos']; ?></p>
        </div>

        <div class="d-flex mx-auto">
            <label for="usuario" class="form-label">Fecha del alumbramiento:  </label><p class="fw-bolder"><?php echo $_POST['fecha']; ?></p>
        </div>

        <div class="d-flex mx-auto">
            <label for="usuario" class="form-label">Observaciones:  </label><p class="fw-bolder"><?php echo $_POST['observacion']; ?></p>
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