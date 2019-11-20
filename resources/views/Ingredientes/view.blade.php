@extends('menu')

@section('contenido')
    <div class="container shadow p-3 mb-5 bg-white rounded">
        <h1 class="center">Listado de Ingredientes</h1>

        <table class="table shadow p-3 mb-5 bg-white rounded">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Cantidad Disponible</th>
                    <td>Acciones</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($ori as $i)
                <tr>
                <td>{{ $i->ingrediente_nombre }}</td>
                    <td>{{ $i->ingrediente_precio }}</td>
                    <td>{{ $i->ingrediente_cantidad_disponible }}</td>
                    <td>
                        <a href="{{ route('ingrediente.show', $i->id) }}"><img src="{{ asset('css/svg/eye.svg') }}" alt=""></a>
                        <a href="{{ route('ingrediente.edit', $i->id) }}"><img src="{{ asset('css/svg/sync.svg') }}" alt=""></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection