$(function(){

  $('#nomb_usu').click(insertar);
  $("#limpia").click(limpiar);

});


function limpiar(){

 $("#nome").val('');

 $("#ape").val('');

 $("#iden").val('');

 $("#email").val('');

 $("#movil").val('');

 $("#perfil").val('');

 $("#user").val('');

 $("#password").val('');

}


function insertar(){

	var nombre = $("#nome").val();

	var apellido = $("#ape").val();

	var identificacion = $("#iden").val();

	var correo = $("#email").val();

	var movil = $("#movil").val();

	var perfil = $("#perfil").val();

	var user = $("#user").val();

	var password= $("#password").val();


    // alert(nombre);

		
	   $.ajax({

		     url: "../Controlador/insertar.php", 
		     method:"POST",
		     data: {
		     	   nombre: nombre, 
		     	   apellido:apellido, 
		     	   identificacion:identificacion, 
		     	   correo:correo,
		     	   movil:movil,
		     	   perfil:perfil,
		     	   user:user,
		     	   password:password
		     	},

		     cache:"false",

		     beforeSend:function(){
		      //document.getElementById("spinner").style.display = "block";
		      setTimeout( $("#nomb_usu").text("Realizando la Operacion ..."), 7000);
		      setTimeout( $("#nomb_usu").text("Espere un momento por favor casi terminamos ..."), 5000);
		     },

		     success:function(data){
              alert(data);
		      if(data == "1"){
			      $("#result").html(
			         '<div class="alert alert-success cerrar" role="alert" id="close">'+
			           '<strong>!Exitoso!</strong><br>El registro se ha guardado de manera satifactoriamente.<button type="button" class="close" data-dismiss="alert" aria-label="Close" onclick="visible();">'+
			            '<span aria-hidden="true">&times;</span>'+
			            "</button></div>");
			       $("#nomb_usu").text("Guardar Usuario");              

			      } else {

			        $("#nomb_usu").text("Guardar Usuario");
			        $("#result").html(
			          '<div class="alert alert-danger cerrar" role="alert" id="close">'+
			           '<strong>!Error!</strong><br>Hay Errores al ingresar la informacion<button type="button" class="close" data-dismiss="alert" aria-label="Close" onclick="visible();">'+
			            '<span aria-hidden="true">&times;</span>'+
			            "</button></div>");
			      } 

		     
		     }	


		}); 


}


function visible(){

    if ($('#close').has('.cerrar')){
      $('#close').hide();
    }
  
  }