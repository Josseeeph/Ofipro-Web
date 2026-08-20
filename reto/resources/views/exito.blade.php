@extends('layouts.base')

@section('contenido')
<section style="background-color: var(--gris-fondo); min-height: 70vh; display: flex; align-items: center; justify-content: center; padding: 60px 20px;">
    
    <div style="max-width: 500px; width: 100%; background: var(--blanco); padding: 50px 40px; border-radius: 12px; border: 1px solid #e2e8f0; box-shadow: 0 10px 25px rgba(0,0,0,0.05); text-align: center;">
        
        <!-- Ícono de celebración -->
        <div style="font-size: 65px; margin-bottom: 20px;">🎉</div>

        <h3 style="font-size: 28px; color: var(--azul-oscuro); margin-bottom: 15px; font-weight: 800;">¡Felicidades!</h3>
        
        <p style="color: var(--gris-texto); font-size: 16px; margin-bottom: 35px; line-height: 1.6;">
            Ha realizado su cotización con éxito.<br>
            <strong style="color: var(--azul-oscuro);">El trabajador se comunicará con usted en breve.</strong>
        </p>

        <a href="/inicio" class="btn-naranja" style="display: inline-block; padding: 14px 35px; font-size: 16px;">Volver al inicio</a>

    </div>
    
</section>
@endsection