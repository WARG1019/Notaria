 
  function validar(){

    var usuario = $('#user').val();
    var pass = $('#password').val();

    //alert(usuario);
    //alert(pass);
    
    if($.trim(usuario).length > 0 && $.trim(pass).length > 0){
   
     $.ajax({
     url: "validar.php", 
     method:"POST",
     data: {usuario: usuario, pass:pass},
     cache:"false",
     beforeSend:function(){
      //document.getElementById("spinner").style.display = "block";
      $('#login').text('Conectando...');
     },
     success:function(data){
      if(data == "1"){
        window.setTimeout(function(){ alert("Espere un momento por favor ...");}, 5000);
        $(location).attr("href","cargar.php");
      }else{
        $("#login").text("login");
        $("#resultado").html(
          '<div class="alert alert-danger cerrar" role="alert" id="close">'+
           '<strong>!Error!</strong><br>Las credenciales son incorrecta.<button type="button" class="close" data-dismiss="alert" aria-label="Close" onclick="visible();">'+
            '<span aria-hidden="true">&times;</span>'+
            "</button></div>");
      }
     }

     });

    }

  }


  function visible(){

    if ($('#close').has('.cerrar')){
      $('#close').hide();
    }
  
  }


   
