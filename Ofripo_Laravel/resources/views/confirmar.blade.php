@extends('layouts.base')

@section('contenido')
<section style="background-color: var(--gris-fondo); min-height: 60vh; display: flex; align-items: center; justify-content: center; padding: 60px 20px;">
    
    <div style="max-width: 600px; width: 100%; background: var(--blanco); padding: 40px; border-radius: 12px; border: 1px solid #e2e8f0; box-shadow: 0 10px 25px rgba(0,0,0,0.05);">
        
        <h3 style="font-size: 24px; color: var(--azul-oscuro); margin-bottom: 10px; text-align: center;">Resumen de tu Cotización</h3>
        <p style="color: var(--gris-texto); font-size: 14px; margin-bottom: 25px; text-align: center;">Revisa que la información sea correcta antes de enviarla al profesional.</p>

        <!-- CAJA DE RESUMEN -->
        <div style="background-color: #f8fafc; padding: 25px; border-radius: 8px; border: 1px solid #e2e8f0; margin-bottom: 30px; line-height: 1.8;">
            <p><strong>Código del Profesional:</strong> <span style="color: var(--naranja); font-weight: bold; font-size: 18px;">{{ $datos['codigo_trabajador'] }}</span></p>
            <p><strong>Tu Nombre:</strong> {{ $datos['nombre'] }}</p>
            <p><strong>Tu Correo:</strong> {{ $datos['correo'] }}</p>
            <p><strong>Detalle del Trabajo:</strong> {{ $datos['detalle'] }}</p>
        </div>

        <!-- FORMULARIO INVISIBLE PARA GUARDAR -->
        <form action="/cotizar/guardar" method="POST" style="display: flex; gap: 15px;">
            @csrf
            <input type="hidden" name="codigo_trabajador" value="{{ $datos['codigo_trabajador'] }}">
            <input type="hidden" name="nombre" value="{{ $datos['nombre'] }}">
            <input type="hidden" name="correo" value="{{ $datos['correo'] }}">
            <input type="hidden" name="detalle" value="{{ $datos['detalle'] }}">

            <!-- Botón para retroceder si se equivocó -->
            <a href="javascript:history.back()" style="flex: 1; text-align: center; background-color: #cbd5e1; color: var(--azul-oscuro); padding: 14px; border-radius: 6px; text-decoration: none; font-weight: 600; transition: 0.3s;">Volver para editar</a>
            
            <!-- Botón final -->
            <button type="submit" class="btn-naranja" style="flex: 1; font-size: 16px;">Confirmar cotización</button>
        </form>

    </div>
    
</section>
@endsection