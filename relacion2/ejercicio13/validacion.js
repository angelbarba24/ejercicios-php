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
    var lado1 = parseInt(document.getElementById('lado1').value);
    var lado2 = parseInt(document.getElementById('lado2').value);
    var lado3 = parseInt(document.getElementById('lado3').value);

    var correcto = true;

    if (!Number.isInteger(lado1) || lado1 < 0){
        marcarError('lado1');
        correcto = false;
    }

    if (!Number.isInteger(lado2) || lado2 < 0){
        marcarError('lado2');
        correcto = false;
    }

    if (!Number.isInteger(lado3) || lado3 < 0){
        marcarError('lado3');
        correcto = false;
    }

    return correcto;
}

document.getElementById('formulario').addEventListener("submit", function(event){
    if (!validarFormularioLados()) {
        event.preventDefault(); // Evita que se envíe el formulario si la validación es errónea
    }
});

document.getElementById('lado1').addEventListener("change", function(){
    limpiarError('lado1');
});

document.getElementById('lado2').addEventListener("change", function(){
    limpiarError('lado2');
});

document.getElementById('lado3').addEventListener("change", function(){
    limpiarError('lado3');
});