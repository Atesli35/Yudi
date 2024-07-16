<?php
//poner en mayuscula el nombre de usuario
session_start();

// solo pueden ingresar los administradores
if ($_SESSION['tipo'] = 'A'){
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
    <div class="container-fluid">
        <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="../index.php"><p class="fw-bolder">Salir</p></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="home-admin.php"><p class="fw-bolder">Pagina Principal del Administrador</p></a>
        </li>
    </div>
    </nav>
    
    <?php
        include('../libreria/conexion.php');
        $datos = buscar_datos($_POST['nombreM']);
        if ($datos){
        //print_r($datos);
    ?>

        <form action="guardar-modificacion.php" method="post">
        <div class="d-block mx-auto col-8">    
            
            <div class="d-flex p-2 col-8">
                <label for="usuario">Id del usuario:  </label><p class="fw-bolder"><?php echo $datos['Id_cuidador'];?></p>
                <input type="hidden" name="Id_cuidador" value="<?php echo $datos['Id_cuidador'];?>">
            </div>
            
            <div class="d-flex p-2 mx-auto col-12">
                <label for="usuario" class="col-3">Nombre:  </label>
                <input type="usuario" class="form-control" name="nombreNuevo" placeholder="<?php echo $datos['nombre'];?>">
            </div>

            <div class="d-flex p-2 mx-auto col-12">
                <label for="usuario" class="col-3">Teléfono de contacto:</label>
                <input type="usuario" class="form-control" name="contactoNuevo" placeholder="<?php echo $datos['contacto'];?>">
            </div>

            <div class="d-flex p-2 mx-auto col-12">
                <label for="usuario" class="col-3">Nombre de usuario:  </label>
                <input type="usuario" class="form-control" name="usuarioNuevo" placeholder="<?php echo $datos['usuario'];?>">
            </div>
            
            <div class="d-flex p-1 mx-auto col-12">
                <label for="usuario" class="col-3">Nueva contraseña de usuario:  </label>
                <input type="password" class="form-control" name="passNuevo" placeholder="<?php $datos['pass'];?>">
            </div>
            
            <div class="d-flex p-2 mx-auto col-12">
                <label for="usuario" class="col-3">Tipo de Usuario:</label>
                <p class="fw-bolder">
                <?php 
                switch ($datos['tipo']) {
                    case 'A':
                        echo "Administrador";
                        break;
                    case 'C':
                        echo "Cuidador";
                        break;
                }
                ?> 
                </p>
            </div>
            <div class="d-flex mx-auto col-12" style="width:500px;"> 
                <input type="radio" name="tipoNuevo" value="A" class="p-2"><p class="fw-normal p-2">Administrador</p>
                <input type="radio" name="tipoNuevo" value="C" class="p-2"><p class="fw-normal p-2">Cuidador</p>
            </div>

            <div class="d-flex row-1">
                <div class="col-3 mx-auto p-2">
                    <input type="button" class="btn btn-primary" onclick="javascript:history.go(-1)" name="Regresar" value="Volver Atrás">    
                </div>
                <div class="col-3 mx-auto">
                    <button type="submit" class="btn btn-primary" name="guardar">Guardar</button>
                </div>
            </div>
        </div>
        </form>
</div>
<?php
        } else {
            ?>  <h3>¡UPS! NO HAY NINGÚN USUARIO CON ESE NOMBRE</h3>  <?php
            //sleep(10);
            //include("home-admin.php");
            //header("location:home-admin.php");
            //session_write_close();
            }?>
</body>
</html>
<?php
}
session_write_close();
?>