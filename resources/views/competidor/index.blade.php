@extends('index')
@section('content')

  <h1 class="section-header">
    <div>Ver Competidores</div>
  </h1>
<div class="container mt-5">
  <div class="row">
    <div class="card card-primary">
        <div class="card-body">
          <table class="table">
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
                  <td>{{$compet->categoria_kumite}}</td>
                  <td>{{$compet->categoria_kata}}</td>
                  <td>
                    <p class="text-center">
                        <a href="#"  class="edit_competidor" style="color:#17A2B8"> <span class="far fa-edit"></span></a>
                        <a href="#"  class="borrar_competidor"><span class="far fa-trash-alt"></span></a>
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
