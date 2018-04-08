@extends('index')
@section('content')

<h1 class="section-header">
  <div>Registrar Competidores</div>
</h1>
<div class="container mt-5">
<div class="row">
  <div class="col-md-8 offset-md-2">
    <div class="card card-primary">
        <div class="card-body">
          <form id="form_competidor" method="POST" >
              {{ csrf_field() }}
            <fieldset class="form-group">
              <label for="select_alumno"> Lista Competidores</label>
              <select class="custom-select" name="id_alumno" id="select_alumno">
                <option value="" selected>Seleccionar Alumno</option>
                @foreach ($alumno as $almn)
                    <option value="{{$almn->id}}" data-id="{{$almn->sexo}}">{{$almn->nombre}} {{$almn->apellido}}</option>
                @endforeach
              </select>
            </fieldset>
            <div class="form-group">
              <label for="exampleInputFile">Peso</label>
              <input type="text" class="form-control" name="peso" id="peso">
            </div>
            <div id="kata" class="form-group">
              <label for="exampleSelect2">Categoria Kata</label>
              <select class="custom-select" name="cat_kata" id="select_kata">
                <option>Seleccione Categoria</option>
              </select>
            </div>
            <fieldset class="form-group">
              <label for="exampleSelect2">Categoria Kumite</label>
              <select  class="custom-select" name="cat_kumite" id="select_kumite">
                <option>Seleccione Categoria</option>
              </select>
            </fieldset>
            <button type="submit" class="btn btn-primary" id="btn_competidor">Registrar</button>
          </form>

        </div>
      </div>
    </div>
  </div>

</div>
@stop
