<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Ejercicio 2</title>
</head>
<body>
    <?php
        $distancia = $_GET['distancia'];
        $velocidad = $_GET['velocidad'];
        $tiempo = $distancia / $velocidad;
        echo "El tiempo estimado en horas es de $tiempo";
    ?>
</body>
</html>