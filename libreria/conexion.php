<?php

function conectar(){

    $server = "localhost";
    $user = "root";
    $pass = "";
    $bd = "db-conejos";


    $conexion = mysqli_connect($server, $user, $pass,$bd) 
        or die("Ha sucedido un error inexperado en la conexion de la base de datos");

    return $conexion;
} 
function buscar_datos($a_buscar){
    //me conecto a la bd
    $conexion = conectar();

    //busco el dato y lo traigo
    $consulta = "SELECT * FROM cuidador WHERE nombre = '$a_buscar'";
    $resultado = mysqli_query($conexion, $consulta);
    $fila = mysqli_fetch_array($resultado);

     //entrego lo que busqué o aviso que no hay nadie así
     //Retorna un array que corresponde a la fila obtenida o null si es que no hay más filas en el resultset representado por el parámetro result.
    
    return $fila;
}

function traer_cuidador($id_cuidador){
    //me conecto a la bd
    $conexion = conectar();

    //busco el dato y lo traigo
    $consulta = "SELECT * FROM cuidador WHERE Id_cuidador = '$id_cuidador'";
    $resultado = mysqli_query($conexion, $consulta);
    $fila = mysqli_fetch_array($resultado);

     //entrego lo que busqué o aviso que no hay nadie así
     //Retorno solo el nombre del id que me pasaron.
    return $fila['nombre'];
}
function sacar_id_conejo($nombre){
    //me conecto a la bd
    $conexion = conectar();

    //busco el dato y lo traigo
    $consulta = "SELECT * FROM conejo_productor WHERE nombre = '$nombre'";
    $resultado = mysqli_query($conexion, $consulta);
    $fila = mysqli_fetch_array($resultado);
    $dato=$fila['Id_conejo'];
    mysqli_close($conexion);

     //Retorno solo el nombre del id que me pasaron.
     return $dato;
}

function traer_nombre_conejo($id){
    //me conecto a la bd
    $conexion = conectar();

    //busco el dato y lo traigo
    $consulta = "SELECT * FROM conejo_productor WHERE Id_conejo = '$id'";
    $resultado = mysqli_query($conexion, $consulta);
    $fila = mysqli_fetch_array($resultado);
    $dato=$fila['nombre'];
    mysqli_close($conexion);

     //Retorno solo el nombre del id que me pasaron.
     return $dato;
}

function sacar_id_criador($criador){
    //me conecto a la bd
    $conexion = conectar();

    //busco el dato y lo traigo
    $consulta = "SELECT * FROM cuidador WHERE nombre = '$criador'";
    $resultado = mysqli_query($conexion, $consulta);
    $fila = mysqli_fetch_array($resultado);
    $dato=$fila['Id_cuidador'];
    mysqli_close($conexion);

     //Retorno solo el nombre del id que me pasaron.
     return $dato;
}
function obtener_id_pariciones(){
    //me conecto a la bd
    $conexion = conectar();

    //busco el dato y lo traigo
    $consulta = "SELECT MAX(id_paricion) FROM pariciones";
    $resultado = mysqli_query($conexion, $consulta);
    $fila = mysqli_fetch_array($resultado);
    $dato=$fila['id_paricion'];
    mysqli_close($conexion);

     //Retorno lo que me piden.
     return $dato++;
}
function traer_nombre_criador($id){
    //me conecto a la bd
    $conexion = conectar();

    //busco el dato y lo traigo
    $consulta = "SELECT * FROM cuidador WHERE Id_cuidador='$id'";
    $resultado = mysqli_query($conexion, $consulta);
    $fila = mysqli_fetch_array($resultado);
    $dato = $fila['nombre'];
    mysqli_close($conexion);

    //Retorno lo que me piden.
     return $dato;
}
?>