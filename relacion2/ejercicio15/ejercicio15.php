<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Relación 1 - Ejercicio 13</title>
        <link rel="shortcut icon" href="./playamar.png" type="image/x-icon">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        <link rel="stylesheet" href="estilo.css">
    </head>
    <style>
        #wrapper {
            height: 100vh;
        }
        .form-text {
            visibility: hidden;
        }
    </style>
    <body>
        <div id="formulario" class="d-flex justify-content-center align-items-center">
            <form class="shadow p-3 rounded" action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
                <h2>Relación 2 - Ejercicio 15</h2>
                <div>
                    <label class="form-label" for="numero">Introduce un número:</label>
                    <input class="form-control" type="number" name="numero" id="numero">
                    <div id="numeroHelp" class="form-text text-danger">El número debe ser entero, numérico y no estar vacío.</div>
                </div>
                <input class="form-control my-3" type="submit" value="Enviar">
                <?php
                $numero = $_GET['numero'];
                $factorial = 1;

                if ($numero > 0) {
                    for ($i = $numero; $i > 0; $i--){
                        $factorial *= $i;
                    }
                    echo "El factorial de $numero es: $factorial";
                } else {
                    echo "El factorial de $numero no está definido, debe de ser un número natural.";
                }
                ?>
            </form>
        </div>

        <script>
            /*
            * Validaciones para el formulario del ejercicio 12
            * Ángel Barba Fernández
            * 24/10/2025
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

            function validarFormularioFactorial(){
                // Debe ser entero, numérico y no estar vacío
                var numero = parseInt(document.getElementById('numero').value);

                var correcto = true;

                if (!Number.isInteger(numero) || numero < 0){
                    marcarError('numero');
                    correcto = false;
                }
                return correcto;
            }

            document.getElementById('formulario').addEventListener("submit", function(event){
                if (!validarFormularioFactorial()) {
                    event.preventDefault(); // Evita que se envíe el formulario si la validación es errónea
                }
            });

            document.getElementById('numero').addEventListener("change", function(){
                limpiarError('numero');
            });
        </script>
    </body>
</html>