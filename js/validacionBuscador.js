document.addEventListener("DOMContentLoaded", function(){
    const formulario = document.getElementById("formularioBuscador");

    if(formulario){
        formulario.addEventListener("submit", function(evento){
            let errores = [];

            const destino = document.getElementById("destinoBuscador").value.trim();
            const fecha = document.getElementById("fechaBuscador").value.trim();

            if(estaVacio(destino) && estaVacio(fecha)){
                errores.push("Debes introducir un destino o una fecha para realizar la búsqueda.");
            }

            if(!estaVacio(fecha) && !fechaValida(fecha)){
                errores.push("La fecha debe tener el formato AAAA-MM-DD.");
            }

            mostrarErrores(evento, errores);
        });
    }
});