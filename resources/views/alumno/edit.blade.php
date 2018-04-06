
<div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">Editar Alumno</h5>
    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">×</span>
    </button>
</div>
<div class="modal-body">
  <form id="form_alumnos" action="" method="PUT" >
    {{ csrf_field() }}
    <div class="form-group {{ $errors->has('rut') ? 'has-error' : ''}}"  >
       <label for="exampleFormControlInput1">Rut:</label>
       <input type="text" name="rut" id="rut" class="form-control" value="{{ $alumno->rut}}">
         {!! $errors->first('rut' ,'<span class="text-danger">:message</span>' ) !!}
      </div>
    <div class="form-group {{ $errors->has('nombre') ? 'is-invalid' : ''}}" >
       <label for="nombre">Nombres:</label>
       <input type="text" name="nombre" id="nombre" class="form-control" value="{{ $alumno->nombre}}">
       {!! $errors->first('nombre' ,'<span class="text-danger">:message</span>' ) !!}
    </div>
    <div class="form-group {{ $errors->has('apellido') ? 'has-error' : ''}}" >
      <label for="exampleFormControlInput3">Apellidos:</label>
      <input type="text" name="apellido" id="apellido" class="form-control" value="{{ $alumno->apellido}}">
         {!! $errors->first('apellido' ,'<span class="text-danger">:message</span>' ) !!}
    </div>
    <div class="form-group {{ $errors->has('sexo') ? 'has-error' : ''}}" >
      <select class="custom-select" name="sexo">
        <label for="sexo">Sexo</label>
        <option value="F">Femenino</option>
        <option value="M">Masculino</option>
      </select>
    </div>

    <div class="form-group date sandbox-container" id="sandbox-container">
      <label for="exampleFormControlInput1">Fecha de Nacimiento</label>
      <input type="text" name="fecha_nac" id="fecha_nac" class="form-control" value="{{\Carbon\Carbon::parse($alumno->fecha_nac)->format('d/m/Y') }}">
         {!! $errors->first('fecha_nac' ,'<span class="text-danger">:message</span>' ) !!}
    </div>
    <div class="form-group {{ $errors->has('direccion') ? 'has-error' : ''}}" >
      <label for="exampleFormControlInput1">Direccion</label>
      <input type="text" name="direccion" id="direccion" class="form-control" value="{{ $alumno->direccion}}">
         {!! $errors->first('direccion' ,'<span class="text-danger">:message</span>' ) !!}
    </div>
    <div class="form-group {{ $errors->has('telefono') ? 'has-error' : ''}}" >
      <label for="exampleFormControlInput1">Teléfono</label>
      <input type="text" name="telefono" id="telefono" class="form-control" value="{{ $alumno->telefono}}">
         {!! $errors->first('telefono' ,'<span class="text-danger">:message</span>' ) !!}
    </div>
    <div class="form-group {{ $errors->has('fono_emerg') ? 'has-error' : ''}}" >
      <label for="exampleFormControlInput1">Teléfono de Emergencia</label>
      <input type="text" name="fono_emerg" id="fono_emerg" class="form-control" value="{{ $alumno->fono_emerg}}">
         {!! $errors->first('fono_emerg' ,'<span class="text-danger">:message</span>' ) !!}
    </div>
    <div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}" >
      <label for="exampleFormControlSelect1">E-mail</label>
      <input type="email" name="email" id="email" class="form-control" value="{{ $alumno->email}}">
         {!! $errors->first('email' ,'<span class="text-danger">:message</span>' ) !!}
    </div>
    <div class="form-group {{ $errors->has('actividad') ? 'has-error' : ''}}" >
      <label for="exampleFormControlSelect1">Actividad (Estudiante/Trabajador, Colegio/Universidad )</label>
      <input type="text" name="actividad" id="actividad" class="form-control" value="{{ $alumno->actividad}}">
         {!! $errors->first('actividad' ,'<span class="text-danger">:message</span>' ) !!}
    </div>
    <div class="form-group {{ $errors->has('apoderado') ? 'has-error' : ''}}" >
      <label for="exampleFormControlSelect1">Apoderado / Contacto de Emergencia</label>
      <input type="text" name="apoderado" id="apoderado" class="form-control" value="{{ $alumno->apoderado}}">
         {!! $errors->first('apoderado' ,'<span class="text-danger">:message</span>' ) !!}
    </div>
    <div class="form-group date sandbox-container">
      <label for="exampleFormControlSelect1">Fecha de Ingreso</label>
      <input type="text" name="fecha_ingreso" id="fecha_ingreso" class="form-control" value="{{\Carbon\Carbon::parse($alumno->fecha_ingreso)->format('d/m/Y') }}">
         {!! $errors->first('fecha_ingreso' ,'<span class="text-danger">:message</span>' ) !!}
    </div>
    <div class="form-group {{ $errors->has('observacion') ? 'has-error' : ''}}">
      <label for="exampleFormControlTextarea1">Observación  <small>(Indicar si es que tiene alguna enfermerdad, lesión o situacion especial)</small> </label>
      <textarea class="form-control" name="observacion" id="observacion" rows="3" > {{ $alumno->observacion}}</textarea>
    </div>

  </form>
  <div class="modal-footer">
      <button class="btn btn-success" id="btn-actualizar" data-id="{{ $alumno->id }}" type="button" >Actualizar</button>
      <button class="btn btn-info" type="button" data-dismiss="modal">Cerrar</button>
  </div>
  <script src="/components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
  <script src="/components/bootstrap-datepicker/js/locales/bootstrap-datepicker.es.js"></script>
  <script src="/components/jquery.rut/jquery.rut.js"></script>
  <script type="text/javascript">
        $(document).ready(function() {
          $('.sandbox-container input').datepicker({
            format: "dd/mm/yyyy",
            todayBtn: true,
            language: "es"
          });
          $("input#rut").rut({
             formatOn: 'keyup',
             validateOn: 'change' // si no se quiere validar, pasar null
         });
        });


  </script>
