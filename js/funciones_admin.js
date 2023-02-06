//Este ajax es para modificar o editar los usuarios desde el perfil administrativo
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
            alertify.success("Datos actualizados");
            $('#adm').load('../Nav/Admin.php #adm');
            $('#editar').modal('hide');
            $('body').removeClass('modal-open');
            $('.modal-backdrop').hide();

        }

    })

});

//Este ajax es para agregar usuarios desde el perfil administrativo
$('#agg_adm').click(function(){

    var recolec = $('#form_agg').serialize();
    

    $.ajax({
        url:'../php/adm_agregar.php',
        type: 'POST',
        data: recolec,

        success:function(variable){
            alertify.success("Usuario agregado");
            $('#adm').load('../Nav/Admin.php #adm');
            $('#agregar').modal('hide');
            $('body').removeClass('modal-open');
            $('.modal-backdrop').hide();

            $('#adm_usuario').val("");
            $('#adm_correo').val("");
            $('#adm_telefono').val("");
            $('#adm_pass').val("");

        }

    })

});

//Este ajax es para eliminar usuarios desde el perfil administrativo

function eliminar(arreglo){
    cadena = arreglo.split(',');

    $("#id_eli").val(cadena[0]);
    $("#u_eli").val(cadena[1]);
    document.getElementById('id_eli_label').textContent = 'ID: '+ cadena[0];
    document.getElementById('u_eli_label').textContent = 'Usuario: '+ cadena[1];
}

$('#eli_').click(function(){

    var recolec = $('#enviar_eli').serialize();
    

    $.ajax({
        url:'../php/adm_eliminar.php',
        type: 'POST',
        data: recolec,

        success:function(variable){
            alertify.error("Usuario eliminado");
            $('#adm').load('../Nav/Admin.php #adm');
            $('#eliminar').modal('hide');
            $('body').removeClass('modal-open');
            $('.modal-backdrop').hide();

        }

    })

});

