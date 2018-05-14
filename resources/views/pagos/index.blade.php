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

              <table class="table" id="tabla_pago" >
                <thead>
                  <tr>
                    <th>Alumno</th>
                    <th>Concepto</th>
                    <th>Fecha de Pago</th>
                    <th>Valor cancelado</th>
                    <th>Comentario</th>
                    <th>Editar/Borrar</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($pagos as $p)
                    <tr>
                      <td> {{$p->alumno_nombre}} {{$p->alumno_apellido}}</td>
                      <td> {{$p->concepto}} {{ \Jenssegers\Date\Date::parse($p->fecha)->format('F')}} </td>
                      <td> {{\Carbon\Carbon::parse($p->fecha)->format('d/m/Y')}}</td>
                      <td> ${{$p->valor}}</td>
                      <td> {{$p->comentario}}</td>
                      <td>
                        <p class="text-center">
                           <a href="#" data-id="{{$p->id}}" class="edit_pago" style="color:#17A2B8"> <span class="far fa-edit"></span></a>
                            <a href="#" data-id="{{$p->id}}" class="borrar_pago"><span class="far fa-trash-alt"></span></a>
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


@stop
