<?php
//poner en mayuscula el nombre de usuario
session_start();

// solo pueden ingresar los administradores
if ($_SESSION['tipo'] = 'A') {
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
<div class="container">
    <div class="row text-xl-end col-lg-12 col-md-auto col-xl-12">
        <H5> ADMINISTRADOR <?php echo $usuario; ?></h5>
    </div>

    <nav class="navbar navbar-expand-sm bg-success navbar-light">
    <div class="container-fluid">
        <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="../index.html"><p class="fw-bolder">Salir</p></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="home-admin.php"><p class="fw-bolder">Pagina de Administrador</p></a>
        </li>
    </div>
    </nav>
<?php
//print_r($_POST);
include('../libreria/conexion.php');
$conexion = conectar();
$tabla = $_POST['tabla'];

switch ($tabla) {
    case 'conejo_productor':
    $consulta = "SELECT * FROM $tabla";
    $resultado = mysqli_query ($conexion, $consulta);
    ?>
    <div class="d-flex">
        <div class="mx-auto">
        <table class="table" align="center">
            <thead class="table-success table-striped">
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Coneja</th>
                    <th>Conejo</th>
                    <th>Fecha de Nacimiento</th>
                    <th>Género</th>
                    <th>Peso al iniciar la poducción (en gr)</th>
                    <th>Cuidador</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($fila = mysqli_fetch_array($resultado)) {
                    $cuidador=traer_cuidador($fila['id_cuidador']);
                    ?>
                    <tr>
                        <td><?php echo $fila['Id_conejo'] ?></td>
                        <td><?php echo $fila['nombre'] ?></td>
                        <td><?php echo $fila['madre'] ?></td>
                        <td><?php echo $fila['padre'] ?></td>
                        <td><?php echo $fila['Fecha_Nac'] ?></td>
                        <td><?php echo $fila['genero'] ?></td>
                        <td><?php echo $fila['peso_inicial'] ?></td>
                        <td><?php echo $cuidador ?></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
        </div>
        <div class="d-flex col-6 mx-auto">
            <a href="imprimir-conejoproductor.php"><p class="fw-bolder"> I M P R I M I R</p></a>    
        </div>
    </div><?php
        break;

    case 'cuidador':
    $consulta = "SELECT * FROM $tabla";
    $resultado = mysqli_query ($conexion, $consulta);
    ?>
    <div class="d-flex">
        <div class="mx-auto">
        <table class="table">
            <thead class="table-success table-striped">
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Telefono de contacto</th>
                    <th>Nombre de usuario</th>
                    <th>Tipo de Usuario</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($fila = mysqli_fetch_array($resultado)) {
                    ?>
                    <tr>
                        <td><?php echo $fila['Id_cuidador'] ?></th>
                        <td><?php echo $fila['nombre'] ?></th>
                        <td><?php echo $fila['contacto'] ?></th>
                        <td><?php echo $fila['usuario'] ?></th>
                        <td><?php echo $fila['tipo'] ?></th>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
        </div>
    </div>
    <?php
    break;
}?>
    <div class="d-flex col-6 mx-auto">
        <input type="button" class="btn btn-primary mx-auto" onclick="javascript:history.go(-1)" name="Regresar" value="Volver Atrás">    
    </div> 
</div>
<?php
mysqli_close($conexion);
session_write_close();
//include('home-admin.php');
}
?>