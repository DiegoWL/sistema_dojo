@extends('index')
@section('content')
  <h1 class="section-header">
    <div>Ver Alumnos</div>
  </h1>
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-12">
        <div class="card card-primary">
          <div class="card-body">
            <div class="table-responsive" id="tabla_alumnos" >
              <table id="t_alumnos" class="table table-condensed" >
                <thead>
                  <tr>
                    <th>Rut</th>
                    <th>Nombre</th>
                    <th>Sexo</th>
                    <th>Fecha de Nacimiento</th>
                    <th>Dirección</th>
                    <th>Actividad</th>
                    <th>Fono</th>
                    <th>Fono Emergencia</th>
                    <th>E-mail</th>
                    <th>Apoderado</th>
                    <th>Fecha de Ingreso</th>
                    <th>Observación</th>
                    <th>Editar/Eliminar</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($alumnos as $alumno)
                    <tr>
                      <td style="white-space: nowrap;">{{$alumno->rut}}</td>
                      <td style="white-space: nowrap;">{{$alumno->nombre}} {{$alumno->apellido}}</td>
                      <td>{{$alumno->sexo}}</td>
                      <td>{{\Carbon\Carbon::parse($alumno->fecha_nac)->format('d/m/Y') }}</td>
                      <td>{{$alumno->direccion}}</td>
                      <td>{{$alumno->actividad}}</td>
                      <td>{{$alumno->telefono}}</td>
                      <td>{{$alumno->fono_emerg}}</td>
                      <td>{{$alumno->email}}</td>
                      <td>{{$alumno->apoderado}}</td>
                      <td>{{ \Carbon\Carbon::parse($alumno->fecha_ingreso)->format('d/m/Y') }}</td>
                      <td>{{$alumno->observacion}}</td>
                      <td><p class="text-center">
                           <a href="#" data-id="{{$alumno->id}}" class="edit_alumno" style="color:#17A2B8"> <span class="far fa-edit"></span></a>
                            <a href="#" data-id="{{$alumno->id}}" class="borrar_alumno"><span class="far fa-trash-alt"></span></a>
                          </p>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@push('scripts')
<script>
   $(document).ready(function() {
    $('#t_alumnos').DataTable({
      "info": false,
       "language": {
            "lengthMenu": "Mostrando _MENU_ registros por paginas",
            "zeroRecords": "No se encontraron registros",
            "info": "Mostrando pagina _PAGE_ de _PAGES_",
            "infoEmpty": "Sin registros disponibles",
            "infoFiltered": "(filtrado de _MAX_ registros totales)",
            "Search": "Buscar"
        }
    });


   });
</script>
@endpush
@stop
