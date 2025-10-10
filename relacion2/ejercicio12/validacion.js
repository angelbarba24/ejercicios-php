/*
* Validaciones para el formulario del ejercicio 12
* Ángel Barba Fernández
* 10/10/2025
* Versión 1
*/

function validarFormularioNotas(){
    // Deben ser enteros, numéricos, entre 1 y 10 y no estar vacíos
    var inicial = parseInt(document.getElementById('Inicial').value);
    var primera = parseInt(document.getElementById('Primera').value);
    var segunda = parseInt(document.getElementById('Segunda').value);
    var tercera = parseInt(document.getElementById('Tercera').value);
    var nombre = document.getElementById('nombre').value; // No puede estar vacío
    var email = document.getElementById('email').value; // Debe tener el formato email

    var correcto = true;

    if (!Number.isInteger(inicial) || inicial < 0 || inicial > 10){
        alert("La nota inicial debe ser un número entero entre 1 y 10.")
        correcto = false;
    }

    if (!Number.isInteger(primera) || primera < 0 || primera > 10){
        alert("La primera nota debe ser un número entero entre 1 y 10.")
        correcto = false;
    }

    if (!Number.isInteger(segunda) || segunda < 0 || segunda > 10){
        alert("La segunda nota debe ser un número entero entre 1 y 10.")
        correcto = false;
    }

    if (!Number.isInteger(tercera) || tercera < 0 || tercera > 10){
        alert("La tercera nota debe ser un número entero entre 1 y 10.")
        correcto = false;
    }

    if (nombre.trim() == "") {
        alert("El nombre es obligatorio.");
        correcto = false;
    }

    return correcto;
}