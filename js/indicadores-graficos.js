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
                url: urlJsonIndic,
                data:{
                    indic: indic,
                    fecha: fecha
                },
                success: function(o){
                    $("#result-grafico").html(o);
                },
                error: function(xhr, ajaxOptions, thrownError){
                    alerta("Indicadores económicos", "Error al cargar los datos: " + xhr + " " + ajaxOptions + " " + thrownError);
                    $("#result-grafico").html("");
                    event.returnValue = false;
                }
            });
        }
    });
});


