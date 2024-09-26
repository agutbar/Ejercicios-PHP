<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Ejercicio 1</title>
</head>
<body>
    <?php
        $nombre = $_GET['nombre'];
        $apellido = $_GET['apellido'];
        echo "¡Hola $nombre $apellido!";
    ?>
</body>
</html>