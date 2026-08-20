<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OFIPRO - Encuentra al profesional ideal</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>

    <!-- CABECERA EXACTA A LA CAPTURA 1 -->
    <header>
        <div class="logo-container">
            <h1>OFI<span>PRO</span></h1>
        </div>
        
        <nav>
            <ul>
                <li><a href="/inicio">Inicio</a></li>
                <li><a href="/inicio#profesionales">Profesionales destacados</a></li>
                <li><a href="/inicio#buscar">Categorias Populares</a></li>
                <li><a href="/cotizaciones">Cotizaciones realizadas</a></li>
                <li><a href="#" id="btn-dark-mode" class="btn-naranja">Modo Oscuro</a></li>            </ul>
        </nav>
    </header>

    <!-- EL CONTENIDO DINÁMICO VA AQUÍ -->
    <main>
        @yield('contenido')
    </main>

    <!-- FOOTER EXACTO A LA CAPTURA 3 -->
    <footer>
        <div class="footer-col" style="max-width: 300px;">
            <h1 style="color: white; margin-bottom: 10px; font-size: 24px;">OFIPRO</h1>
            <p style="color: #cbd5e1; margin-bottom: 20px;">Conectamos a profesionales de oficios<br>con clientes que necesitan trabajos<br>garantizados.</p>
        </div>

        <div class="footer-col">
            <h4>Contacto</h4>
            <a href="#">info@ofipro.com</a>
            <a href="#">+591 700 00000</a>
            <a href="#">Cochabamba, Bolivia</a>
        </div>
    </footer>
    
    <div style="background-color: #0f172a; text-align: center; padding-bottom: 20px; color: #64748b; font-size: 12px;">
        &copy; 2026 OFIPRO. Todos los derechos reservados.
    </div>

    <script src="{{ asset('script.js') }}"></script>

</body>
</html>