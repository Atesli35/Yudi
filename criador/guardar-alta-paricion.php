<?php
session_start();

$madre = $_SESSION['progenitor_A'];
$padre = $_SESSION['progenitor_B'];
$g = $_SESSION['cant_gazapos'];
$f = $_SESSION['fecha'];
$o = $_SESSION['observacion'];

include('../libreria/conexion.php');

$m=sacar_id_conejo($madre);
$p=sacar_id_conejo($padre);
$id=obtener_id_pariciones();

$conexion = conectar();
$consulta = "INSERT INTO pariciones (id_paricion, progenitor_A, progenitor_B, cant_gazapos, fecha_paricion, observacion) VALUES ('$id', '$m', '$p', '$g', '$f', '$o')";

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
include('home-criador.php');

?>