@if(session()->has('msj'))
<div class="alert alert-success" role="alert">
  {{ session('msj') }}
</div>
@endif

@if(session()->has('errormsj'))
<div class="alert alert-danger" role="alert">
  ¡Error al guardar los datos!
</div>
@endif 

<form role="form" method="POST" enctype="multipart/form-data">

    {{ csrf_field() }} <!-- Para validar el token -->
    <div class="form-group">
        <label for="descripciontipo">Descripcion</label>
        <input type="text" class="form-control" name="descripciontipo"  id="descripcion"  placeholder="Ingrese la descripcion">

        @if($errors->has('descripciontipo'))
            <span style='color:red;'> {{ $errors->first('descripciontipo') }} </span>
        @endif 
    </div>

    

  <button type="button" class="btn btn-primary" id="btnTU" onclick="ingresarTipoUsuarios()">Guardar</button>
</form>