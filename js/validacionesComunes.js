function estaVacio(valor){
    return valor.trim() == "";
}

function numeroPositivo(valor){
    return valor != "" && !isNaN(valor) && Number(valor) > 0;
}

function fechaValida(fecha){
    if(fecha == "") return false;

    const partes = fecha.split("-");
    if(partes.length != 3) return false;

    const anio = Number(partes[0]);
    const mes = Number(partes[1]);
    const dia = Number(partes[2]);

    if(isNaN(anio) || isNaN(mes) || isNaN(dia)) return false;

    if(mes < 1 || mes > 12) return false;
    if(dia < 1 || dia > 31) return false;

    const fechaComprobada = new Date(anio, mes - 1, dia);

    return fechaComprobada.getFullYear() == anio 
            && fechaComprobada.getMonth() == mes - 1 
            && fechaComprobada.getDate() == dia;
}

function correoValido(correo){
    const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return regex.test(correo);
}

function telefonoValido(telefono){
    const regex = /^\d{9}$/;
    return regex.test(telefono);
}

function imagenValida(imagen){
    imagen = imagen.toLowerCase();
    return imagen.endsWith(".jpg");
}

function mostrarErrores(evento, errores){
    if(errores.length > 0){
        evento.preventDefault();
        alert(errores.join("\n"));
    }
}