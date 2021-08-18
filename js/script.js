function alerta(title, msg){
    bootbox.alert({
        title: title,
        message: msg,
        buttons:{
            ok:{
                label: "Aceptar",
                className: 'btn-primary'
            }
        }
    });
}
