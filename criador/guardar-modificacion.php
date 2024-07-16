<?php
session_start();
if ($_SESSION['tipo'] = 'A') {

    $usuario = strtoupper($_SESSION['usuario']);
    //print_r($_POST);

    $ID = $_POST['Id_cuidador'];
    $n = $_POST['nombreNuevo'];
    $c = $_POST['contactoNuevo'];
    $u = $_POST['usuarioNuevo'];
    $p = $_POST['passNuevo'];
    $t = $_POST['tipoNuevo'];
    
    //si se apreto el boton guardar
    include('../libreria/conexion.php');
    $conexion = conectar();
    $consulta = "UPDATE cuidador SET Id_cuidador='$ID', nombre='$n', contacto='$c', usuario='$u', pass='$p', tipo='$t' WHERE Id_cuidador='$ID'";
             //  UPDATE cuidador SET Id_cuidador='16', nombre='ale1A',contacto='123456',usuario='ale1A',pass='ale1A',tipo='C' WHERE Id_cuidador='16'

    $resultado = mysqli_query($conexion, $consulta);
        
    if ($resultado) {
    ?>  <h4>Los datos se modificaron correctamente</h4>  <?php
    } else {
        ?>  <h4>¡UPS! ha ocurrido un error</h4>  <?php
    }
    session_write_close();
    mysqli_close($conexion);
}
include('home-admin.php');

?>