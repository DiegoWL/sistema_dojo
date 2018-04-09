<div class="modal-header">
  <h5 class="modal-title" id="exampleModalLabel">Editar Competidor</h5>
  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">×</span>
  </button>
</div>
<div class="modal-body">
  <form id="form_competidor_act" method="POST" >
      {{ csrf_field() }}
    <fieldset class="form-group">
      <label for="select_alumno"> Lista Competidores</label>
      <input type="text" name="alumno" class="form-control" value="{{$competidor->nombre}} {{$competidor->apellido}}" disabled>
    </fieldset>
    <div class="form-group">
      <label for="exampleInputFile">Peso</label>
      <input type="text" value="{{$competidor->peso}}" class="form-control" name="peso" id="peso">
    </div>
      @if ($competidor->sexo == 'F')
        <div id="kata" class="form-group">
            <label for="exampleSelect2">Categoria Kata</label>
            <select  class="custom-select" name="cat_kata" id="select_kata">
                <option>Seleccione Categoria</option>
                <option value="Cadete Femenino">Cadete Femenino</option>
                <option value="Junior Femenino">Junior Femenino</option>
                <option value="Under 21 Femenino">Under 21 Femenino</option>
                <option value="Senior Femenino">Senior Femenino</option>
                <option value="No Aplica/Compite">No Aplica/Compite</option>
            </select>
        </div>
        <fieldset class="form-group">
          <label for="exampleSelect2">Categoria Kumite</label>
          <select  class="custom-select" name="cat_kumite" id="select_kumite">
                <option>Seleccione Categoria</option>
                <option value="Cadete -47 kg">Cadete -47kg</option>
                <option value="Cadete -54 kg">Cadete -54 kg</option>
                <option value="Cadete +54 kg">Cadete +54 kg</option>
                <option value="Junior -48 Kg">Junior -48 Kg</option>
                <option value="Junior -53 kg">Junior -53 kg</option>
                <option value="Junior -59 kg">Junior -59 kg</option>
                <option value="Junior +59 kg">Junior +59 kg</option>
                <option value="Under 21 -50 kg">Under 21 -50 kg</option>
                <option value="Under 21 -55 kg">Under 21 -55 kg</option>
                <option value="Under 21 -61 kg">Under 21 -61 kg</option>
                <option value="Under 21 -68 kg">Under 21 -68 kg</option>
                <option value="Under 21 +68 kg">Under 21 +68 kg</option>
                <option value="Senior -50 kg">Senior -50 kg</option>
                <option value="Senior -55 kg">Senior -55 kg</option>
                <option value="Senior -61 kg">Senior -61 kg</option>
                <option value="Senior -68 kg">Senior -68 kg</option>
               <option value="Senior +68 kg">Senior +68 kg</option>
          </select>
        </fieldset>

      @elseif($competidor->sexo == 'M')
        <div id="kata" class="form-group">
            <label for="exampleSelect2">Categoria Kata</label>
            <select  class="custom-select" name="cat_kata" id="select_kata">
              <option>Seleccione Categoria</option>
              <option value="Cadete Masculino">Cadete Masculino</option>
              <option value="Junior Masculino">Junior Masculino</option>
              <option value="Under 21 Masculino">Under 21 Masculino</option>
              <option value="Senior Masculino">Senior Masculino</option>
              <option value="No Aplica/Compite">No Aplica/Compite</option>
          </select>
        </div>
        <fieldset class="form-group">
          <label for="exampleSelect2">Categoria Kumite</label>
          <select  class="custom-select" name="cat_kumite" id="select_kumite">
            <option>Seleccione Categoria</option>
            <option value="Cadete -52 kg">Cadete -52 kg</option>
            <option value="Cadete -57 kg">Cadete -57 kg</option>
            <option value="Cadete +63 kg">Cadete -63 kg</option>
            <option value="Cadete -70 kg">Cadete -70 kg</option>
             <option value="Cadete +70 kg">Cadete +70 kg</option>
              <option value="Junior -55 Kg">Junior -55 Kg</option>
              <option value="Junior -61 kg">Junior -61 kg</option>
              <option value="Junior -68 kg">Junior -68 kg</option>
              <option value="Junior -76 kg">Junior -76 kg</option>
              <option value="Junior +76 kg">Junior +76 kg</option>
              <option value="Under 21 -60 kg">Under 21 -60 kg</option>
              <option value="Under 21 -67 kg">Under 21 -67 kg</option>
              <option value="Under 21 -75 kg">Under 21 -75 kg</option>
              <option value="Under 21 -84 kg">Under 21 -84 kg</option>
              <option value="Under 21 +84 kg">Under 21 +84 kg</option>
              <option value="Senior -60 kg">Senior -60 kg</option>
              <option value="Senior -67 kg">Senior -67 kg</option>
              <option value="Senior -75 kg">Senior -75 kg</option>
              <option value="Senior -84 kg">Senior -84 kg</option>
              <option value="Senior +84 kg">Senior +84 kg</option>
              <option value="No Compite">No Compite</option>
          </select>
        </fieldset>
      @endif
  </form>
</div>
<div class="modal-footer">
  <button class="btn btn-success" id="btn-act-compt" data-id="{{ $competidor->id }}" type="button" >Actualizar</button>
  <button class="btn btn-info" type="button" data-dismiss="modal">Cerrar</button>
</div>
