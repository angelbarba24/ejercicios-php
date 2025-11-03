/*
* Validaciones para el formulario del ejercicio 17
* Ángel Barba Fernández
* 03/11/2025
* Versión 1
*/

function marcarError(id) {
    document.getElementById(id + 'Help').style.visibility = "visible";
    document.getElementById(id).style.borderColor = "red";
}

function limpiarError(id) {
    document.getElementById(id + 'Help').style.visibility = "hidden";
    document.getElementById(id).style.borderColor = "#DEE2E6";
}

function validarFormulario17() {
    const dividendo = parseInt(document.getElementById('dividendo').value);
    const divisor = parseInt(document.getElementById('divisor').value);
    const cociente = document.getElementById('cociente').checked;
    const resto = document.getElementById('resto').checked;

    let valido = true;

    if (!Number.isInteger(dividendo) || dividendo < 0) {
        marcarError('dividendo');
        valido = false;
    }

    if (!Number.isInteger(divisor) || divisor <= 0) {
        marcarError('divisor');
        valido = false;
    }

    if (!cociente && !resto) {
        document.getElementById('operacionHelp').style.visibility = "visible";
        valido = false;
    }

    return valido;
}

document.addEventListener("DOMContentLoaded", function () {
    document.getElementById('formulario').addEventListener("submit", function (event) {
        if (!validarFormulario17()) {
            event.preventDefault();
        }
    });

    document.getElementById('dividendo').addEventListener("change", function () {
        limpiarError('dividendo');
    });

    document.getElementById('divisor').addEventListener("change", function () {
        limpiarError('divisor');
    });

    document.getElementById('cociente').addEventListener("change", function () {
        document.getElementById('operacionHelp').style.visibility = "hidden";
    });

    document.getElementById('resto').addEventListener("change", function () {
        document.getElementById('operacionHelp').style.visibility = "hidden";
    });
});
