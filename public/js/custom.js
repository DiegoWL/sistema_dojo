$(document).ready(function() {
  $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
  });

/** CRUD ALUMNOS **/
  $('body').on('click', '.borrar_alumno', function(event) {
      var id = $(this).data('id');
      //console.log(id);
      $.ajax({
        url: '/admin/alumno/'+id,
        type: 'DELETE'
      })
      .done(function(data) {
        console.log(data);
        $("#tabla_alumnos").load("#tabla_alumnos");
      })
      .fail(function() {
        console.log("error");
      })
      .always(function() {
        console.log("complete");
      });
  });
  $('body').on('click', '.edit_alumno', function(event) {
    var id = $(this).data('id');
    $.ajax({
      url: 'alumno/'+id+'/edit',
      type: 'GET',
    })
    .done(function(data) {
      console.log(data);
      $('#modal-content').empty();
      $('#modal-content').append(data.view);
      $('#modal').modal();
    })
    .fail(function() {
      console.log("error");
    })
    .always(function() {
      console.log("complete");
    });
  });
  $('#modal').on('shown.bs.modal', function (e) {
    $('head').append('<link rel="stylesheet" href="/components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">');
    $('#btn-actualizar').click(function(event) {
        let id =  $(this).data('id');
        formu = $('#form_alumnos').serializeArray();
        $.ajax({
          url: 'alumno/'+id,
          type: 'PUT',
          data: formu
        })
        .done(function(data) {
          alert(data.msg);
            $("#tabla_alumnos").load(" #tabla_alumnos");
            $('#modal').modal('hide');
        })
        .fail(function(data) {
          console.log(data);
        })
        .always(function() {
          console.log("complete");
        });
      });
  });
/** FIN CRUD ALUMNOS **/

/** INICIO CRUD COMPETIDOR **/

$('#select_alumno').change(function(event) {
  /* Act on the event */
  var sexo =  $("#select_alumno option:selected").attr('data-id');
  var id = $(this).val();
  console.log(id);
  if( sexo == 'F'){
    $('#select_kata').empty();
    $('#select_kumite').empty();
    $('#select_kata').append('<option value="Cadete Femenino">Cadete Femenino</option>'+
                        '<option value="Junior Femenino">Junior Femenino</option>'+
                        '<option value="Under 21 Femenino">Under 21 Femenino</option>'+
                        '<option value="Senior Femenino">Senior Femenino</option>'+
                        '<option value="No Aplica/Compite">No Aplica/Compite</option>');
    $('#select_kumite').empty().append('<option value="Cadete -47 kg">Cadete -47kg</option>'+
                    '<option value="Cadete -54 kg">Cadete -54 kg</option>'+
                    '<option value="Cadete +54 kg">Cadete +54 kg</option>'+
                    '<option value="Junior -48 Kg">Junior -48 Kg</option>'+
                    '<option value="Junior -53 kg">Junior -53 kg</option>'+
                    '<option value="Junior -59 kg">Junior -59 kg</option>'+
                    '<option value="Junior +59 kg">Junior +59 kg</option>'+
                    '<option value="Under 21 -50 kg">Under 21 -50 kg</option>'+
                    '<option value="Under 21 -55 kg">Under 21 -55 kg</option>'+
                    '<option value="Under 21 -61 kg">Under 21 -61 kg</option>'+
                    '<option value="Under 21 -68 kg">Under 21 -68 kg</option>'+
                    '<option value="Under 21 +68 kg">Under 21 +68 kg</option>'+
                    '<option value="Senior -50 kg">Senior -50 kg</option>'+
                    '<option value="Senior -55 kg">Senior -55 kg</option>'+
                    '<option value="Senior -61 kg">Senior -61 kg</option>'+
                    '<option value="Senior -68 kg">Senior -68 kg</option>'+
                    '<option value="Senior +68 kg">Senior +68 kg</option>'+
                    '<option value="No Compite">No Compite</option>');
  }else if (sexo == 'M') {
      $('#select_kata').empty();
      $('#select_kumite').empty();
      $('#select_kata').append('<option value="Cadete Masculino">Cadete Masculino</option>'+
                          '<option value="Junior Masculino">Junior Masculino</option>'+
                          '<option value="Under 21 Masculino">Under 21 Masculino</option>'+
                          '<option value="Senior Masculino">Senior Masculino</option>'+
                          '<option value="No Aplica/Compite">No Compite</option>');
      $('#select_kumite').empty().append('<option value="Cadete -52 kg">Cadete -52 kg</option>'+
                                          '<option value="Cadete -57 kg">Cadete -57 kg</option>'+
                                          '<option value="Cadete +63 kg">Cadete -63 kg</option>'+
                                          '<option value="Cadete -70 kg">Cadete -70 kg</option>'+
                                          '<option value="Cadete +70 kg">Cadete +70 kg</option>'+
                                          '<option value="Junior -55 Kg">Junior -55 Kg</option>'+
                                          '<option value="Junior -61 kg">Junior -61 kg</option>'+
                                          '<option value="Junior -68 kg">Junior -68 kg</option>'+
                                          '<option value="Junior -76 kg">Junior -76 kg</option>'+
                                          '<option value="Junior +76 kg">Junior +76 kg</option>'+
                                          '<option value="Under 21 -60 kg">Under 21 -60 kg</option>'+
                                          '<option value="Under 21 -67 kg">Under 21 -67 kg</option>'+
                                          '<option value="Under 21 -75 kg">Under 21 -75 kg</option>'+
                                          '<option value="Under 21 -84 kg">Under 21 -84 kg</option>'+
                                          '<option value="Under 21 +84 kg">Under 21 +84 kg</option>'+
                                          '<option value="Senior -60 kg">Senior -60 kg</option>'+
                                          '<option value="Senior -67 kg">Senior -67 kg</option>'+
                                          '<option value="Senior -75 kg">Senior -75 kg</option>'+
                                          '<option value="Senior -84 kg">Senior -84 kg</option>'+
                                          '<option value="Senior +84 kg">Senior +84 kg</option>'+
                                          '<option value="No Compite">No Compite</option>');
  }
});

$('#btn_competidor').click(function(event) {
event.preventDefault();
  console.log('hola');
  var id =  $("#select_alumno option:selected").attr('data-id');
  var sexo = $(this).val();
  var form_competidor = $('#form_competidor').serializeArray()
  console.log(form_competidor);

$.ajax({
  url: '/admin/competidor',
  type: 'POST',
  data: form_competidor
})
.done(function(data) {
  alert(data.msg)
})
.fail(function() {
  console.log("error");
})
.always(function() {
  console.log("complete");
});


});



/** FIN CRUD COMPETIDOR **/


});
