$(function(){
   
    
    /*Funcion de Login*/
    $("#btn_login").click(function(){
        
       var form=$("#frmlogin"); 
       
        $.ajax({
         type: "post",
         dataType: "json",
         url: "procesar.php",
         data: form.serialize()+"&accion=login",
         success: function(data){
                if (data.valido) {
                    window.location="menu-principal.php";
                    //window.location.replace("menu-principal.php");
                }else{
                    //alert("usuario no encontrado, verifica tus datos");
                    var dialog = new Messi(
    'Usuario no encontrado, verifica tus datos',
    {
        title: 'Login',
        titleClass: 'anim error',
        buttons: [ {id: 0, label: 'Close', val: 'X'} ]
    }
);
                }
         }
     });
    });
    
    /*Funcion de registro*/
    $("#btn_registro").click(function(){
        
        var form=$("#frmregistro");
        
         $.ajax({
         type: "post",
         dataType: "json",
         url: "procesar.php",
         data: form.serialize()+"&accion=agregar-usuario",
         success: function(data){
                if (data.valido) {
                   var dialog = new Messi(
    'Usuario Creado',
    {
        title: 'Registro',
        titleClass: 'anim error',
        buttons: [ {id: 0, label: 'Close', val: 'X'} ]
    }
);
                }else{
                    alert("usuario no creado, verifica tus datos");
                   
                }
         }
     });
    });
    
    /*Funcion de agregar Usuario*/
     $("#btnCrearUsuario").click(function(){
        var form = $("#frmCrearUsuario");
       
           $.ajax({
            type: "post",
            dataType: "json",
            url: "procesar.php",
            data: form.serialize() + "&accion=agregar-usuario",
            success: function (data) {
                if (data.valido) {
                    alert("Usuario creado Correctamente.");
                } else {
                    alert("Problemas al crear el usuario.");
                }
            }
        });            
  });
  /*Funcion para buscar un usuario en el form*/
      $("#btnBuscarUsuario").click(function(){
        var form=$("#frmBuscar");
        $(".contenedor").empty();
         $.ajax({
            type: "post",
             dataType: "json",
         url: "procesar.php",
         data: form.serialize()+"&accion=buscar-usuario",
         success: function(data){
                if (data.valido) {
                    $(".contenedor").append(data.datos);
                }else{
                    
                }
         }
        });
    });
    
     /*Funcion para buscar un usuario en el form*/
      $("#btnbuscaruser").click(function(){
        var form=$("#frmBuscarUsuario");
        $(".contenedor").empty();
         $.ajax({
            type: "post",
             dataType: "json",
         url: "procesar.php",
         data: form.serialize()+"&accion=buscar-user",
         success: function(data){
                if (data.valido) {
                    $(".contenedor").append(data.datos);
                }else{
                    
                }
         }
        });
    });
    
    /*ELIMINAR*/
    $(document).on("click","#btnEliminarUsuario",function(){
           var form=$("#EliminarUsuario");
           $.ajax({
            type: "post",
             dataType: "json",
         url: "procesar.php",
         data: form.serialize()+"&accion=elimina-usuario",
         success: function(data){
                if (data.valido) {
                    alert("Usuario Eliminado correctamente");
                }else{
                    alert("Problemas al eliminar usuario");
                }
         }
        });
    });
/*BUSCAR EN EL FORM, ACTUALIZAR*/
$("#btnBuscar").click(function(){
        var form=$("#frmBuscar");
        $.ajax({
            type: "post",
             dataType: "json",
         url: "procesar.php",
         data: form.serialize()+"&accion=busqueda-usuario",
         success: function(data){
                if (data.valido) {
                  $("#cedula").val(data.datos.CEDULA);
                  $("#cedula_busca").val(data.datos.CEDULA);
                  $("#nombre").val(data.datos.NOMBRE);
                  $("#apellidos").val(data.datos.APELLIDOS);
                  $("#telefono").val(data.datos.TELEFONO);
                  $("#email").val(data.datos.EMAIL);
                  $("#usuario").val(data.datos.USUARIO);
                  $("#rol").val(data.datos.ROL);
                }else{
                 
                }
         }
        });
    });
    /*ACTUALIZAR EL USUARIO*/
    $("#btnActualizar").click(function(){
        var form=$("#frmActualizar");
        $.ajax({
            type: "post",
             dataType: "json",
         url: "procesar.php",
         data: form.serialize()+"&accion=actualizar-usuario",
         success: function(data){
                if (data.valido) {
                 alert("Usuario Actualizado correctamente");
                }else{
                 alert("Problemas al actualizar usuario");
                }
         }
        });
    });
  
});


