document.addEventListener("DOMContentLoaded", function(){
    if(typeof viajesCarrusel === "undefined" || viajesCarrusel.length == 0){
        return;
    }

    let posicionActual = 0;

    const imagen = document.getElementById("imagenCarrusel");
    const destino = document.getElementById("destinoCarrusel");
    const frase = document.getElementById("fraseCarrusel");

    const flechaIzq = document.getElementById("flechaIzq");
    const flechaDer = document.getElementById("flechaDer");

    function mostrarViaje(){
        const viaje = viajesCarrusel[posicionActual];
        imagen.src = "imagenes/" + viaje.imagen;
        imagen.alt = viaje.destino;
        destino.textContent = viaje.destino;
        frase.textContent = viaje.frase;
    }

    flechaDer.addEventListener("click", function() {
        posicionActual++;

        if (posicionActual >= viajesCarrusel.length) {
            posicionActual = 0;
        }

        mostrarViaje();
    });

    flechaIzq.addEventListener("click", function() {
        posicionActual--;

        if (posicionActual < 0) {
            posicionActual = viajesCarrusel.length - 1;
        }

        mostrarViaje();
    });

    mostrarViaje();

});