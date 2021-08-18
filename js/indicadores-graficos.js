$(document).ready(function(){
//    $('#sandbox-container .input-group.date').datepicker({
//        language: "es"
//    });
    
    $("#btn-limpiar").click(function(){
        $("#sel-indicador").val("");
        $("#fch-fecha").val("");
    });
    
    $("#btn-aceptar").click(function(){
        var indic = $("#sel-indicador").val();
        var fecha = $("#fch-fecha").val();
        if(indic === ""){
            alerta("Indicadores económicos", "Debes seleccionar un indicador.");
            event.returnValue = false;
        }else if(fecha === ""){
            alerta("Indicadores económicos", "Debes colocar una fecha.");
            event.returnValue = false;
        }else{
            $.ajax({
                type: "GET",
                dataType: "json",
                contentType: "application/json",
                url: urlJsonIndic,
                data:{
                    indic: indic,
                    fecha: fecha
                },
                success: function(o){
                    console.log(o);
                },
                error: function(xhr, ajaxOptions, thrownError){
                    console.log("Error: " + xhr + " " + ajaxOptions + " " + thrownError);
                }
            });
        }
    });
});


