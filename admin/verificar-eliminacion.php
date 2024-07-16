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
    <div class="d-flex">
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

    <form action="efectuar-eliminacion.php" method="post">
        <div class="d-block col-8 mx-auto text-xl-start col-lg-6 col-md-auto col-xl-6">    
            
            <div class="d-flex p-2 mx-auto col-12">
                <label for="usuario" class="col-3">Id del usuario:</label><p class="fw-bolder col-3"><?php echo $datos['Id_cuidador'];?></p>
                <input type="hidden" name="Id_cuidador" value="<?php echo $datos['Id_cuidador'];?>">
            </div>
            
            <div class="d-flex p-2 mx-auto col-12">
                <label for="usuario" class="col-3">Nombre:  </label><p class="fw-bolder col-3"><?php echo $datos['nombre'];?></p>
            </div>

            <div class="d-flex p-2 mx-auto col-12">
                <label for="usuario" class="col-3">Teléfono de contacto:</label><p class="fw-bolder col-3"><?php echo $datos['contacto'];?></p>
            </div>

            <div class="d-flex p-2 mx-auto col-12">
                <label for="usuario" class="col-3">Nombre de usuario:  </label><p class="fw-bolder col-3"><?php echo $datos['usuario'];?></p>
            </div>
            
            <div class="d-flex p-2 mx-auto col-12">
                <label for="usuario" class="col-3">Tipo de usuario:  </label><p class="fw-bolder col-3">
            <?php 
                switch ($datos['tipo']) {
                    case 'A':
                        echo "Administrador";
                        break;
                    case 'C':
                        echo "Cuidador";
                        break;
                }
            ?> </p>
             </div>

            <div class="d-flex col-9">
                <div class="col-6 d-flex mx-auto p-2">
                    <input type="button" class="btn btn-primary" onclick="javascript:history.go(-1)" name="Regresar" value="Volver Atrás">    
                </div>
                <div class="col-3 d-flex mx-auto">
                    <button type="submit" class="btn btn-primary" name="eliminar">Eliminar</button>
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