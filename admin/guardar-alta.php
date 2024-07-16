<?php
session_start();

$n = $_SESSION['nombreG'];
$c = $_SESSION['contactoG'];
$u = $_SESSION['usuarioG'];
$p = $_SESSION['passG'];
$t = $_SESSION['tipoG'];

include('../libreria/conexion.php');
$conexion = conectar();
$consulta = "INSERT INTO cuidador(Id_cuidador, nombre, contacto, usuario, pass, tipo) VALUES (NULL, '$n', '$c', '$u', '$p', '$t')";

$resultado = mysqli_query($conexion, $consulta);

if ($resultado){
    ?>
    <h4>Los datos se guardaron correctamente</h4>
    <?php
} else {
    ?>
    <h4>¡UPS! ha ocurrido un error</h4>
    <?php
}

session_write_close();
mysqli_close($conexion);
include('home-admin.php');

?>