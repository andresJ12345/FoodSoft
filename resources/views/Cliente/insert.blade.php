@extends('menu')

@section('contenido')
<br>
    <div class="container shadow p-3 mb-5 bg-white rounded">
        <h1 class="center">Registrar Cliente</h1>

        <form action="{{ route('InsertCliente') }}" method="POST" enctype="multipart/form-data" onsubmit="return checkSubmit();">
            @csrf
            <div class="form-row">
                <div class="col">
                    @error ('cliente_nombre')
                    <div class="ui orange message">{{$errors->first('cliente_nombre')}}</div>
                    @enderror
                    <label for="ingrediente_nombre">Nombre</label>
                    <input type="text" name="cliente_nombre" id="cliente_nombre" class="form-control" value="{{old('cliente_nombre')}}">
                </div>
                <div class="col">
                    @error ('cliente_apellido')
                    <div class="ui orange message">{{$errors->first('cliente_apellido')}}</div>
                    @enderror
                    <label for="ingrediente_marca">Apellido</label>
                    <input type="text" name="cliente_apellido" id="cliente_apellido" class="form-control" value="{{old('cliente_apellido')}}">
                </div>
            </div>
            <div class="form-row">
                <div class="col">
                    @error ('cliente_tipo_documento')
                    <div class="ui orange message">{{$errors->first('cliente_tipo_documento')}}</div>
                    @enderror
                    <label for="ingrediente_precio">Tipo Documento</label>
                    <input type="text" name="cliente_tipo_documento" id="cliente_tipo_documento" class="form-control" value="{{old('cliente_tipo_documento')}}">
                </div>
                <div class="col">
                    @error ('cliente_num_doc')
                    <div class="ui orange message">{{$errors->first('cliente_num_doc')}}</div>
                    @enderror
                    <label for="ingrediente_cantidad_disponible">Numero Documento </label>
                    <input type="number" name="cliente_num_doc" id="cliente_num_doc" class="form-control"value="{{old('cliente_num_doc')}}">
                </div>
            </div>
            <div class="form-row">
                <div class="col">
                    @error ('cliente_edad')
                    <div class="ui orange message">{{$errors->first('cliente_edad')}}</div>
                    @enderror
                    <label for="ingrediente_fecha_vencimiento">Edad </label>
                <input type="number" name="cliente_edad" id="cliente_edad" class="form-control" value="{{old('cliente_edad')}}">
                </div>

                    <div class="col">
                        <div class="field">
                            @error ('cliente_direccion')
                        <div class="ui orange message">{{$errors->first('cliente_direccion')}}</div>
                            @enderror
                        <label for="ingrediente_fecha_vencimiento">Direccion </label>
                        <input type="text" name="cliente_direccion" id="cliente_direccion" class="form-control" value="{{old('cliente_direccion')}}">
                    </div>
                    </div>
              

                        <div class="col">
                            <div class="field">
                                @error ('cliente_telefono')
                                <div class="ui orange message">{{$errors->first('cliente_telefono')}}</div>
                                @enderror
                            <label for="ingrediente_fecha_vencimiento">Telefono </label>
                            <input type="number" name="cliente_telefono" id="cliente_telefono" class="form-control" value="{{old('cliente_telefono')}}">
                    </div>
                  </div>
                </div>

               <br>
                
                    <div class="row justify-content-center">
                        <button type="submit" class="btn btn-outline-dark">Registrar</button>
                    </div>
           
              
           
        </form>
    </div>
    <br>

<script>
  var statSend = false;
  function checkSubmit() {
    if (!statSend) {
      statSend = true;
      return true;
      
    }
    else{
      return false;
    }
  }
  </script>
 
@endsection