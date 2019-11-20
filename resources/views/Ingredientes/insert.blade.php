@extends('menu')

@section('contenido')
    <div class="container shadow p-3 mb-5 bg-white rounded">
        <h1 class="center">Registrar Ingrediente</h1>

        <form action="{{ route('ingrediente.store') }}" method="post">
            @csrf
            <div class="form-row">
                <div class="col">
                    <label for="ingrediente_nombre">Nombre</label>
                    <input type="text" name="ingrediente_nombre" id="ingrediente_nombre" class="form-control">
                </div>
                <div class="col">
                    <label for="ingrediente_marca">Marca</label>
                    <input type="text" name="ingrediente_marca" id="ingrediente_marca" class="form-control">
                </div>
            </div>
            <div class="form-row">
                <div class="col">
                    <label for="ingrediente_precio">Precio</label>
                    <input type="number" name="ingrediente_precio" id="ingrediente_precio" class="form-control">
                </div>
                <div class="col">
                    <label for="ingrediente_cantidad_disponible">Cantidad Disponible</label>
                    <input type="number" name="ingrediente_cantidad_disponible" id="ingrediente_cantidad_disponible" class="form-control">
                </div>
            </div>
            <div class="form-row">
                <div class="col">
                    <label for="ingrediente_fecha_vencimiento">Fecha de Vencimiento</label>
                    <input type="date" name="ingrediente_fecha_vencimiento" id="ingrediente_fecha_vencimiento" class="form-control">
                </div>
            </div>
            <br>
            <div class="row justify-content-center">
                <button type="submit" class="btn btn-outline-dark">Registrar</button>
            </div>
        </form>
    </div>
@endsection