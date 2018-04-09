@extends('index')
@section('content')

  <h1 class="section-header">
    <div>Lista competidores</div>
  </h1>
<div class="container mt-5">
  <div class="row">
    <div class="card card-primary">
        <div class="card-body">
          <table class="table" id="tabla_competidor">
            <thead>
              <tr>
                <th>Nombre</th>
                <th>Peso</th>
                <th>Edad</th>
                <th>Categoria Kumite</th>
                <th>Categoria Kata</th>
                <th>Editar/Borrar</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($competidor as $compet)
                <tr>
                  <td>{{$compet->alumno_nombre}} {{ $compet->alumno_apellido}}</td>
                  <td>{{$compet->peso}} Kg</td>
                  <td>{{\Carbon\Carbon::parse($compet->fecha_nac)->age}} años</td>
                  <td>{{$compet->cat_kumite}}</td>
                  <td>{{$compet->cat_kata}}</td>
                  <td>
                    <p class="text-center">
                        <a href="#"  class="edit_competidor" data-id="{{$compet->id}}" style="color:#17A2B8"> <span class="far fa-edit"></span></a>
                        <a href="#"  class="borrar_competidor" data-id="{{$compet->id}}"><span class="far fa-trash-alt"></span></a>
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



@stop
