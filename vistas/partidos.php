<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../product/css/estilos.css">
    <title>Login</title>
</head>

<body background="../product/img/fondotorneo.png">
    <HEADer>
        <?php
        require_once('../layout/header.php');
        ?>
    </HEADer>
    <div class="tabla">
        <table class="tabla-posiciones">
            <thead>
                <tr>
                    <th>Equipo Local</th>
                    <th>Equipo Visitante</th>
                    <th>Fecha</th>
                    <th>Hora</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Equipo A</td>
                    <td>Equipo B</td>
                    <td>15/04/2023</td>
                    <td>11am</td>
                </tr>
                <tr>
                    <td>Equipo C</td>
                    <td>Equipo D</td>
                    <td>17/04/2023</td>
                    <td>2pm</td>
                </tr>
                <!-- Agrega más filas según sea necesario -->
            </tbody>
        </table>



    </div>

    <footer>
        <?php
        require_once('../layout/footer.php');
        ?>
    </footer>


</body>

</html>