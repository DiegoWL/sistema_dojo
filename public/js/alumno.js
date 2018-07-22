$(function() {
    $('.sandbox-container input').datepicker({
        format: "dd/mm/yyyy",
        todayBtn: "linked",
        todayHighlight: true,
        language: "es",
        autoclose: true
    });

    $("#rut").rut({
        formatOn: 'keyup',
        validateOn: 'change' // si no se quiere validar, pasar null
    });

    $('#guardar_almn').click(function(e) {
        e.preventDefault();
        validar();
        if (1) {
            $('#form_alumnos').submit();
        }
    });




});

function validar() {
    var valid = 0;
    var rut = $('#rut').val();
    var nombre = $('#nombre').val();
    var apellido = $('#apellido').val();
    var sexo = $('#sexo').val();
    var fecha_nac = $('#fecha_nac').val();
    var direccion = $('#direccion').val();
    var telefono = $('#telefono').val();
    var fono_emerg = $('#fono_emerg').val();
    var email = $('#email').val();
    var actividad = $('#actividad').val();
    var apoderado = $('#apoderado').val();
    var clases = $('#clases').val();
    var fecha_ingreso = $('#fecha_ingreso').val();
    var observacion = $('#observacion').val();

    // var valid_rut = function() {
    //     $('#rut').rut().on('rutInvalido', function(e) {
    //         return true;
    //     });
    // };

    // if (valid_rut) {
    //     toastr.warning('Debe ingresar un rut valido');
    //     return 0;
    // }

    if (rut == '') {
        toastr.warning('Debe ingresar un rut');
        $('#rut').focus();
        return 0;
    } else if (nombre == '') {
        toastr.warning('Debe ingresar un Nombre');
        $('#nombre').focus();
        return 0;
    } else if (apellido == '') {
        toastr.warning('Debe ingresar un Apellido');
        $('#apellido').focus();
        return 0;
    } else if (sexo == '') {
        toastr.warning('Debe ingresar un Sexo');
        $('#sexo').focus();
        return 0;
    } else if (fecha_nac == '') {
        toastr.warning('Debe ingresar un Fecha de Nacimiento');
        $('#fecha_nac').focus();
        return 0;
    } else if (direccion == '') {
        toastr.warning('Debe ingresar una Dirección');
        $('#direccion').focus();
        return 0;
    } else if (telefono == '') {
        toastr.warning('Debe ingresar un Teléfono');
        return 0;
    } else if (fono_emerg == '') {
        toastr.warning('Debe ingresar un Teléfono de Emergencia');
        return 0;
    } else if (email == '') {
        toastr.warning('Debe ingresar un Email');
        return 0;
    } else if (actividad == '') {
        toastr.warning('Debe ingresar un Actividad');
        return 0;
    } else if (clases == '') {
        toastr.warning('Debe seleccionar la clase');
        return 0;
    } else if (fecha_ingreso == '') {
        toastr.warning('Debe ingresar la Fecha de Ingreso');
        return 0;
    } else if (observacion == '') {
        toastr.warning('Debe ingresar una Observacion');
        return 0;
    } else {
        valid = 1;
        return valid;
    }


}