document.addEventListener("DOMContentLoaded", function(){
    const formulario = document.getElementById("formViaje");

    if(formulario){
        formulario.addEventListener("submit", function(evento){
            let errores = [];

            const destino = document.getElementById("destino").value.trim();
            const pais = document.getElementById("pais").value.trim();
            const continente = document.getElementById("continente").value.trim();

            const fecha_inicio = document.getElementById("fecha_inicio").value.trim();
            const fecha_fin = document.getElementById("fecha_fin").value.trim();
            const duracion = document.getElementById("duracion").value.trim();

            const precio = document.getElementById("precio").value.trim();
            const imagen = document.getElementById("imagen").value.trim();
            const frase = document.getElementById("frase").value.trim();

            const descripcion = document.getElementById("descripcion").value.trim();
            const alojamiento = document.getElementById("alojamiento").value.trim();

            if(estaVacio(destino)){
                errores.push("Debe introducir un destino.");
            }

            if(estaVacio(pais)){
                errores.push("Debes introducir un país para el destino.");
            }

            if(estaVacio(continente)){
                errores.push("Debes introducir un continente para el destino.");
            }

            if(!fechaValida(fecha_inicio)){
                errores.push("La fecha de inicio debe tener el formato AAAA-MM-DD.");
            }

            if(!fechaValida(fecha_fin)){
                errores.push("La fecha de fin debe tener el formato AAAA-MM-DD.");
            }

            if(fechaValida(fecha_inicio) && fechaValida(fecha_fin) && fecha_inicio >= fecha_fin){
                errores.push("La fecha de fin debe ser posterior a la fecha de inicio.");
            }

            if(!numeroPositivo(duracion)){
                errores.push("Debes introducir una duración mayor a 0.");
            }

            if(!numeroPositivo(precio)){
                errores.push("Debes introducir un precio válido.");
            }

            if(estaVacio(imagen) || !imagenValida(imagen)){
                errores.push("La imagen debe terminar .jpg.");
            }

            if(estaVacio(frase)){
                errores.push("Debes introducir una frase descriptiva del destino.");
            }

            if(estaVacio(descripcion)){
                errores.push("Debes introducir una descripción para el destino.");
            }

            if(estaVacio(alojamiento)){
                errores.push("Debes introducir un alojamiento para el destino.");
            }

            mostrarErrores(evento, errores);

        });
    }
});