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
                    @error('ingrediente_nombre')
                        <div class="alert alert-dismissible fade show" role="alert">
                            <p>{{ $errors->first('ingrediente_nombre')}}</p>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @enderror
            </div>
            <div class="col">
                <label for="ingrediente_marca">Marca</label>
                <input type="text" name="ingrediente_marca" id="ingrediente_marca" class="form-control" value="{{ $ori->ingrediente_marca }}">
                @error('ingrediente_marca')
                        <div class="alert alert-dismissible fade show" role="alert">
                            <p>{{ $errors->first('ingrediente_marca')}}</p>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @enderror
            </div>
        </div>
        <div class="form-row">
            <div class="col">
                <label for="ingrediente_precio">Precio</label>
                <input type="number" name="ingrediente_precio" id="ingrediente_precio" class="form-control" value="{{ $ori->ingrediente_precio }}">
                @error('ingrediente_precio')
                        <div class="alert alert-dismissible fade show" role="alert">
                            <p>{{ $errors->first('ingrediente_precio')}}</p>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @enderror
            </div>
            <div class="col">
                <label for="ingrediente_cantidad_disponible">Cantidad Disponible</label>
                <input type="number" name="ingrediente_cantidad_disponible" id="ingrediente_cantidad_disponible" class="form-control" value="{{ $ori->ingrediente_cantidad_disponible }}">
                    @error('ingrediente_cantidad_disponible')
                        <div class="alert alert-dismissible fade show" role="alert">
                            <p>{{ $errors->first('ingrediente_cantidad_disponible')}}</p>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @enderror
            </div>
        </div>
        <div class="form-row">
            <div class="col">
                <label for="ingrediente_fecha_vencimiento">Fecha de Vencimiento</label>
                <input type="date" name="ingrediente_fecha_vencimiento" id="ingrediente_fecha_vencimiento" class="form-control" value="{{ $ori->ingrediente_fecha_vencimiento }}">
                    @error('ingrediente_fecha_vencimiento')
                        <div class="alert alert-dismissible fade show" role="alert">
                            <p>{{ $errors->first('ingrediente_fecha_vencimiento')}}</p>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @enderror
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