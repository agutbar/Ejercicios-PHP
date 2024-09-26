<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Ejercicio 4</title>
</head>
<body>
    <?php
        $numero = $_GET['numero'];
        switch ($numero) {
            case 1:
                echo "El dia asignado es Lunes";
                break;
            case 2:
                echo "El dia asignado es Martes";
                break;
            case 3:
                echo "El dia asignado es Miércoles";
                break;
            case 4:
                echo "El dia asignado es Jueves";
                break;
            case 5:
                echo "El dia asignado es Viernes";
                break;
            case 6:
                echo "El dia asignado es Sábado";
                break;
            case 7:
                echo "El dia asignado es Domingo";
                break;
            default:
                echo "Numero incorrecto, no hay dia asociado";
                break;
        }
    ?>
</body>
</html>