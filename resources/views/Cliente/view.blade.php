@extends('menu')

@section('contenido')

@if (empty(session('guardado')))
@else 
   
    <div class="ui compact pink message">
    <i class="close icon"></i>
    <div class="header">
    {{  session('guardado') }}
  </div>
</div>
@endif
        
<h1>Listado de Clientes</h1>

<div class="text-right">
    <a href="{{ route('insertarcli')}}" class="btn btn-primary btn-lg">Añadir cliente</a>
</div>

<br>

<table class="ui pink table">
  <thead >
    <tr><th>Nombre</th>
    <th>Apellido</th>
    <th>Tipo Documento</th>
    <th>Numero Documento</th>
    <th>Edad</th>
    <th>Direccion</th>
    <th>Telefono</th>
    <th>Acciones</th>

  </tr></thead>
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
          <a href="{{ route('DeleteCliente', $cliente->id) }}"><img src="{{ asset('css/svg/trashcan.svg') }}" alt=""></a>
          <i class="eye icon"></i></a>
          </td>
          </tr>
      @endforeach
        </tbody>
      </table>

      @if ($objetoretornado->lastPage() >1)
  <tfoot>
      <tr><th colspan="5">
        <div class="ui right floated pagination menu">
        <a herf="{{ $objetoretornado->previousPageUrl() }}" class="{{($objetoretornado->currentPage() == 1) ? 'disabled ' : ''}}icon item">
            <i class="left chevron icon"></i>
          </a>
          @for ($i = 1; $i <= $objetoretornado->lastPage(); $i++)
        <a href="{{ $objetoretornado->url($i) }}" class="{{ ($objetoretornado->currentPage() == $i) ? 'active ' :  ''}} item"> {{$i}}</a>
          @endfor
        <a href="{{ $objetoretornado->nextPageUrl() }}" class="{{($objetoretornado->currentPage() ==  $objetoretornado->lastPage()) ? 'disabled ' : ''}}icon item">
            <i class="right chevron icon"></i>
          </a>
        </div>
      </th>
    </tr></tfoot>
    @endif

@endsection