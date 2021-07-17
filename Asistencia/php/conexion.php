<?php 
function conexion(){

    $servidor="localhost";
    $usuario="root";
    $clave="";
    $bd="asistencia";

    $conexion=mysqli_connect($servidor,$usuario,$clave,$bd);
    return $conexion;
        
}

?>
