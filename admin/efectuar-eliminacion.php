<?php
session_start();
if ($_SESSION['tipo'] = 'A') {

    $usuario = strtoupper($_SESSION['usuario']);
    
    //me trae TRUE el button que se apreto
    //echo "array POST:  ";
    //print_r($_POST);
    
    $ID = $_POST['Id_cuidador'];
    if ($_POST['eliminar']='true'){
        include('../libreria/conexion.php');
        $conexion = conectar();
        $consulta = "DELETE FROM cuidador WHERE Id_cuidador='$ID'";

        $resultado = mysqli_query($conexion, $consulta);

        if ($resultado) {
            ?>  <h4>Los datos se ELIMINARON definitivamente</h4>  <?php
        } else {
            ?>  <h4>¡UPS! no fue posible eliminar los datos</h4>  <?php
        }
        mysqli_close($conexion);
    }
session_write_close();
}
include('home-admin.php');

?>