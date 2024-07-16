<?php
//poner en mayuscula el nombre de usuario
session_start();
$usuario = strtoupper($_SESSION['usuario']);

// solo pueden ingresar los administradores
if ($_SESSION['tipo'] = 'A'){

    $_SESSION['nombreG'] = $_POST['nombre'];
    $_SESSION['contactoG'] = $_POST['contacto'];
    $_SESSION['usuarioG'] = $_POST['usuario'];
    $_SESSION['passG'] = $_POST['pass'];
    $_SESSION['tipoG'] = $_POST['tipo'];

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
            <a class="nav-link" href="../index.php"><p class="fw-bolder">Regresar a la Pagina Principal</p></a>
        </li>
    </div>
    </nav>

    <form action="guardar-alta.php" method="post">
    <div class="d-block mx-auto col-4">    
        <div  class="d-flex mx-aut">
            <label for="usuario" class="form-label">Nombre:  </label><p class="fw-bolder"><?php echo $_POST['nombre']; ?></p>
        </div>

        <div class="d-flex mx-auto">
            <label for="usuario" class="form-label">Teléfono de contacto:  </label><p class="fw-bolder"><?php echo $_POST['contacto']; ?></p>
        </div>

        <div class="d-flex mx-auto">
            <label for="usuario" class="form-label">Nombre de usuario:  </label><p class="fw-bolder"><?php echo $_POST['usuario']; ?></p>
        </div>

        <div class="d-flex mx-auto">
            <label for="usuario" class="form-label">Tipo de usuario:  </label><p class="fw-bolder">
            <?php 
            switch ($_POST['tipo']) {
                case 'A':
                    echo "Administrador";
                    break;
                case 'C':
                    echo "Cuidador";
                    break;
            }?></p>
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