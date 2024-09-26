<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Ejercicio 5</title>
</head>
<body>
    <?php
        $edad = $_GET['edad'];
        if ($edad < 0){
            echo "Edad no valida";
        } else {
            if ($edad > 0 && $edad <12){
                echo "Su etapa de la vida es Infante";
            } else {
                if ($edad >= 12 && $edad <= 17){
                    echo "Su etapa de la vida es Adolescente";
                } else {
                    if ($edad >= 18 && $edad <=60){
                        echo "Su etapa de la vida es Adulto";
                    } else {
                        echo "Su etapa de la vida es Anciano";
                    }
                }
            }
        }
    ?>
</body>
</html>