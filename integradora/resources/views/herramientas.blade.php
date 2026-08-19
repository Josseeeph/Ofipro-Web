@extends('layouts.base')

@section('contenido')
  <p>En Ferretería El Tornillo llevamos años ayudando a los vecinos a construir y reparar sus hogares con las mejores herramientas del barrio.</p>

  <p>Hay <strong>{{ count($herramientas) }}</strong> herramientas en el inventario.</p>

  <ul>
    @foreach ($herramientas as $herramienta)
      <li>{{ $herramienta->nombre }} — Bs {{ $herramienta->precio }}</li>
    @endforeach
  </ul>

  <p>Inventario atendido por Jose Montes Fabrica</p>

  <p><a href="/herramientas/nuevo">+ Agregar una herramienta</a></p>
@endsection