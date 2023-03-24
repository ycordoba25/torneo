<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../product/css/estilos.css">
    <title>Torneo</title>
</head>

<body background="../product/img/fondotorneo.png">
    <HEADer>
        <?php
        require_once('../layout/header.php');
        ?>
    </HEADer>
    <main class="contenido">
        <?php

        require_once('../vistas/equipos.php');
        ?>

    </main>


    <footer>
        <?php
        require_once('../layout/footer.php');
        ?>
    </footer>


</body>

</html>