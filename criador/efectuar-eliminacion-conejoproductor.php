<?php
session_start();
if ($_SESSION['tipo'] = 'C') {

    $usuario = strtoupper($_SESSION['usuario']);
    
    //echo "array POST:  ";
    //print_r($_POST);
    
    $ID = $_POST['id'];
   
    include('../libreria/conexion.php');
    $conexion = conectar();
    $consulta = "DELETE FROM conejo_productor WHERE Id_conejo='$ID'";

    $resultado = mysqli_query($conexion, $consulta);

        if ($resultado) {
            ?>  <h4>Los datos se ELIMINARON definitivamente</h4>  <?php
        } else {
            ?>  <h4>¡UPS! no fue posible eliminar los datos</h4>  <?php
        }
        mysqli_close($conexion);
    }
session_write_close();
include('home-criador.php');

?>