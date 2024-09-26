<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Ejercicio 7</title>
</head>
<body>
    <?php
        $numero = $_GET['numero'];
        if ($numero >= 1 && $numero <=10){
            for ($i = 1; $i <= 10; $i++){
                $cociente = $numero * $i;
                echo "$numero x $i = $cociente // ";
            }
        } else {
            echo "No ha introducido un número válido";
        }
    ?>
</body>
</html>