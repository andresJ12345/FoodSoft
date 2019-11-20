@extends('menu')

@section('contenido')
<br>
<div class="container shadow p-3 mb-5 bg-white rounded">
    <h1 class="center">Actualizar Ingrediente</h1>

    <form action="{{ route('ingrediente.update',$ori->id) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="form-row">
            <div class="col">
                <label for="ingrediente_nombre">Nombre</label>
                <input type="text" name="ingrediente_nombre" id="ingrediente_nombre" class="form-control" value="{{ $ori->ingrediente_nombre }}">
            </div>
            <div class="col">
                <label for="ingrediente_marca">Marca</label>
                <input type="text" name="ingrediente_marca" id="ingrediente_marca" class="form-control" value="{{ $ori->ingrediente_marca }}">
            </div>
        </div>
        <div class="form-row">
            <div class="col">
                <label for="ingrediente_precio">Precio</label>
                <input type="number" name="ingrediente_precio" id="ingrediente_precio" class="form-control" value="{{ $ori->ingrediente_precio }}">
            </div>
            <div class="col">
                <label for="ingrediente_cantidad_disponible">Cantidad Disponible</label>
                <input type="number" name="ingrediente_cantidad_disponible" id="ingrediente_cantidad_disponible" class="form-control" value="{{ $ori->ingrediente_cantidad_disponible }}">
            </div>
        </div>
        <div class="form-row">
            <div class="col">
                <label for="ingrediente_fecha_vencimiento">Fecha de Vencimiento</label>
                <input type="date" name="ingrediente_fecha_vencimiento" id="ingrediente_fecha_vencimiento" class="form-control" value="{{ $ori->ingrediente_fecha_vencimiento }}">
            </div>
        </div>
        <br>
        <div class="row justify-content-center">
            <button type="submit" class="btn btn-outline-dark">Actualizar</button>
        </div>
    </form>
</div>
<br>
@endsection