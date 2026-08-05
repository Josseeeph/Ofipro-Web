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
    // Freno de mano para que la página no se recargue sola
    event.preventDefault();

    // Leemos el valor actual de los inputs
    const nombre = document.querySelector("#nombre").value;
    const correo = document.querySelector("#correo").value;

    if (nombre === "") {
        avisoCotizacion.textContent = "Falta tu nombre, por favor complétalo.";
        avisoCotizacion.classList.add("error");
        avisoCotizacion.classList.remove("exito");
    } else if (correo.includes("@") === false) {
        avisoCotizacion.textContent = "Ese correo no parece válido: le falta el @.";
        avisoCotizacion.classList.add("error");
        avisoCotizacion.classList.remove("exito");
    } else {
        avisoCotizacion.textContent = "Cotización recibida con éxito. Nos pondremos en contacto pronto.";
        avisoCotizacion.classList.add("exito");
        avisoCotizacion.classList.remove("error");
    }
}

formularioCotizacion.addEventListener("submit", revisarCotizacion);