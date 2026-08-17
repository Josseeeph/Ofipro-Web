const botonTema = document.querySelector("#btn-tema");

botonTema.addEventListener("click", function() {
    
    document.body.classList.toggle("oscuro");
    
    if (document.body.classList.contains("oscuro")) {
        botonTema.textContent = "Modo Claro";
    } else {
        botonTema.textContent = "Modo Oscuro";
    }
});


const formularioCotizacion = document.querySelector("#form-cotizacion");
const avisoCotizacion = document.querySelector("#aviso-cotizacion");

function revisarCotizacion(event) {
    const nombre = document.querySelector("#nombre").value;
    const correo = document.querySelector("#correo").value;

    if (nombre === "") {
        event.preventDefault(); 
        avisoCotizacion.textContent = "Falta tu nombre, por favor complétalo.";
        avisoCotizacion.classList.add("error");
        avisoCotizacion.classList.remove("exito");
    } else if (correo.includes("@") === false) {
        event.preventDefault(); 
        avisoCotizacion.textContent = "Ese correo no parece válido: le falta el @.";
        avisoCotizacion.classList.add("error");
        avisoCotizacion.classList.remove("exito");
    } else {
        avisoCotizacion.textContent = "Enviando cotización...";
        avisoCotizacion.classList.add("exito");
        avisoCotizacion.classList.remove("error");
    }
}

formularioCotizacion.addEventListener("submit", revisarCotizacion);