/*
* Validaciones para el formulario del ejercicio 16
* Ángel Barba Fernández
* 03/11/2025
* Versión 1
*/

function marcarError(identificador) {
    document.getElementById(identificador + 'Help').style.visibility = "visible";
    document.getElementById(identificador).style.borderColor = "red";
}

function limpiarError(identificador) {
    document.getElementById(identificador + 'Help').style.visibility = "hidden";
    document.getElementById(identificador).style.borderColor = "#DEE2E6";
}

function validarFormularioEj16() {
    var numero = parseInt(document.getElementById('numero').value);
    var accionPrimo = document.getElementById('accionPrimo').checked;
    var accionDivisores = document.getElementById('accionDivisores').checked;

    var correcto = true;

    if (!Number.isInteger(numero) || numero <= 0) {
        marcarError('numero');
        correcto = false;
    }

    if (!accionPrimo && !accionDivisores) {
        document.getElementById('accionHelp').style.visibility = "visible";
        correcto = false;
    }

    return correcto;
}

document.addEventListener("DOMContentLoaded", function () {
    document.getElementById('formulario').addEventListener("submit", function (event) {
        if (!validarFormularioEj16()) {
            event.preventDefault();
        }
    });

    document.getElementById('numero').addEventListener("change", function () {
        limpiarError('numero');
    });

    document.getElementById('accionPrimo').addEventListener("change", function () {
        document.getElementById('accionHelp').style.visibility = "hidden";
    });

    document.getElementById('accionDivisores').addEventListener("change", function () {
        document.getElementById('accionHelp').style.visibility = "hidden";
    });
});