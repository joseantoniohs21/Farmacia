<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
header ("content-type: application/xls");
header ("content-disposition: attachment; filename=Reporte_general_FFB.xls");
header("Pragma: no-cache");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
?>
    <table class="table">
        <thead class="thead-light">
            <tr Class="text-center">
            <th scope="col">Marca Temp</th>
            <th scope="col">Correo</th>
            <th scope="col">DNI</th>
            <th scope="col">NOMBRE Y APELLIDOS</th>
            <th scope="col">CODIGO</th>
            <th scope="col">Dep Académico</th>
            <th scope="col">Escuela Profesional</th>
            <th scope="col">Nom Asignatura</th>
            <th scope="col">Actividad</th>
            <th scope="col">H.Inicio</th>
            <th scope="col">H.Fin</th>
            </tr>
        </thead>
        <tbody class="text-center">
        <?php 


// echo $dinero producirá "103.1";

// echo $formateado producirá "103.10"

    require_once "php/conexion.php";
	$conexion=conexion();
    $sql="SELECT registro.marca_temporal,
    docente.email_ffb,
    docente.dni,
    docente.nom_ffb,
    docente.cod_ffb,
    docente.dep_ffb,
    esc_pro.escuela,
    asignatura.nom_asig,
    registro.act_ffb,
    registro.hini_ffb,
    registro.hfin_ffb 
    FROM registro      
    INNER JOIN docente on docente.dni = registro.dni
    INNER JOIN esc_pro on esc_pro.cod_esc = registro.cod_esc
    INNER JOIN asignatura on asignatura.cod_asig= registro.cod_asig";
    
  $query=mysqli_query($conexion,$sql);
    while($ver=mysqli_fetch_row($query)){
        $ver2=$ver[2];
        ?>
            <tr>
            <th scope="row"><?php echo $ver[0]; ?></th>  <!-- Marcatemporal -->
           
            <td><?php echo $ver[1]; ?></td>  <!-- email -->
            <td><?php echo $ver2; ?></td>  <!-- dni -->
            <td><?php echo $ver[3]; ?></td>   <!-- nombre y apellido -->
            <td><?php echo $ver[4]; ?></td>   <!-- codigo -->
            <td><?php echo $ver[5]; ?></td>   <!-- departamento academico -->
            <td><?php echo $ver[6]; ?></td>   <!-- Escuela Profesional -->
            <td><?php echo $ver[7]; ?></td>   <!-- Nom asignatura -->
            <td><?php echo $ver[8]; ?></td>   <!-- actividad -->
            <td><?php echo $ver[9]; ?></td>   <!-- hora de inicio -->
            <td><?php echo $ver[10]; ?></td>   <!-- hora de fin -->
            </tr>
            <?php }?>
         
        </tbody>
        </table>  
        
</body>
</html>
