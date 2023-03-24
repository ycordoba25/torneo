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
                    <th>Logo</th>
                    <th>Equipo</th>
                    <th>Jugadores</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><img src="../product/img/Logo4.png" alt="Cordobra F.c" style="width:40px;"></td>
                    <td>Cordobra F.c</td>
                    <td><button>ver jugadores</button></td>

                </tr>

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