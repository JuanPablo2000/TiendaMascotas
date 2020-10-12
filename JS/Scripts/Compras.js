/**/
$(function(){
   
    /*Funcion para insertar en la tb factura*/
     $("#btnCompra").click(function(){
        var form = $("#frmCompra");
       
           $.ajax({
            type: "post",
            dataType: "json",
            url: "procesar.php",
            data: form.serialize() + "&accion=agregar-compra",
            success: function (data) {
                if (data.valido) {
                    alert("Agregado al carrito Correctamente.");
                } else {
                    alert("Problemas al agregar al carrito.");
                }
            }
        });   
 
});

});

