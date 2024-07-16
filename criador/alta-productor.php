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
    
    <form action="validar-alta-productor.php" method="POST">
    <div class="d-block col-8 mx-auto">  
        <div class="d-grid">
            <label for="usuario" class="form-label mx-auto"><p class="fw-bold">Registrando una nuevo Conejo productor</p></label>
        </div> 
        <div class="mx-auto col-12">
            <label for="usuario" class="form-label col-3">N O M B R E : </label>
            <input type="usuario" class="form-control col-6" name="nombre" placeholder="Ingrese el nombre del conejo/a">
        </div>
        <div class="mx-auto col-12">
            <label for="usuario" class="form-label col-3">Progenitor madre : </label>
            <input type="usuario" class="form-control col-6" name="madre" placeholder="Ingrese el nombre de la madre">
        </div>
        <div class="mx-auto col-12">
            <label for="usuario" class="form-label col-3">Progenitor padre : </label>
            <input type="usuario" class="form-control" name="padre" placeholder="Ingrese el nombre del padre">
        </div>
        <div class="mx-auto col-12">
            <label for="usuario" class="form-label">Fecha de nacimiento : </label>
            <input type="date" class="form-control" name="Fecha_Nac" placeholder="aaaa-mm-yy">
        </div>
        <div class="mx-auto col-12">
            <label for="usuario" class="form-label">Género: </label>
            <input type="radio" name="genero" value="Femenino"><label for="femenino">Femenino</label>
            <input type="radio" name="genero" value="Masculino"><label for="masculino">Masculino</label>
        </div>
        <div class="mx-auto col-12">
            <label for="usuario" class="form-label">Peso al iniciar la producción : </label>
            <input type="usuario" class="form-control" name="peso">
        </div>
        <div class="mx-auto col-12">
            <label for="usuario" class="form-label">Observaciones : </label>
            <input type="text" class="form-control" name="observacion" placeholder="Ingrese alguna caracteristica o particularidad que podrían heredar los gazapos">
        </div>
        <div class="mx-auto col-12">
            <label for="pass" class="form-label">Nombre del criador: </label>
            <input type="text" class="form-control"name="nombre_criador"> 
        </div>

        <div class="d-flex">
            <div class="col-3 d-flex">
                <input type="button" class="btn btn-primary" onclick="javascript:history.go(-1)" name="Regresar" value="Volver Atrás">    
            </div>
            <div class="col-6 d-flex">
                <button type="submit" class="btn btn-primary" name="guardar">Ingresar nuevo conejo reproductor</button>
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