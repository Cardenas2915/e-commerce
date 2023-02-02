function modificar(arreglo){
    cadena = arreglo.split(',');

    $("#id_").val(cadena[0]);
    $("#usuario_").val(cadena[1]);
    $("#correo_").val(cadena[2]);
    $("#telefono_").val(cadena[3]);
}

$('#modificar_adm').click(function(){

    var recolec = $('#form_adm').serialize();

    $.ajax({
        url:'../php/adm_mod.php',
        type: 'POST',
        data: recolec,

        success:function(variable){
            $('#adm').load('../Nav/Admin.php #adm');
            $('#editar').modal('hide');
            $('body').removeClass('modal-open');
            $('.modal-backdrop').hide();

        }

    })

});