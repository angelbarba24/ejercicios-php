<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Relación 1 - Ejercicio 3</title>
        <link rel="shortcut icon" href="./playamar.png" type="image/x-icon">
    </head>
    <body>
        <h1>Información del Servidor ($_SERVER)</h1>
        <ul>
            <li><strong>DOCUMENT_ROOT:</strong> <?= $_SERVER['DOCUMENT_ROOT'] ?></li>
            <li><strong>PHP_SELF:</strong> <?= $_SERVER['PHP_SELF'] ?></li>
            <li><strong>SERVER_NAME:</strong> <?= $_SERVER['SERVER_NAME'] ?></li>
            <li><strong>SERVER_SOFTWARE:</strong> <?= $_SERVER['SERVER_SOFTWARE'] ?></li>
            <li><strong>SERVER_PROTOCOL:</strong> <?= $_SERVER['SERVER_PROTOCOL'] ?></li>
            <li><strong>HTTP_HOST:</strong> <?= $_SERVER['HTTP_HOST'] ?></li>
            <li><strong>HTTP_USER_AGENT:</strong> <?= $_SERVER['HTTP_USER_AGENT'] ?></li>
            <li><strong>REMOTE_ADDR:</strong> <?= $_SERVER['REMOTE_ADDR'] ?></li>
            <li><strong>REMOTE_PORT:</strong> <?= $_SERVER['REMOTE_PORT'] ?></li>
            <li><strong>SCRIPT_FILENAME:</strong> <?= $_SERVER['SCRIPT_FILENAME'] ?></li>
            <li><strong>REQUEST_URI:</strong> <?= $_SERVER['REQUEST_URI'] ?></li>
        </ul> 

        <h2>var_dump(\$_SERVER)</h2>
        <p><?php var_dump($_SERVER); ?></p>

        <h2>print_r(\$_SERVER)</h2>
        <p><?php print_r($_SERVER); ?></p>
    </body>
</html>