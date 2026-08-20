<?php

use Illuminate\Support\Facades\Route;
use App\Models\Cotizacion;

// Redirigir la raíz al inicio
Route::redirect('/', '/inicio');

// 1. Mostrar la página principal
Route::get('/inicio', function () {
    return view('inicio');
});

// 2. MOSTRAR LA PÁGINA DEL FORMULARIO DE COTIZACIÓN
Route::get('/cotizar', function () {
    return view('cotizar');
});

// 3. RECIBIR EL FORMULARIO, VALIDAR Y MOSTRAR LA VENTANA DE CONFIRMACIÓN
Route::post('/cotizar/confirmar', function () {
    
    request()->validate([
        'codigo_trabajador' => 'required',
        'nombre' => 'required',
        'correo' => 'required|email',
        'detalle' => 'required',
    ], [
        'nombre.required' => 'Falta tu nombre, por favor complétalo.',
        'correo.required' => 'El correo es obligatorio.',
        'correo.email' => 'Ese correo no parece válido: le falta el @.',
        'detalle.required' => 'Describe brevemente qué trabajo necesitas realizar.',
    ]);

    return view('confirmar', [
        'datos' => request()->all()
    ]);
});

// 4. GUARDAR DEFINITIVAMENTE EN LA BASE DE DATOS
Route::post('/cotizar/guardar', function () {
    
    Cotizacion::create([
        'nombre' => request()->input('nombre'),
        'correo' => request()->input('correo'),
        'servicio' => 'Trabajador ID: ' . request()->input('codigo_trabajador'), 
        'detalle' => request()->input('detalle'),
    ]);

    // OJO AQUÍ: Ahora lo mandamos a la ventana de éxito
    return redirect('/cotizar/exito');
});

// 5. MOSTRAR LA PÁGINA DE ÉXITO
Route::get('/cotizar/exito', function () {
    return view('exito');
});

// 6. MOSTRAR LA LISTA DE COTIZACIONES (Para la defensa del video)
Route::get('/cotizaciones', function () {
    // Sacamos todas las cotizaciones de la base de datos
    $cotizaciones = \App\Models\Cotizacion::orderBy('created_at', 'desc')->get();
    
    // Las enviamos a una nueva vista
    return view('cotizaciones', ['cotizaciones' => $cotizaciones]);
});