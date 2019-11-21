@extends('menu')

@section('contenido')

{{-- @if (empty(session('guardado')))
@else

<div class="ui compact pink message">
  <i class="close icon"></i>
  <div class="header">
    {{  session('guardado') }}
  </div>
</div>
@endif --}}
<br>
<div class="container shadow p-3 mb-5 bg-white rounded">
  <h1 class="center">Listado de Clientes</h1>
  <br>
  <table class="table shadow p-3 mb-5 bg-white rounded">
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Tipo Documento</th>
        <th>Numero Documento</th>
        <th>Edad</th>
        <th>Direccion</th>
        <th>Telefono</th>
        <th>Acciones</th>

      </tr>
    </thead>
    <tbody>

      @foreach ($objetoretornado as $cliente)

      <tr>
        <td>{{ $cliente->cliente_nombre }}</td>
        <td>{{ $cliente->cliente_apellido }}</td>
        <td>{{ $cliente->cliente_tipo_documento  }}</td>
        <td>{{ $cliente->cliente_num_doc  }}</td>
        <td>{{$cliente->cliente_edad}}</td>
        <td>{{$cliente->cliente_direccion}}</td>
        <td>{{$cliente->cliente_telefono}}</td>


        <td>
          <a href="{{ route('UpdateCliente', $cliente->id) }}"><img src="{{ asset('css/svg/sync.svg') }}" alt=""></a>
          <a href="{{ route('DeleteCliente', $cliente->id) }}"><img src="{{ asset('css/svg/trashcan.svg') }}"
              alt=""></a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <div class="row justify-content-center">
    {{ $objetoretornado->links() }}
  </div>
</div>

@endsection