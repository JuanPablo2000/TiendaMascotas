$(function(){
    
    /*Agregar Producto*/
      $("#btnAgegarProduct").click(function(){
        var form = $("#frmAgregarproduct");
       
           $.ajax({
            type: "post",
            dataType: "json",
            url: "procesar.php",
            data: form.serialize() + "&accion=agregar-producto",
            success: function (data) {
                if (data.valido) {
                    alert("Usuario creado Correctamente.");
                } else {
                    alert("Problemas al crear el usuario.");
                }
            }
        });            
  });
    /*Buscar el producto a eliminar*/
     $("#btnBuscarProducto").click(function(){
        var form=$("#frmBuscar");
        $(".contenedor").empty();
         $.ajax({
            type: "post",
             dataType: "json",
         url: "procesar.php",
         data: form.serialize()+"&accion=buscar-producto",
         success: function(data){
                if (data.valido) {
                    $(".contenedor").append(data.datos);
                }else{
                    
                }
         }
        });
});

/*ELIMINAR PRODUCTO*/
$(document).on("click","#btnEliminarProducto",function(){
           var form=$("#EliminarProducto");
           $.ajax({
            type: "post",
             dataType: "json",
         url: "procesar.php",
         data: form.serialize()+"&accion=eliminar-producto",
         success: function(data){
                if (data.valido) {
                    alert("Usuario Eliminado correctamente");
                }else{
                    alert("Problemas al eliminar usuario");
                }
         }
        });
    });
    
     /*Cargar el form-----------------*/
      $("#btncargaP").click(function(){
        var form=$("#frmBuscarProducto");
        $(".contenedor").empty();
         $.ajax({
            type: "post",
             dataType: "json",
         url: "procesar.php",
         data: form.serialize()+"&accion=buscar-articulo",
         success: function(data){
                if (data.valido) {
                    $(".contenedor").append(data.datos);
                }else{
                    
                }
         }
        });
});
    
//    /*Buscar en el form de actualizar*/
//    $("#btnBuscarP").click(function(){
//        var form=$("#frmBuscarP");
//        $.ajax({
//            type: "post",
//             dataType: "json",
//         url: "procesar.php",
//         data: form.serialize()+"&accion=busqueda-producto",
//         success: function(data){
//                if (data.valido) {
//                  $("#codigo").val(data.datos.CODIGO);
//                  $("#descripcion").val(data.datos.DESCRIPCION);
//                  $("#marca").val(data.datos.MARCA);
//                  $("#precio").val(data.datos.PRECIO);
//                  $("#cantidad").val(data.datos.CANTIDAD);
//                }else{
//                 
//                }
//         }
//        });
//    });
    
//     /*ACTUALIZAR EL producto*/
//    $("#btnActualizarP").click(function(){
//        var form=$("#frmActualizarP");
//        $.ajax({
//            type: "post",
//             dataType: "json",
//         url: "procesar.php",
//         data: form.serialize()+"&accion=actualizar-producto",
//         success: function(data){
//                if (data.valido) {
//                 alert("Producto Actualizado correctamente");
//                }else{
//                 alert("Producto al actualizar usuario");
//                }
//         }
//        });
//    });
});


