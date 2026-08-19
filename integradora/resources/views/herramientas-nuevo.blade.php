@extends('layouts.base')

@section('contenido')
  <h2>Registrar herramienta</h2>

  @if ($errors->any())
    <ul style="color: #b00020; font-weight: bold;">
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  @endif

  <form action="/herramientas/nuevo" method="POST">
    @csrf

    <p>
      <label for="nombre">Nombre de la herramienta:</label><br>
      <input type="text" id="nombre" name="nombre">
    </p>

    <p>
      <label for="precio">Precio en Bs:</label><br>
      <input type="number" id="precio" name="precio">
    </p>

    <p><button type="submit">Registrar herramienta</button></p>
  </form>

  <p><a href="/herramientas">&larr; Volver a la lista</a></p>
@endsection