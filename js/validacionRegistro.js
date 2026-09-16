document.addEventListener("DOMContentLoaded", function(){
    const formulario = document.getElementById("formularioRegistro");

    if(formulario){
        formulario.addEventListener("submit", function(evento){
            let errores = [];

            const nombre = document.getElementById("nombre").value.trim();
            const nacimiento = document.getElementById("nacimiento").value.trim();

            const usuario = document.getElementById("usuario").value.trim();
            const telefono = document.getElementById("telefono").value.trim();
            const correo = document.getElementById("correo").value.trim();
            const contrasena = document.getElementById("contrasena").value.trim();
            const confirmarContrasena = document.getElementById("confirmar-contrasena").value.trim();

            if(estaVacio(nombre)){
                errores.push("Debes introducir un nombre.");
            }
            
            if(!fechaValida(nacimiento)){
                errores.push("Debes introducir una fecha de nacimiento válida con formato AAAA-MM-DD.");
            }

            if(estaVacio(usuario)){
                errores.push("Debes introducir un nombre de usuario.");
            }

            if(estaVacio(telefono) || !telefonoValido(telefono)){
                errores.push("Debes introducir un teléfono de 9 dígitos.");
            }

            if(estaVacio(correo) || !correoValido(correo)){
                errores.push("Debes introducir un correo con formato válido.");
            }

            if(estaVacio(contrasena)){
                errores.push("Debes introducir una contraseña.");
            }

            if(estaVacio(confirmarContrasena)) {
                errores.push("Debes confirmar la contraseña.");
            }

            if(contrasena != "" && confirmarContrasena != "" && contrasena != confirmarContrasena){
                errores.push("Las contraseñas no coinciden.");
            }

            mostrarErrores(evento, errores);

        });
    }
});