<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Ejercicio 6</title>
</head>
<body>
    <?php
        $numero = $_GET['numero'];
        for ($i = 0; $i <= $numero; $i++){
            $suma = $suma + $i;
        }
        echo "El resultado de la suma acumulativa de $numero es $suma";
    ?>
</body>
</html>