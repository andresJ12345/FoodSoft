@extends('menu');


@section('contenido')


<div class="ui inverted text container segment">
    <center><h1>ACTUALIZAR CLIENTE</h1></center>
    <br>
    <form action="{{ route('UpdateBdCliente') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="ui inverted form">
        <div class="field">
          <div class="field">
            <label class="ui pink ribbon label">Nombre</label>
            <input type="hidden" name="id" value="{{ $updatecliente->id }}">
            @error ('cliente_nombre')
                    <div class="ui orange message">{{$errors->first('cliente_nombre')}}</div>
                    @enderror
            <input placeholder="Nombre" type="text" name="cliente_nombre" id="cliente_nombre" value="{{ $updatecliente->cliente_nombre }}">
          </div>
          <div class="field">
            <label class="ui pink ribbon label">Apellido</label>
            @error ('cliente_apellido')
            <div class="ui orange message">{{$errors->first('cliente_apellido')}}</div>
            @enderror
            <input placeholder="Apellido" type="text" name="cliente_apellido" id="cliente_apellido" value="{{ $updatecliente->cliente_apellido }}">
          </div>
          <div class="field">
          <label class="ui pink ribbon label">Tipo Documento</label>
          @error ('cliente_tipo_documento')
                    <div class="ui orange message">{{$errors->first('cliente_tipo_documento')}}</div>
                    @enderror
          <input placeholder="Tipo" type="text" name="cliente_tipo_documento" id="cliente_tipo_documento" value="{{ $updatecliente->cliente_tipo_documento }}">
          </div>
          <div class="field">
            <label class="ui pink ribbon label">Numero Documento</label>
            @error ('cliente_num_doc')
                    <div class="ui orange message">{{$errors->first('cliente_num_doc')}}</div>
                    @enderror
            <input placeholder="Documento" type="number" name="cliente_num_doc" id="cliente_num_doc" value="{{ $updatecliente->cliente_num_doc }}">
          </div>
          <div class="field">
            <label class="ui pink ribbon label">Edad</label>
            @error ('cliente_edad')
                    <div class="ui orange message">{{$errors->first('cliente_edad')}}</div>
                    @enderror
            <input placeholder="Edad" type="number" name="cliente_edad" id="cliente_edad" value="{{ $updatecliente->cliente_edad }}">
          </div>
          <div class="field">
            <label class="ui pink ribbon label">Direccion</label>
            @error ('cliente_direccion')
            <div class="ui orange message">{{$errors->first('cliente_direccion')}}</div>
                @enderror
            <input placeholder="Direccion" type="text" name="cliente_direccion" id="cliente_direccion" value="{{ $updatecliente->cliente_direccion }}">
          </div>
          <div class="field">
            <label class="ui pink ribbon label">Telefono</label>
            @error ('cliente_telefono')
                                <div class="ui orange message">{{$errors->first('cliente_telefono')}}</div>
                                @enderror
            <input placeholder="Telefono" type="number" name="cliente_telefono" id="cliente_telefono" value="{{ $updatecliente->cliente_telefono }}">
          </div>
          
        </div>
       
        </div>
        <center>
    
        <input type="submit" value="Actualizar" class="ui submit button">
        </center>
      </div>
      </form>
    </div>





@endsection