<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="librerias/ulkit/css/uikit.min.css">
    <link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/alertify.css">
    <link rel="stylesheet" type="text/css" href="librerias/sweetAlert2/sweetalert2.min.css">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script:600&display=swap" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Yanone+Kaffeesatz&display=swap" rel="stylesheet">
    <script type="text/javascript" src="librerias/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/funciones.js"></script>
    <script type="text/javascript" src="librerias/ulkit/js/uikit.min.js"></script>
    <script type="text/javascript" src="librerias/bootstrap/js/bootstrap.min.js"></script>
    <script src="librerias/ulkit/js/uikit-icons.min.js"></script>
    <script src="librerias/alertifyjs/alertify.js"></script>
    <script src="librerias/sweetAlert2/sweetalert2.all.min.js"></script>
    <title>Asistencia</title>
  </head>
  <body >
  <!-- COMIENZA MENU PRINCIPAL -->
<div uk-sticky="show-on-up: true; animation: uk-animation-slide-top; bottom: #bottom" class="uk-navbar-container tm-navbar-container uk-sticky uk-sticky-fixed" style="background: #136F9D;">
    <div class="uk-container uk-container-expand">
      <nav class="uk-navbar uk-navbar-container uk-responsive-height uk-responsive-height" uk-navbar style="background:  #136F9D;" >

        <div class="uk-navbar-left">
          <div class="uk-card-header">
            <div class="uk-grid-small uk-flex-middle" uk-grid>
              <div class="uk-width-auto">
                <img src="librerias/logo/escudos.png" width="100px;" />
              </div>
              <div class="uk-width-expand">
                <h2 class="uk-card-title uk-margin-remove-bottom" style="font-family: 'Yanone Kaffeesatz', sans-serif; color:white;  font-size: xx-large;
                ">BIENVENIDO</h2>
                <p class="uk-text-meta uk-margin-remove-top" style=" font-family: 'Yanone Kaffeesatz', sans-serif; font-size: XX-LARGE; color: white; " id="estado">ADMIN🚀</p>
              </div>
            </div>
          </div>
        </div> 

        <div class="uk-navbar-right">
          <ul class="uk-navbar-nav uk-visible@m">

            <li>
              <a href="ingreso_datos.php" uk-toggle="" class="uk-button uk-button-text">
                <font style="vertical-align: inherit;  color: black; font-size: small ;">
                  <font style="vertical-align: inherit; color:white;">Agregar Docente</font>
                </font>
              </a>
            </li>    
          
            <li>
              <a href="index.php" uk-toggle="" class="uk-button uk-button-text">
                <font style="vertical-align: inherit;  color: black; font-size: small ;">
                  <font style="vertical-align: inherit; color:white;"><span uk-icon="icon: sign-out; ratio: 2"></span></font>
                </font>
              </a>
            </li>              
          </ul> 
        </div>
          <a uk-navbar-toggle-icon="" href="#offcanvas" uk-toggle="" class="uk-navbar-toggle uk-hidden@m uk-navbar-toggle-icon uk-icon" style="color:white;">
          </a>     
      </nav>
    </div>
  </div>
<!-- ACABA MENU PRINCIPAL -->

 <div class="uk-container uk-container-expand">
 <!-- <h1 class="text-center">Reporte</h1> -->
 <br>
 <div class="uk-margin">
<!--<p>Este buscador ayudar para hacer reportes especificos aun  esta en proceso de programacion</p>
        <div class="uk-inline">
            <span class="uk-form-icon" uk-icon="icon:  search"></span>
            <input class="uk-input" type="text"  style="border-radius:25px;" placeholder="Buscar Docente: Dni">
        </div>&nbsp;&nbsp;&nbsp;-->
        
     <!--   <a href= "./excel.php" class="btn-small blue">Descargar excel </a>  -->




        <a href= "./excel.php" class="btn btn-info">Descargar Reporte General</a>
        <input class="btn btn-info" type="button" name="imprimir" value="Imprimir" onclick="window.print();">

    </div>
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
    INNER JOIN asignatura on asignatura.cod_asig= registro.cod_asig
       
    ";
    
    //docente.dni='01066653  WHERE marca_temporal='2021-07-10 15:35:31'
   
   //REPORTE DNI
   // $sql="SELECT docente.dni,
   //docente.cod_ffb,
   //docente.nom_ffb,
   //docente.email_ffb,
   //departamento.coddep_ffb
  // departamento.dep_ffb,
   //registro.esc_ffb,
  // nom_asignatura.codasig_ffb,
  // nom_asignatura.asig_ffb,
  // registro.act_ffb,registro.hini_ffb,
   //registro.hfin_ffb,
  // registro.marca_temporal 
  // FROM registro INNER JOIN docente ON docente.dni = registro.dni INNER JOIN departamento ON departamento.coddep_ffb = registro.coddep_ffb INNER JOIN nom_asignatura ON nom_asignatura.codasig_ffb = registro.codasig_ffb WHERE docente.dni='07237298'"; 
    
  $query=mysqli_query($conexion,$sql);
    while($ver=mysqli_fetch_row($query)){
        
    
    ?>
            <tr>
            <th scope="row"><?php echo $ver[0]; ?></th>  <!-- Marcatemporal -->
           
            <td><?php echo $ver[1]; ?></td>  <!-- email -->
            <td><?php echo $ver[2]; ?></td>  <!-- dni -->
            <td align="left"><?php echo $ver[3]; ?></td>   <!-- nombre y apellido -->
            <td><?php echo $ver[4]; ?></td>   <!-- codigo -->
            <td align="left"><?php echo $ver[5]; ?></td>   <!-- departamento academico -->
            <td><?php echo $ver[6]; ?></td>   <!-- Escuela Profesional -->
            <td align="left"><?php echo $ver[7]; ?></td>   <!-- Nom asignatura -->
            <td align="left"><?php echo $ver[8]; ?></td>   <!-- actividad -->
            <td><?php echo $ver[9]; ?></td>   <!-- hora de inicio -->
            <td><?php echo $ver[10]; ?></td>   <!-- hora de fin -->
            </tr>
            <?php }?>
         
        </tbody>
        </table>    
 </div>
  </body>
</html>
<script type="text/javascript">
$(document).ready(function(){
    $('#docentes').load('componentes/tabla_docentes.php');
 
});
</script>