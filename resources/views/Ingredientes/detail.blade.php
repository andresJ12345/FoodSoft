@extends('menu')

@section('contenido')
<div class="container shadow p-3 mb-5 bg-white rounded">
        <h1 class="center">Detalles Ingrediente</h1>
        @foreach ($ori as $i)
        <form action="" method="">
                <div class="form-row">
                    <div class="col">
                        <label for="ingrediente_nombre">Nombre</label>
                        <label type="text" name="ingrediente_nombre" id="ingrediente_nombre" class="form-control">{{ $i->ingrediente_nombre }}</label>
                    </div>
                    <div class="col">
                        <label for="ingrediente_marca">Marca</label>
                        <label type="text" name="ingrediente_marca" id="ingrediente_marca" class="form-control">{{ $i->ingrediente_marca }}</label>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col">
                        <label for="ingrediente_precio">Precio</label>
                        <label type="number" name="ingrediente_precio" id="ingrediente_precio" class="form-control">{{ $i->ingrediente_marca }}</label>
                    </div>
                    <div class="col">
                        <label for="ingrediente_cantidad_disponible">Cantidad Disponible</label>
                        <label type="number" name="ingrediente_cantidad_disponible" id="ingrediente_cantidad_disponible" class="form-control">{{ $i->ingrediente_cantidad_disponible }}</label>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col">
                        <label for="ingrediente_fecha_vencimiento">Fecha de Vencimiento</label>
                        <label type="date" name="ingrediente_fecha_vencimiento" id="ingrediente_fecha_vencimiento" class="form-control">{{ $i->ingrediente_fecha_vencimiento }}</label>
                    </div>
                </div>
                {{-- <br>
                <div class="row justify-content-center">
                    <button type="submit" class="btn btn-outline-dark">Registrar</button>
                </div> --}}
            </form>
        @endforeach
    </div>
@endsection