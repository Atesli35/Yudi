<?php
session_start();

$n = $_SESSION['nombre'];
$m = $_SESSION['madre'];
$p = $_SESSION['padre'] ;
$f = $_SESSION['Fecha_Nac']; 
$g = $_SESSION['genero'];
$pp = $_SESSION['peso'];
$o = $_SESSION['observacion'];

$criador= $_SESSION['nombre_criador'];

include('../libreria/conexion.php');

$id_c=sacar_id_criador($criador);

$conexion = conectar();
$consulta = "INSERT INTO conejo_productor (Id_conejo, nombre, madre, padre, Fecha_Nac, genero, peso_inicial, observacion, id_cuidador) 
                                    VALUES (NULL, '$n', '$m', '$p', '$f', '$g', '$pp', '$o', '$id_c')";

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