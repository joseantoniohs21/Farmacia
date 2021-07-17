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
              <a href="reporte.php" uk-toggle="" class="uk-button uk-button-text">
                <font style="vertical-align: inherit;  color: black; font-size: small ;">
                  <font style="vertical-align: inherit; color:white;">Reporte</font>
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
<br><br>
 <div class="uk-container uk-container-expand">
 <h1 class="text-center">Registra nuevos docentes</h1>
 <form name="miformulario">
  <div class="form-row">
    <div class="form-group col-md-1">
      <label for="inputEmail4">DNI</label>
      <input type="email" class="form-control" id="dni" name="dni" maxlength="8" ></div>
      <div class="form-group col-md-5">
    <label for="inputPassword4">NOMBRES Y APELLIDOS</label>
    <input type="text" class="form-control" id="nom_ffb" >
  </div>
  <div class="form-group col-md-6">
    <label for="inputAddress">EMAIL</label>
    <input type="text" class="form-control" id="email_ffb">
    </div>
    <div class="form-group col-md-2">
      <label for="inputPassword4">CODIGO DOCENTE</label>
      <input type="text" class="form-control" id="cod_ffb" name="cod_ffb" maxlength="6"></div>
      <div class="form-group col-md-4">
      <label for="inputState">Departamento Academico</label>
       <select id="dep_ffb" class="form-control">
        <option selected>Escojer....</option>
        <option value="FARMACOLOGÍA, BROMATOLOGÍA Y TOXICOLOGÍA">FARMACOLOGÍA, BROMATOLOGÍA Y TOXICOLOGÍA</option>
        <option value="FARMACOTECNIA Y ADMINISTRACIÓN FARMACÉUTICA">FARMACOTECNIA Y ADMINISTRACIÓN FARMACÉUTICA</option>
        <option value="BIOQUÍMICA">BIOQUÍMICA</option>
        <option value="QUÍMICA BÁSICA Y APLICADA">QUÍMICA BÁSICA Y APLICADA</option>
        <option value="MICROBIOLOGÍA Y PARASITOLOGÍA BÁSICA Y APLICADA">MICROBIOLOGÍA Y PARASITOLOGÍA BÁSICA Y APLICADA</option>
      </select>
    </div>
    <div class="form-group col-md-2">
    <label for="inputAddress">CONDICION</label>
       <select id="con_ffb" class="form-control">
        <option selected>Escojer....</option>
        <option value="NOMBRADO">NOMBRADO</option>
        <option value="CONTRATADO">CONTRATADO</option>
      </select>
    </div>
    <div class="form-group col-md-2">
    <label for="inputAddress">CATEGORIA</label>
    <select id="cat_ffb" class="form-control">
        <option selected>Escojer....</option>
        <option value="AUXILIAR">AUXILIAR</option>
        <option value="ASOCIADO">ASOCIADO</option>
        <option value="PRINCIPAL">PRINCIPAL</option>  
      </select>
       </div>
    <div class="form-group col-md-2">
    <label for="inputAddress">CLASE</label>
    <select id="clas_ffb" class="form-control">
        <option selected>Escojer....</option>
        <option value="TIEMPO COMPLETO">TIEMPO COMPLETO</option>
        <option value="DEDICACION EXCLUSIVA">DEDICACION EXCLUSIVA</option>
        <option value="TIEMPO PARCIAL">TIEMPO PARCIAL</option>  
      </select>
          </div>
  </div>
  
  <button type="submit" class="btn btn-info" id="guardar_docente">Guardar</button>
</form>

<br>
<div id ="docentes"></div>

  </body>
</html>
<script type="text/javascript">
$(document).ready(function(){
    $('#docentes').load('componentes/tabla_docentes.php');
    $('#guardar_docente').click(function(){
        var dni=$('#dni').val();
        var nom_ffb=$('#nom_ffb').val();
        var email_ffb=$('#email_ffb').val();
        var cod_ffb=$('#cod_ffb').val();
        var dep_ffb=$('#dep_ffb').val();
        var con_ffb=$('#con_ffb').val();
        var cat_ffb=$('#cat_ffb').val();
        var clas_ffb=$('#clas_ffb').val();

        if(dni == '' || nom_ffb ==''|| email_ffb =='' ){
            const Toast = Swal.mixin({
                            toast: true,
                            position: 'center',
                            showConfirmButton: false,
                            timer: 3000,
                            timerProgressBar: true,
                            didOpen: (toast) => {
                                toast.addEventListener('mouseenter', Swal.stopTimer)
                                toast.addEventListener('mouseleave', Swal.resumeTimer)
                            }
                            });
            
                            Toast.fire({
                            type: 'error',
                            icon: 'error',
                            title: 'debe rellenar todos los datos'
                            });
                return false;
        }else {
            agregar_docentes(dni,nom_ffb,email_ffb,cod_ffb,dep_ffb,con_ffb,cat_ffb,clas_ffb);
            return false;
        }
    });
});


window.addEventListener("load", function() {
  miformulario.dni.addEventListener("keypress", soloNumeros, false);
  miformulario.cod_ffb.addEventListener("keypress", soloNumeros, false);
});

//Solo permite introducir numeros.
function soloNumeros(e){
  var key = window.event ? e.which : e.keyCode;
  if (key < 48 || key > 57) {
    e.preventDefault();
  }
}
 </script>