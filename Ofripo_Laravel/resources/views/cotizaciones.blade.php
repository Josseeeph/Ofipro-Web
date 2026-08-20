@extends('layouts.base')

@section('contenido')
<section style="background-color: var(--gris-fondo); min-height: 70vh; padding: 60px 100px;">
    
    <div style="background: var(--blanco); padding: 40px; border-radius: 12px; border: 1px solid #e2e8f0; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
        
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 30px;">
            <div>
                <h2 style="color: var(--azul-oscuro); margin-bottom: 5px;">Cotizaciones Realizadas</h2>
                <p style="color: var(--gris-texto); font-size: 14px;">Lista de todas las solicitudes enviadas a los profesionales de OFIPRO.</p>
            </div>
            <a href="/inicio" class="btn-blanco">Volver al inicio</a>
        </div>

        <div style="overflow-x: auto;">
            <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 14px;">
                <thead>
                    <tr style="background-color: var(--azul-oscuro); color: var(--blanco);">
                        <th style="padding: 15px; border-radius: 8px 0 0 0;">Fecha</th>
                        <th style="padding: 15px;">Profesional</th>
                        <th style="padding: 15px;">Cliente</th>
                        <th style="padding: 15px;">Correo</th>
                        <th style="padding: 15px; border-radius: 0 8px 0 0;">Detalle</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- Iniciamos un ciclo para dibujar cada registro de la base de datos --}}
                    @forelse($cotizaciones as $cotizacion)
                    <tr style="border-bottom: 1px solid #e2e8f0;">
                        <td style="padding: 15px; color: var(--gris-texto);">{{ $cotizacion->created_at->format('d/m/Y') }}</td>
                        <td style="padding: 15px; color: var(--naranja); font-weight: bold;">{{ $cotizacion->servicio }}</td>
                        <td style="padding: 15px; font-weight: 600; color: var(--azul-oscuro);">{{ $cotizacion->nombre }}</td>
                        <td style="padding: 15px; color: var(--gris-texto);">{{ $cotizacion->correo }}</td>
                        <td style="padding: 15px; color: var(--gris-texto);">{{ $cotizacion->detalle }}</td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" style="padding: 30px; text-align: center; color: var(--gris-texto);">
                            Aún no hay cotizaciones registradas en el sistema.
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        
    </div>
</section>
@endsection