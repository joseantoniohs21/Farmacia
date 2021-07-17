//$(busqueda_profesor());
function busqueda_profesor(personas){
$.ajax({
 url:'componentes/busqueda_profesor.php',
 type:'POST',
 dataType:'html',
 data:{personas:personas},
})
.done(function(resultado_busqueda) {
    $("#resultado_busqueda_profesor").html(resultado_busqueda);

});

$(document).on('keyup','#dni',function()
{
      var  valor_busqueda_profesor=$(this).val();

      if(valor_busqueda_profesor!=""){
        busqueda_profesor(valor_busqueda_profesor);
          
      }
      else{
       busqueda_profesor();   
      }
});


    
}



// valida
function run_proces_guardar() {
  var dni=$('#dni').val();
   var esc_ffb=$('#esc_ffb').val();
   var lista1=$('#lista1').val();
   var select2lista=$('#select2lista').val();
   var act_ffb=$('#act_ffb').val();
   var hini_ffb=$('#hini_ffb').val();
   var hfin_ffb=$('#hfin_ffb').val();

   if(dni == '' || esc_ffb == '' || lista1 == '' || select2lista == '' || act_ffb == '' || hini_ffb == '' || hfin_ffb == ''){
      Swal.fire({
          type: 'error',
          title: 'Tiene que rellenar todos los campos😭',
          text: 'Verifique😱.',
          showConfirmButton: true
          //timer: 1800 es ms (mili-segundos)
      });
      return false;
   }else{
      agregardatos_registro(dni,esc_ffb,lista1,select2lista,act_ffb,hini_ffb,hfin_ffb);
    
   }
}

// guarda registro profe
function agregardatos_registro(dni,esc_ffb,lista1,select2lista,act_ffb,hini_ffb,hfin_ffb) {
      
  cadena="dni=" + dni +
      "&esc_ffb=" + esc_ffb + 
      "&lista1=" + lista1 +
      "&select2lista=" + select2lista +
      "&act_ffb=" + act_ffb +
      "&hini_ffb=" + hini_ffb +
      "&hfin_ffb=" + hfin_ffb ;
  $.ajax({
      type:"POST",
      url:"./php/agregarregistro.php",
      data: cadena,
      success:function(r){
          if (r==1) {
              // $('#codigo_gen').load('./componentes/codi_generado.php');
              // $('#muestras').load('componentes/muestras.php');
              // $('#descripcion_coti').load('componentes/descripcion_coti.php');
                  $('#dni').val('');
                  $('#act_ffb').val('');
                  $('#hini_ffb').val('');
                  $('#hfin_ffb').val('');
                                 

              Swal.fire({
                                  type: 'success',
                                  title: 'SE GUARDO CORRECTAMENTE',
                                  text: 'Vamos por mas.',
                                  showConfirmButton: false,
                                  timer: 1800 // es ms (mili-segundos)
                              });
                          
          }else{
              Swal.fire({
                                  type: 'error',
                                  title: 'El DNI no exite',
                                  text: 'Vuelve a intentar.',
                                  showConfirmButton: false,
                                  timer: 1800 // es ms (mili-segundos)
                              });
                        

          }
      }
      
  });
}

function agregar_docentes(dni,nom_ffb,email_ffb,cod_ffb,dep_ffb,con_ffb,cat_ffb,clas_ffb){
      
  cadena="dni=" + dni +
  "&nom_ffb=" + nom_ffb +
  "&email_ffb=" + email_ffb + 
  "&cod_ffb=" + cod_ffb + 
  "&dep_ffb=" + dep_ffb + 
  "&con_ffb=" + con_ffb + 
  "&cat_ffb=" + cat_ffb + 
  "&clas_ffb=" + clas_ffb ;

$.ajax({
  type:"POST",
  url:"./php/agregardocente.php",
  data: cadena,
  success:function(r){
      if (r==1) {
        $('#docentes').load('./componentes/tabla_docentes.php');
              $('#dni').val('');
              $('#nom_ffb').val('');
              $('#email_ffb').val('');
              $('#cod_ffb').val('');
              $('#dep_ffb').val('');
              $('#con_ffb').val('');
              $('#cat_ffb').val('');
              $('#clas_ffb').val('');
            
                          const Toast = Swal.mixin({
                            toast: true,
                            position: 'top',
                            showConfirmButton: false,
                            timer: 3000,
                            timerProgressBar: true,
                            didOpen: (toast) => {
                                toast.addEventListener('mouseenter', Swal.stopTimer)
                                toast.addEventListener('mouseleave', Swal.resumeTimer)
                            }
                            });
            
                            Toast.fire({
                            type: 'success',
                            icon: 'success',
                            title: 'SE GUARDO CORRECTAMENTE'
                            });
                      
      }else{
          
                          const Toast = Swal.mixin({
                            toast: true,
                            position: 'top',
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
                            title: 'VUELVA   A INTENTAR'
                            });
                          
                    

      }
  }
  
});
}
