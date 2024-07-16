<?php
//poner en mayuscula el nombre de usuario
session_start();
$usuario = strtoupper($_SESSION['usuario']);

// solo pueden ingresar los administradores
if ($_SESSION['tipo'] = 'C'){

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
        <H5> CRIADOR <?php echo $usuario;?></h5>
    </div>

    <nav class="navbar navbar-expand-sm bg-success navbar-light">
    <div class="container-fluid">
        <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="../index.php"><p class="fw-bolder">Pagina Principal</p></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="home-criador.php"><p class="fw-bolder">Pagina del Criador</p></a>
        </li>
    </div>
    </nav>
    
    <!-- TIENE QUE DAR DE ALTA LAS PARICIONES Y LOS NUEVOS CONEJOS PRODUCTORES-->
    
    <form action="validar-alta-paricion.php" method="POST">
    <div class="d-block col-8 mx-auto">  
        <div class="d-grid">
            <label for="usuario" class="form-label mx-auto"><p class="fw-bold">Registrando una nueva parición</p></label>
        </div>  
        <div class="mx-auto col-12">
            <label for="usuario" class="form-label col-3">Progenitor madre : </label>
            <input type="usuario" class="form-control col-6" name="progenitor_A" placeholder="Ingrese el nombre de la madre">
        </div>

        <div class="mx-auto col-12">
            <label for="usuario" class="form-label col-3">Progenitor padre : </label>
            <input type="usuario" class="form-control" name="progenitor_B" placeholder="Ingrese el nombre del padre">
        </div>

        <div class="mx-auto col-12">
            <label for="usuario" class="form-label">Cantidad de gazapos nacidos: </label>
            <input type="usuario" class="form-control" name="cant_gazapos">
        </div>

        <div class="mx-auto col-12">
            <label for="usuario" class="form-label">fecha de la parición : </label>
            <input type="date" class="form-control" name="fecha" placeholder="aaaa-mm-yy">
        </div>
       
        <div class="mx-auto col-12">
            <label for="pass" class="form-label">Observación: </label><br>
            <input type="text" class="form-control"name="observacion">
        </div>

        <div class="d-flex">
            <div class="col-3 d-flex">
                <input type="button" class="btn btn-primary" onclick="javascript:history.go(-1)" name="Regresar" value="Volver Atrás">    
            </div>
            <div class="col-6 d-flex">
                <button type="submit" class="btn btn-primary" name="guardar">Ingresar nueva parición</button>
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