@extends('index')
@section('content')

  <h1 class="section-header">
    <div>Ver Pagos</div>
  </h1>
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-12">
        <div class="card card-primary">
          <div class="card-body">
            <form  method="POST" action="{{ route('pagos.store')}}">
                {{ csrf_field() }}
              <fieldset class="form-group">
                <label for="exampleInputEmail1">Alumno</label>
                <select class="custom-select" name="alumno">
                  <option>---Seleccione alumno---</option>
                  @foreach($alumno as $a)
                    <option value="{{$a->id}}">{{$a->nombre}} {{ $a->apellido}}</option>
                  @endforeach

                </select>
              </fieldset>
              <div class="form-group date sandbox-container" id="sandbox-container">
                <label for="exampleFormControlInput1">Fecha de pago</label>
                <input type="text" name="fecha_pago" id="fecha_pago" class="form-control">
                   {!! $errors->first('fecha_pago' ,'<span class="text-danger">:message</span>' ) !!}
              </div>
                   <div class="form-group " id="sandbox-container">
                <label for="exampleFormControlInput1">Valor</label>
                <input type="text" name="valor" id="valor" class="form-control">
                   {!! $errors->first('valor' ,'<span class="text-danger">:message</span>' ) !!}
              </div>
              <fieldset class="form-group">
                <label for="exampleSelect1">Estado</label>
                <select class="custom-select" name="estado" id="exampleSelect1">
                  <option value="Pagado">Pagado</option>
                  <option value="No Pagado">No Pagado</option>
                </select>
              </fieldset>
              <fieldset class="form-group">
                <label for="exampleSelect2">Concepto</label>
                <select class="custom-select" name="evento" id="concepto">
                  <option value=""> Eliga una opción</option>
                   @foreach($evento as $e)
                      <option value="{{ $e->id }}">{{$e->nombre}}
                        @if( $e->nombre == 'Mensualidad')
                          {{ \Jenssegers\Date\Date::now()->format('F')}} 
                        @endif
                        / {{  $e->precio }}
                      </option>
                  @endforeach 
                </select>
               <div class="form-group" id="valor_div">
                
              </div>
              </fieldset>
              <button type="submit" class="btn btn-primary">Guardar</button>
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
             todayBtn: "linked",
             todayHighlight: true,
             language: "es",
             autoclose: true
           });
         });
     </script>
  @endpush

@stop
