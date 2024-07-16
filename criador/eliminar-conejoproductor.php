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

    <form action="efectuar-eliminacion-conejoproductor.php" method="POST">
    <div class="d-flex col-10 mx-auto text-xl-start col-lg-auto col-md-auto col-xl-auto">    
        <div class="d-flex mx-auto col-4 p-2 mt-2>
            <label for="usuario" class="form-label">Ingrese el ID del conejo reproductor que quiere eliminar: </label>
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
    $consulta = "SELECT * FROM conejo_productor";
    $resultado = mysqli_query ($conexion, $consulta);
    ?>
    <div class="d-flex">
        <div class="mx-auto">
        <table class="table" align="center">
            <thead class="table-success table-striped">
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>                    
                    <th>Madre</th>
                    <th>Padre</th>
                    <th>Nació el</th>
                    <th>Genero</th>
                    <th>Peso Inicial</th>
                    <th>Observación registrada</th>
                    <th>Cuidador</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($fila = mysqli_fetch_array($resultado)) {
                    $criador=traer_nombre_criador($fila['id_cuidador']);
                    ?>
                    <tr>
                        <td><?php echo $fila['Id_conejo'] ?></td>
                        <td><?php echo $fila['nombre'] ?></td>
                        <td><?php echo $fila['madre'] ?></td>
                        <td><?php echo $fila['padre'] ?></td>
                        <td><?php echo $fila['Fecha_Nac'] ?></td>
                        <td><?php echo $fila['genero'] ?></td>
                        <td><?php echo $fila['peso_inicial'] ?></td>
                        <td><?php echo $fila['observacion'] ?></td>
                        <td><?php echo $criador ?></td>
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