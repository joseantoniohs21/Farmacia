<?php
require_once "../php/conexion.php";
$conexion=conexion();
$tabla="";
if(isset($_POST['personas']))
{
   $p=$_POST['personas'];
   
$query="SELECT docente.cod_ffb,docente.dni,docente.nom_ffb,docente.email_ffb,docente.dep_ffb, docente.con_ffb, docente.cat_ffb, docente.clas_ffb FROM asistencia.docente WHERE docente.dni LIKE '%$p%'";

$buscarprofesor=mysqli_query($conexion,$query);
if(mysqli_num_rows($buscarprofesor)>0){

    $tabla.='';
            while($listado_p=mysqli_fetch_row($buscarprofesor))
            {
                $tabla.='  <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputEmail4">Nombre y Apellido</label>
                  <input type="text" class="form-control" id="" placeholder="Brayan Macedo"value="'.$listado_p[3].'">
                </div>    
                <div class="form-group col-md-6">
                  <label for="inputPassword4">Correo Electronico</label>
                  <input type="text" class="form-control" id="nom_ffb" placeholder="Bryan@gmail.com" value='.$listado_p[4].'>
                </div>
              </div>
                
                ';
            }
            $tabla.='';

        //     
        //     
        //     
        // 
        // </div>';

}else {
    $tabla.="<p>No se encontro el dni</p>";
}

}else{
    echo "";
}

echo $tabla;

mysqli_close($conexion);


?>