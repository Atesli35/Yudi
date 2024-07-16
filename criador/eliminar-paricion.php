<?php
//poner en mayuscula el nombre de usuario
session_start();

// solo pueden ingresar los administradores
if ($_SESSION['tipo'] = 'C'){
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
        <H5> CUIDADOR <?php echo $usuario;?></h5>
    </div>

    <nav class="navbar navbar-expand-sm bg-success navbar-light">
    <div class="d-flex">
        <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="../index.php"><p class="fw-bolder">Salir</p></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="home-criador.php"><p class="fw-bolder">Pagina del Criador</p></a>
        </li>
    </div>
    </nav>

    <form action="efectuar-eliminacion-paricion.php" method="POST">
    <div class="d-flex col-10 mx-auto text-xl-start col-lg-auto col-md-auto col-xl-auto">    
        <div class="d-flex mx-auto col-4 p-2 mt-2>
            <label for="usuario" class="form-label">Ingrese el ID del registro de parición que quiere eliminar: </label>
        </div>
        <div class="d-flex mx-auto col-3">
            <input type="usuario" class="form-control" name="id" placeholder="Ingrese el ID">
        </div>

        <div class="d-flex mx-auto col-3">
            <button type="submit" class="btn btn-primary">Eliminar</button>
        </div>
    </div>
    </form>
    <?php
    include('../libreria/conexion.php');
    $conexion = conectar();
    $consulta = "SELECT * FROM pariciones";
    $resultado = mysqli_query ($conexion, $consulta);
    ?>
    <div class="d-flex">
        <div class="mx-auto">
        <table class="table" align="center">
            <thead class="table-success table-striped">
                <tr>
                    <th>Id</th>
                    <th>Madre</th>
                    <th>Padre</th>
                    <th>Cantidad de gazapos registrados</th>
                    <th>Fecha de parición</th>
                    <th>observación registrada</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($fila = mysqli_fetch_array($resultado)) {
                    $madre=traer_nombre_conejo($fila['progenitor_A']);
                    $padre=traer_nombre_conejo($fila['progenitor_B']);
                    ?>
                    <tr>
                        <td><?php echo $fila['id_paricion'] ?></td>
                        <td><?php echo $madre ?></td>
                        <td><?php echo $padre ?></td>
                        <td><?php echo $fila['cant_gazapos'] ?></td>
                        <td><?php echo $fila['fecha_paricion'] ?></td>
                        <td><?php echo $fila['observacion'] ?></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
        </div>

</div>
</div>
</body>
</html>

<?php
}
session_write_close();
?>