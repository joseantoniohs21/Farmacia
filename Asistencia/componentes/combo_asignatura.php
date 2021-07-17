<?php 

require_once "../php/conexion.php";
$conexion=conexion();

$cod_esc=mysqli_real_escape_string($conexion,$_POST['cod_esc']);

$sql4="SELECT * FROM asignatura WHERE cod_esc=$cod_esc";
$query4=mysqli_query($conexion,$sql4);

          $cadena="<option selected>ESCOJA...</option> ";
                
                while ($ver4=mysqli_fetch_row($query4)) {
                 $cadena=$cadena.'<option value='.$ver4[0].'>'.$ver4[2].'</option>';
                } 
          
                 echo $cadena;
?>