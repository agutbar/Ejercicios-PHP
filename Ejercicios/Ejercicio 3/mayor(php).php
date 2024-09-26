<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Ejercicio 3</title>
</head>
<body>
    <?php
        $numero1 = $_GET['numero1'];
        $numero2 = $_GET['numero2'];
        $numero3 = $_GET['numero3'];
        if ($numero1 > $numero2){
            if ($numero1 > $numero3){
                echo "El numero mayor es $numero1";
            } else {
                echo "El numero mayor es $numero3";
            }
        } else {
            if ($numero2 > $numero3){
                echo "El numero mayor es $numero2";
            } else {
                echo "El numero mayor es $numero3";
            }
        }
    ?>
</body>
</html>