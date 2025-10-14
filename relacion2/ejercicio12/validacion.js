/*
* Validaciones para el formulario del ejercicio 12
* Ángel Barba Fernández
* 10/10/2025
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

function validarFormularioNotas(){
    // Deben ser enteros, numéricos, entre 0 y 10 y no estar vacíos
    var inicial = parseInt(document.getElementById('inicial').value);
    var primera = parseInt(document.getElementById('primera').value);
    var segunda = parseInt(document.getElementById('segunda').value);
    var tercera = parseInt(document.getElementById('tercera').value);
    var nombre = document.getElementById('nombre').value; // No puede estar vacío
    var email = document.getElementById('email').value; // Debe tener el formato email

    var correcto = true;

    if (nombre.trim() == "") {
        marcarError('nombre');
        correcto = false;
    }

    if (!Number.isInteger(inicial) || inicial < 0 || inicial > 10){
        marcarError('inicial');
        correcto = false;
    }

    if (!Number.isInteger(primera) || primera < 0 || primera > 10){
        marcarError('primera');
        correcto = false;
    }

    if (!Number.isInteger(segunda) || segunda < 0 || segunda > 10){
        marcarError('segunda');
        correcto = false;
    }

    if (!Number.isInteger(tercera) || tercera < 0 || tercera > 10){;
        marcarError('tercera');
        correcto = false;
    }

    return correcto;
}

document.getElementById('formulario').addEventListener("submit", function(event){
    if (!validarFormularioNotas()) {
        event.preventDefault(); // Evita que se envíe el formulario si la validación es errónea
    }
});

document.getElementById('nombre').addEventListener("change", function(){
    limpiarError('nombre');
});

document.getElementById('inicial').addEventListener("change", function(){
    limpiarError('inicial');
});

document.getElementById('primera').addEventListener("change", function(){
    limpiarError('primera');
});

document.getElementById('segunda').addEventListener("change", function(){
    limpiarError('segunda');
});

document.getElementById('tercera').addEventListener("change", function(){
    limpiarError('tercera');
});