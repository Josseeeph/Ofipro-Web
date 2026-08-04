const botonConfirmar = document.querySelector("#btn-confirmar");
const mensaje = document.querySelector("#mensaje");

function confirmarTurno() {
    mensaje.textContent = "Turno recibido - te atiende Montes Fabrica Jose";
    
    mensaje.classList.remove("oculto");
}

botonConfirmar.addEventListener("click", confirmarTurno);