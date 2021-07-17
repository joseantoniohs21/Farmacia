<html lang="en">
  <head>
  <title>Cenprofarma</title>
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/login.css">
  <link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/alertify.css">
  <link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/themes/default.css">
  <link rel="stylesheet" type="text/css" href="librerias/sweetAlert2/sweetalert2.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <script src="librerias/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="js/recupera.js"></script>
  <script src="librerias/bootstrap/js/bootstrap.js"></script>
  <script src="librerias/alertifyjs/alertify.js"></script>
  <script src="librerias/sweetAlert2/sweetalert2.all.min.js"></script>
  <style type="text/css">

  </style>
  </head>
  <body style="background-image: url(librerias/logo/fondo2.png);background-position: center center;background-repeat: no-repeat;background-attachment: fixed;background-size: cover;background-color: #66999; " >



    <form class="form-signin needs-validation" action="index.php" method="POST" novalidate>
  <div class="text-center mb-6">
    <img class="mb-4" src="librerias/logo/escudos.png" alt="" width="200px" >
    <h1 class="h3 mb-3 font-weight-normal" style="font-family: 'Unna', serif;">🚀Informatica💻</h1>  
  </div>

  <div class="form-label-group">
    <input type="" name="email" class="form-control" id="validationCustom01" placeholder="Usuario" required style=" border-radius: 15px;opacity:0.9;" >
      <div class="invalid-feedback">
        <h5> El @gmail.com es obligatorio</h5>
      </div>
  </div>

<br>


  <div class="form-label-group">
     <div class="input-group">
      <input ID="txtPassword" type="Password" Class="form-control" name="clave" placeholder="Contraseña" required style=" border-radius: 15px;opacity:0.9;">
      <div class="input-group-append">
            <button id="show_password" class="btn btn-lg btn btn-outline-info btn-block" type="button" onclick="mostrarPassword()" style=" border-radius: 9px;"> <span class="fa fa-eye-slash icon"></span> </button>
          </div>
          <div class="invalid-feedback">
        <h5>Obligatorio</h5>
      </div>
      
    </div>

  </div>
 
 <a class="text text-info" data-toggle="modal" data-target="#exampleModal" >¿Olvidaste tu contraseña?</a>

  <a href="ingreso_datos.php" class="btn btn-lg btn btn-outline-info btn-block" style="border-radius: 15px; " >Iniciar Sesion</a>
<br>
  <p class="text-center" style="color: black;">&copy; 2021-2022</p>

    


</form>
<script>
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
<!-- Modal recuperar contraseña-->

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Recuperar Contraseña</h5>
        <button type="button" class="close" data-dismiss="modal" id="cerrar_modal_recupera" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
         Comunicarse con el area de desarrollo de la facultad <strong>soporteupg.farmcia@unmsm.edu.pe</strong> 
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
         <!-- <div class="form-group">
            <input type="email" class="form-control" id="correo" placeholder="Digitar correo electronico">
          </div> -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-info" id="recuperar_contra">Enviar</button>
      </div>
    </div>
  </div>

</div>
<!-- fin de modal recuperar --> 

</body>
</html>
<script type="text/javascript">
function mostrarPassword(){
    var cambio = document.getElementById("txtPassword");
    if(cambio.type == "password"){
      cambio.type = "text";
      $('.icon').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
    }else{
      cambio.type = "password";
      $('.icon').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
    }
  } 
</script>

