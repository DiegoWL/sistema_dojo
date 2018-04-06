@extends('index')
@section('content')
  <h1 class="section-header">
    <div>Registrar Alumnos</div>
  </h1>
  <div class="container mt-5">
    <div class="row">
      <div class="col-12">
        <div class="card card-primary">
          <div class="card-body">
            <form id="form_alumnos" method="POST" action="{{ route('alumno.store')}}" >
              {{ csrf_field() }}
              <div class="form-group {{ $errors->has('rut') ? 'has-error' : ''}}"  >
                 <label for="exampleFormControlInput1">Rut:</label>
                 <input type="text" name="rut" id="rut" class="form-control">
                   {!! $errors->first('rut' ,'<span class="text-danger">:message</span>' ) !!}
                </div>
              <div class="form-group {{ $errors->has('nombre') ? 'is-invalid' : ''}}" >
                 <label for="nombre">Nombres:</label>
                 <input type="text" name="nombre" id="nombre" class="form-control">
                 {!! $errors->first('nombre' ,'<span class="text-danger">:message</span>' ) !!}
              </div>
              <div class="form-group {{ $errors->has('apellido') ? 'has-error' : ''}}" >
                <label for="exampleFormControlInput3">Apellidos:</label>
                <input type="text" name="apellido" id="apellido" class="form-control">
                   {!! $errors->first('apellido' ,'<span class="text-danger">:message</span>' ) !!}
              </div>
              <div class="form-group {{ $errors->has('sexo') ? 'has-error' : ''}}" >
                <label for="exampleFormControlInput3">Sexo</label>
                <select class="custom-select" name="sexo">
                  <option selected></option>
                  <option value="F">Femenino</option>
                  <option value="M">Masculino</option>
                </select>
                   {!! $errors->first('sexo' ,'<span class="text-danger">:message</span>' ) !!}
              </div>
              <div class="form-group date sandbox-container" id="sandbox-container">
                <label for="exampleFormControlInput1">Fecha de Nacimiento</label>
                <input type="text" name="fecha_nac" id="fecha_nac" class="form-control">
                   {!! $errors->first('fecha_nac' ,'<span class="text-danger">:message</span>' ) !!}
              </div>
              <div class="form-group {{ $errors->has('direccion') ? 'has-error' : ''}}" >
                <label for="exampleFormControlInput1">Direccion</label>
                <input type="text" name="direccion" id="direccion" class="form-control">
                   {!! $errors->first('direccion' ,'<span class="text-danger">:message</span>' ) !!}
              </div>
              <div class="form-group {{ $errors->has('telefono') ? 'has-error' : ''}}" >
                <label for="exampleFormControlInput1">Teléfono</label>
                <input type="text" name="telefono" id="telefono" class="form-control">
                   {!! $errors->first('telefono' ,'<span class="text-danger">:message</span>' ) !!}
              </div>
              <div class="form-group {{ $errors->has('fono_emerg') ? 'has-error' : ''}}" >
                <label for="exampleFormControlInput1">Teléfono de Emergencia</label>
                <input type="text" name="fono_emerg" id="fono_emerg" class="form-control">
                   {!! $errors->first('fono_emerg' ,'<span class="text-danger">:message</span>' ) !!}
              </div>
              <div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}" >
                <label for="exampleFormControlSelect1">E-mail</label>
                <input type="email" name="email" id="email" class="form-control">
                   {!! $errors->first('email' ,'<span class="text-danger">:message</span>' ) !!}
              </div>
              <div class="form-group {{ $errors->has('actividad') ? 'has-error' : ''}}" >
                <label for="exampleFormControlSelect1">Actividad (Estudiante/Trabajador, Colegio/Universidad )</label>
                <input type="text" name="actividad" id="actividad" class="form-control">
                   {!! $errors->first('actividad' ,'<span class="text-danger">:message</span>' ) !!}
              </div>
              <div class="form-group {{ $errors->has('apoderado') ? 'has-error' : ''}}" >
                <label for="exampleFormControlSelect1">Apoderado / Contacto de Emergencia</label>
                <input type="text" name="apoderado" id="apoderado" class="form-control">
                   {!! $errors->first('apoderado' ,'<span class="text-danger">:message</span>' ) !!}
              </div>
              <div class="form-group date sandbox-container">
                <label for="exampleFormControlSelect1">Fecha de Ingreso</label>
                <input type="text" name="fecha_ingreso" id="fecha_ingreso" class="form-control">
                   {!! $errors->first('fecha_ingreso' ,'<span class="text-danger">:message</span>' ) !!}
              </div>
              <div class="form-group {{ $errors->has('observacion') ? 'has-error' : ''}}" >
                <label for="exampleFormControlTextarea1">Observación  <small>(Indicar si es que tiene alguna enfermerdad, lesión o situacion especial)</small> </label>
                <textarea class="form-control" name="observacion" id="observacion" rows="3"></textarea>
              </div>
              <button type="submit" class="btn btn-primary" name="button" id="guardar_almn">Guardar</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  @push('styles')
    <link rel="stylesheet" href="/components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  @endpush
  @push('scripts')
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
  @endpush

@stop
