@extends('menu')
@section('contenido')
<div class="ui piled text container segment">
    <h1 class="center">Registro Proveedor</h1>
    @if ($errors->any())
    <div class="ui orange message">
        @foreach ($errors->all() as $e)
            {{ $e }} <br>
        @endforeach
    </div> 
    @endif
<form action="" method="POST">
@csrf
        <div class="ui raised form segment">
            <div class="field">
                @error('nombre')
                <div class="ui orange message">Este Campo es Obligatorio!</div>
                @enderror
                <label class="ui blue ribbon label">Nombre</label>
            <input placeholder="Nombre..." type="text" id="nombre" name="nombre" value="{{ old('nombre') }}">
            </div>
            <div class="field">
                    @error('telefono')
                    <div class="ui orange message">Este Campo es Obligatorio!</div>
                    @enderror
                <label class="ui blue ribbon label">Telefono</label>
            <input placeholder="Telefono..." type="number" id="telefono" name="telefono" value="{{ old('telefono') }}">
            </div>
            <div class="field">
                @error('direccion')
                <div class="ui orange message">Este Campo es Obligatorio!</div>
                @enderror
                <label class="ui blue ribbon label">Direccion</label>
            <input type="text" name="direccion" id="direccion" placeholder="Direccion..." value="{{ old('direccion') }}">
            </div>
            <center>
                <input type="submit" class="ui submit inverted blue button" id="guardar" value="Registrar">
            </center>
        </div>
    </form>
</div>
@endsection