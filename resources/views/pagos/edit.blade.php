<div class="modal-header">
  <h5 class="modal-title" id="exampleModalLabel">Editar Pagos</h5>
  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">×</span>
  </button>
</div>
<div class="modal-body">
  <form  method="POST" >
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
    <div class="form-group" >
      <label for="exampleFormControlInput1">Valor:</label>
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
      <select class="custom-select" name="concepto" id="exampleSelect1">
        <option value="Mensualidad">Mensualidad</option>
        <option value="Seminario">Seminario</option>
        <option value="Examen">Examen</option>
        <option value="Otro">Otro</option>
      </select>
    </fieldset>
    <fieldset class="form-group">
      <label for="exampleSelect2">Comentarios </label>
        <textarea class="form-control" name="comentario" id="comentario" rows="3"></textarea>
    </fieldset>
    <button type="submit" class="btn btn-primary">Guardar</button>
  </form>
</div>
<div class="modal-footer">
  <button class="btn btn-success" id="btn-act-pago" data-id="" type="button" >Actualizar</button>
  <button class="btn btn-info" type="button" data-dismiss="modal">Cerrar</button>
</div>
