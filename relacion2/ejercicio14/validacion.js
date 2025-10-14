/*
* Validaciones para el formulario del ejercicio 12
* Ángel Barba Fernández
* 14/10/2025
* Versión 1
*/

function marcarError(identificador) {
    document.getElementById(identificador+'Help').style.visibility="visible";
    document.getElementById(identificador).style.borderColor="red";
}

function limpiarError(identificador) {
    document.getElementById(identificador+'Help').style.visibility="hidden";
    document.getElementById(identificador).style.borderColor="#DEE2E6";
}

function validarFormularioLados(){
    var nota = parseInt(document.getElementById('nota').value);

    var correcto = true;

    if (!Number.isInteger(nota) || nota < 0 || nota > 10){
        marcarError('nota');
        correcto = false;
    }

    return correcto;
}

document.getElementById('formulario').addEventListener("submit", function(event){
    if (!validarFormularioLados()) {
        event.preventDefault(); // Evita que se envíe el formulario si la validación es errónea
    }
});

document.getElementById('nota').addEventListener("change", function(){
    limpiarError('nota');
});