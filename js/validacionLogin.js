document.addEventListener("DOMContentLoaded", function(){
    const formulario = document.getElementById("formularioLogin");

    if(formulario){
        formulario.addEventListener("submit", function(evento){
            let errores = [];

            const usuario = document.getElementById("usuarioLogin").value.trim();
            const contrasena = document.getElementById("contrasenaLogin").value.trim();

            if(estaVacio(usuario)){
                errores.push("Debes introducir un usuario.");
            }

            if(estaVacio(contrasena)){
                errores.push("Debes introducir una contraseña.");
            }

            mostrarErrores(evento, errores);

        });
    }
});