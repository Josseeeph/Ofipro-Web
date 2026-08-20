// Esperamos a que todo el HTML cargue para evitar errores
document.addEventListener('DOMContentLoaded', function() {
    
    const btnDarkMode = document.getElementById('btn-dark-mode');
    const body = document.body;

    // 1. Revisamos si el usuario ya lo tenía activado antes
    if (localStorage.getItem('dark-mode') === 'activo') {
        body.classList.add('dark-mode');
        btnDarkMode.textContent = 'Modo Claro';
    }

    // 2. Evento al hacer clic
    if (btnDarkMode) {
        btnDarkMode.addEventListener('click', function(e) {
            e.preventDefault(); 
            
            body.classList.toggle('dark-mode'); 

            // 3. Guardamos la preferencia
            if (body.classList.contains('dark-mode')) {
                localStorage.setItem('dark-mode', 'activo');
                btnDarkMode.textContent = 'Modo Claro';
            } else {
                localStorage.setItem('dark-mode', 'inactivo');
                btnDarkMode.textContent = 'Modo Oscuro';
            }
        });
    }
});