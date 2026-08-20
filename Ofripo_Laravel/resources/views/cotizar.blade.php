@extends('layouts.base')

@section('contenido')
<section style="background-color: var(--gris-fondo); min-height: 70vh; padding: 60px 20px; display: flex; align-items: center; justify-content: center;">
    
    <div style="max-width: 600px; width: 100%; background: var(--blanco); padding: 40px; border-radius: 12px; border: 1px solid #e2e8f0; box-shadow: 0 10px 25px rgba(0,0,0,0.05);">
        
        <h3 style="font-size: 24px; color: var(--azul-oscuro); margin-bottom: 10px; text-align: center;">Realizar una cotización</h3>
        <p style="color: var(--gris-texto); font-size: 14px; margin-bottom: 25px; text-align: center;">Completa el formulario para enviar tu solicitud directa al profesional seleccionado.</p>
        
        {{-- La Tercera Muralla (Errores) --}}
        @if ($errors->any())
            <div style="background-color: #3a1414; color: #ffb4b4; padding: 12px; border-radius: 6px; margin-bottom: 20px;">
                <ul style="margin: 0; padding-left: 20px;">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="/cotizar/confirmar" method="POST">
            @csrf
            
            {{-- Código del trabajador (viene por la URL y es de solo lectura) --}}
            <div style="margin-bottom: 20px;">
                <label for="codigo_trabajador" style="display: block; font-weight: bold; margin-bottom: 8px; font-size: 14px;">Código de Trabajador:</label>
                <input type="text" name="codigo_trabajador" value="{{ request('codigo') }}" readonly style="width: 100%; padding: 12px; border: 1px solid #cbd5e1; border-radius: 6px; background-color: #f1f5f9; font-weight: bold; color: var(--naranja);">
            </div>

            <div style="margin-bottom: 20px;">
                <label for="nombre" style="display: block; font-weight: bold; margin-bottom: 8px; font-size: 14px;">Nombre completo:</label>
                <input type="text" id="nombre" name="nombre" placeholder="Ej. Roberto Gómez" style="width: 100%; padding: 12px; border: 1px solid #cbd5e1; border-radius: 6px;">
            </div>

            <div style="margin-bottom: 20px;">
                <label for="correo" style="display: block; font-weight: bold; margin-bottom: 8px; font-size: 14px;">Correo electrónico:</label>
                <input type="email" id="correo" name="correo" placeholder="Ej. roberto@correo.com" style="width: 100%; padding: 12px; border: 1px solid #cbd5e1; border-radius: 6px;">
            </div>

            <div style="margin-bottom: 25px;">
                <label for="detalle" style="display: block; font-weight: bold; margin-bottom: 8px; font-size: 14px;">Detalle del trabajo o falla:</label>
                <textarea id="detalle" name="detalle" rows="4" placeholder="Describe brevemente qué trabajo necesitas realizar..." style="width: 100%; padding: 12px; border: 1px solid #cbd5e1; border-radius: 6px;"></textarea>
            </div>

            <div style="display: flex; gap: 15px;">
                <a href="/inicio" style="flex: 1; text-align: center; background-color: #cbd5e1; color: var(--azul-oscuro); padding: 12px; border-radius: 6px; text-decoration: none; font-weight: 600; transition: 0.3s;">Cancelar</a>
                <button type="submit" class="btn-naranja" style="flex: 2; text-align: center; font-size: 16px;">Revisar Cotización</button>
            </div>
        </form>
    </div>
    
</section>
@endsection