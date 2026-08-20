@extends('layouts.base')

@section('contenido')
    <!-- SECCIÓN HERO CON IMAGEN DE FONDO (CAPTURA 1) -->
    <section class="hero" style="background-image: url('{{ asset('portada.jpg') }}');">        
        <div class="hero-text">
            <h2>Encuentra al <br><span>profesional</span><br>ideal para tu proyecto</h2>
            <p>OFIPRO es la plataforma donde trabajadores independientes de distintos oficios muestran su trabajo mediante galerías fotográficas y calificaciones de clientes reales.</p>
            
            <div class="hero-buttons">
                <a href="#buscar" class="btn-naranja">Buscar profesionales</a>
            </div>
        </div>
    </section>

    <!-- SECCIÓN PROFESIONALES DESTACADOS (CAPTURA 2) -->
    <section class="profesionales-section" id="profesionales">
        <div class="section-header">
            <h3>Profesionales destacados</h3>
        </div>

        <div class="profesionales-grid">
            <!-- Tarjeta Juan Carlos -->
            <div class="profesional-card">
                <div class="prof-info">
                    <h4>Juan Carlos R.</h4>
                    <p class="profesion">Electricista</p>
                    <p class="codigo-trabajador">Codigo Trabajador: 462</p>
                    
                    <div class="prof-stats">
                        <span>⭐ <strong>4.9</strong> (128)</span>
                        <span>📍 Cochabamba</span>
                    </div>
                                        
                    <div class="prof-botones">
                        <a href="#" class="btn-perfil">Ver perfil</a>
                        <a href="/cotizar?codigo=462" class="btn-perfil" style="background-color: var(--naranja);">Cotizar</a>                    </div>
                </div>
            </div>

            <!-- Tarjeta Miguel -->
            <div class="profesional-card">
                <div class="prof-info">
                    <h4>Miguel A.</h4>
                    <p class="profesion">Plomero</p>
                    <p class="codigo-trabajador">Codigo Trabajador: 382</p>
                    
                    <div class="prof-stats">
                        <span>⭐ <strong>4.8</strong> (96)</span>
                        <span>📍 Cochabamba</span>
                    </div>
                    
                    <div class="prof-botones">
                        <a href="#" class="btn-perfil">Ver perfil</a>
                        <a href="/cotizar?codigo=382" class="btn-perfil" style="background-color: var(--naranja);">Cotizar</a>                    </div>
                </div>
            </div>

            <!-- Tarjeta Luis Fernando -->
            <div class="profesional-card">
                <div class="prof-info">
                    <h4>Luis Fernando</h4>
                    <p class="profesion">Pintor</p>
                    <p class="codigo-trabajador">Codigo Trabajador: 135</p>
                    
                    <div class="prof-stats">
                        <span>⭐ <strong>4.9</strong> (74)</span>
                        <span>📍 Cochabamba</span>
                    </div>
                    
                    <div class="prof-botones">
                        <a href="#" class="btn-perfil">Ver perfil</a>
                        <a href="/cotizar?codigo=135" class="btn-perfil" style="background-color: var(--naranja);">Cotizar</a>                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- SECCIÓN CATEGORÍAS POPULARES (CAPTURA 2) -->
    <section class="categorias-section" id="buscar">
        <div class="section-header">
            <h3>Categorías populares</h3>
        </div>

        <div class="categorias-grid">
            <a href="#" class="categoria-card">
                <div class="icon-wrapper">⚡</div>
                <h4>Electricidad</h4>
                <p>Instalaciones y reparaciones</p>
            </a>

            <a href="#" class="categoria-card">
                <div class="icon-wrapper">🚰</div>
                <h4>Plomería</h4>
                <p>Fugas, grifería, desagües</p>
            </a>

            <a href="#" class="categoria-card">
                <div class="icon-wrapper">🖌️</div>
                <h4>Pintura</h4>
                <p>Interiores, exteriores</p>
            </a>

            <a href="#" class="categoria-card">
                <div class="icon-wrapper">🪚</div>
                <h4>Carpintería</h4>
                <p>Muebles, puertas, reparaciones</p>
            </a>

            <a href="#" class="categoria-card">
                <div class="icon-wrapper">🧱</div>
                <h4>Albañilería</h4>
                <p>Construcción, reformas</p>
            </a>

            <a href="#" class="categoria-card">
                <div class="icon-wrapper">🔍</div>
                <h4>Y más...</h4>
                <p>Jardinería, cerrajería, etc.</p>
            </a>
        </div>
    </section>
    
@endsection