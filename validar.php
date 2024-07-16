<?php
$usuario = $_POST['usuario'];
$pass = $_POST['pass'];

session_start();
$_SESSION['usuario'] = $usuario;

include('libreria/conexion.php');
$conexion = conectar();
$consulta = "SELECT * FROM cuidador WHERE usuario='$usuario' and pass='$pass'";
$resultado = mysqli_query($conexion, $consulta);

$filas = mysqli_num_rows($resultado);
if ($filas){
    $datos = mysqli_fetch_array($resultado);
} else {
    ?>
    <?php
    include("index.php");
    ?>
    <h1>ERROR EN LA AUTENTIFICACIÓN</h1>
    <?php
}

print_r($datos);

$_SESSION['tipo'] = $datos['tipo'];

if ($datos['tipo'] == 'A') {
        header("location:admin/home-admin.php");
    } else {
        header("location:criador/home-criador.php");
    }

mysqli_free_result($resultado);
mysqli_close($conexion);
//session_write_close();
?>