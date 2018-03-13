function validar() {
    if (Titulo.value.length == 0) { //comprueba que no esté vacío
        Titulo.focus();
        alert('No se agrego un titulo');
        return false; //devolvemos el foco
    }
    if (Mensaje.value.length == 0) { //comprueba que no esté vacío
        Mensaje.focus();
        alert('No se agrego un texto');
        return false;
    }

    if (photo.value.length == 0) { //comprueba que no esté vacío
        photo.focus();
        alert('No se agrego una foto');
        return false;
    }
    document.getElementById("Form").submit();
}

function validarEditar() {
    if (Titulo.value.length == 0) { //comprueba que no esté vacío
        Titulo.focus();
        alert('No se agrego un titulo');
        return false; //devolvemos el foco
    }
    if (Mensaje.value.length == 0) { //comprueba que no esté vacío
        Mensaje.focus();
        alert('No se agrego un texto');
        return false;
    }
    document.getElementById("Form").submit();
}
//
function Delimitar(Form) {
    var maximo = 135;
    if (Form.Mensaje.value.length >= maximo) //si es mayor a 135
    {
        Form.Mensaje.value = Form.Mensaje.value.substring(0, maximo); //recorto Hasta 135
    } else //si es menor a 135
    {
        Form.quedan.value = maximo - Form.Mensaje.value.length; // el maximo menos los que ya use
    }
}