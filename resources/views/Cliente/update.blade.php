@extends('menu')


@section('contenido')


<div class="container shadow p-3 mb-5 bg-white rounded">
  <h1 class="center">Actualizar Cliente</h1>
  <br>
  <form action="{{ route('UpdateBdCliente') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-row">
      <div class="col">
          <label class="">Nombre</label>
          <input type="hidden" name="id" value="{{ $updatecliente->id }}">
          @error ('cliente_nombre')
          <div class="alert">{{$errors->first('cliente_nombre')}}</div>
          @enderror
          <input placeholder="Nombre" type="text" class="form-control" name="cliente_nombre" id="cliente_nombre"
            value="{{ $updatecliente->cliente_nombre }}">
      </div>
      <div class="col">
          <label>Apellido</label>
          @error ('cliente_apellido')
          <div class="alert">{{$errors->first('cliente_apellido')}}</div>
          @enderror
          <input placeholder="Apellido" class="form-control" type="text" name="cliente_apellido" id="cliente_apellido"
            value="{{ $updatecliente->cliente_apellido }}">
      </div>
    </div>
    <div class="form-row">
      <div class="col">
          <label class="">Tipo Documento</label>
          @error ('cliente_tipo_documento')
          <div class="alert">{{$errors->first('cliente_tipo_documento')}}</div>
          @enderror
          <input placeholder="Tipo" type="text" class="form-control" name="cliente_tipo_documento" id="cliente_tipo_documento"
            value="{{ $updatecliente->cliente_tipo_documento }}">
      </div>
      <div class="col">
          <label class="">Numero Documento</label>
          @error ('cliente_num_doc')
          <div class="alert">{{$errors->first('cliente_num_doc')}}</div>
          @enderror
          <input placeholder="Documento" type="number" class="form-control" name="cliente_num_doc" id="cliente_num_doc"
            value="{{ $updatecliente->cliente_num_doc }}">
      </div>
    </div>
    <div class="form-row">
      <div class="col">
          <label class="">Edad</label>
          @error ('cliente_edad')
          <div class="alert">{{$errors->first('cliente_edad')}}</div>
          @enderror
          <input placeholder="Edad" type="number" class="form-control" name="cliente_edad" id="cliente_edad"
            value="{{ $updatecliente->cliente_edad }}">
      </div>
      <div class="col">
          <label class="">Direccion</label>
          @error ('cliente_direccion')
          <div class="alert">{{$errors->first('cliente_direccion')}}</div>
          @enderror
          <input placeholder="Direccion" type="text" class="form-control" name="cliente_direccion" id="cliente_direccion"
            value="{{ $updatecliente->cliente_direccion }}">
      </div>
      <div class="col">
          <label class="">Telefono</label>
          @error ('cliente_telefono')
          <div class="alert">{{$errors->first('cliente_telefono')}}</div>
          @enderror
          <input placeholder="Telefono" type="number" class="form-control" name="cliente_telefono" id="cliente_telefono"
            value="{{ $updatecliente->cliente_telefono }}">
      </div>
    </div>
    <br>
    <div class="row justify-content-center">
        <input type="submit" value="Actualizar" class="btn btn-outline-dark">
    </div>
</div>
</form>
</div>





@endsection