<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/css/bootstrap-select.min.css'>



    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="librerias/ulkit/css/uikit.min.css">
    <!--<link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.min.css">-->
    <link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/alertify.css">
    <link rel="stylesheet" type="text/css" href="librerias/sweetAlert2/sweetalert2.min.css">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script:600&display=swap" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Yanone+Kaffeesatz&display=swap" rel="stylesheet">
    <script type="text/javascript" src="librerias/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/funciones.js"></script>
    <script type="text/javascript" src="librerias/ulkit/js/uikit.min.js"></script>
    <!--<script type="text/javascript" src="librerias/bootstrap/js/bootstrap.min.js"></script>-->
    <script src="librerias/ulkit/js/uikit-icons.min.js"></script>
    <script src="librerias/alertifyjs/alertify.js"></script>
    <script src="librerias/sweetAlert2/sweetalert2.all.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>
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
                <p class="uk-text-meta uk-margin-remove-top" style=" font-family: 'Yanone Kaffeesatz', sans-serif; font-size: XX-LARGE; color: white; " id="estado">UNMSM👨‍🏫</p>
              </div>
            </div>
          </div>
        </div> 

        <div class="uk-navbar-right">
          <ul class="uk-navbar-nav uk-visible@m">
                        
                  
            <li>
              <a href="admin.php" uk-toggle="" class="uk-button uk-button-text">
                <font style="vertical-align: inherit;  color: black; font-size: small ;">
                  <font style="vertical-align: inherit; color:white;"><span uk-icon="icon: users; ratio: 2"></span></font>
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
<br><br>
  	<div class="container" >
    <!-- <div class="uk-position-center uk-overlay uk-overlay-default" > -->
  		<hr>
  		<h2 class="text-center">REGISTRO DE ASISTENCIA DOCENTE <br> ACTIVIDAD LECTIVA</h2>
  		<p class="text-center">Estimado docente, para que su registro de asistencia sea válido debe llenar todos los campos que se le indican a continuación.</p>
  	
  	<form  name="miformulario">
   
  <div class="form-row">
    
  <div class="form-group col-md-6">
      <label for="inputAddress">DNI</label>
      <input type="text" class="form-control" name="dni" id="dni" maxlength="8" placeholder="72199651">
    </div>
    <div id="resultado_busqueda_profesor">

    </div>
    <div class="form-group col-md-6">
      <label for="inputState">Escuela Profesional</label>
      <select id="lista1" class="form-control ">
      <option selected>Escoger....</option>
      <?php 
        require_once "php/conexion.php";
        $conexion=conexion();
        
        $sql2="SELECT * FROM esc_pro";
        $query=mysqli_query($conexion,$sql2);
        while($ver=mysqli_fetch_row($query)){
          
      
      ?>
        <option value="<?php echo $ver[0]; ?>"><?php echo $ver[1]; ?></option>
        
        <?php }?>
      </select>
    </div>
    


  </div>


  <div class="form-group col-md-12">
      <label for="inputState">Nombre de la asignatura</label>
      <select id="select2lista" class="form-control selectpicker" data-show-subtext="true" data-live-search="true">
      <option selected>Escoger....</option>
      <?php 
        require_once "php/conexion.php";
        $conexion=conexion();
        
        $sql2="SELECT * FROM asignatura";
        $query=mysqli_query($conexion,$sql2);
        while($ver=mysqli_fetch_row($query)){
          
      
      ?>
        <option value="<?php echo $ver[0]; ?>"><?php echo $ver[2]; ?></option>
        
        <?php }?>
      </select>
    </div>
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputState">Tipo de Actividad</label>
       <select id="act_ffb" class="form-control">
        <option selected>Escojer....</option>
        <option value="Teoría">Teoría</option>
        <option value="Práctica">Práctica</option>
        <option value="Teoría-Práctica">Teoría-Práctica</option>
        <option value="Seminario">Seminario</option>
        <option value="Evaluación-Exámen">Evaluación-Exámen</option>
      </select>
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">Hora de Inicio de clase</label>
      <input type="time" id="hini_ffb" name="" class="form-control">
     
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">Hora de Termino de clase</label>
     <input type="time" id="hfin_ffb" name="" class="form-control">
    </div>


    </select>

  </div>

  
  <button type="submit" id="env_ffb" class="btn btn-primary"  onclick="run_proces_guardar(); return false;">Enviar Registro</button>

</form>
<br>
<hr>

</div>
<!-- </div> -->

  </body>
</html>
<script type="text/javascript">

/*$(document).ready(function() {
  recargarlistadescripcion();

    $('#lista1').change(function() {
        recargarlistadescripcion();
        
    });

 });*/
</script>


<script type="text/javascript">

/*function recargarlistadescripcion() {
     $.ajax({
        type:"POST",
        url:"componentes/combo_asignatura.php",
        data:"cod_esc=" + $('#lista1').val(),
        success:function (r) {
            $('#select2lista').html(r);
        }
     });
 }*/

 window.addEventListener("load", function() {
 miformulario.dni.addEventListener("keypress", soloNumeros, false);
});

//Solo permite introducir numeros.
function soloNumeros(e){
  var key = window.event ? e.which : e.keyCode;
  if (key < 48 || key > 57) {
    e.preventDefault();
  }
}
 </script>