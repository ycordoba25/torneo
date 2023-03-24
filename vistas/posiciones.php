
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
    <div class="tabla-posiciones">
        <h1 class="titulo-tabla">TORNEO CANCHA</h1>
        <h1 class="subtitulo">BELEN</h1>

        <H2 class="texto-posiciones">TABLA DE POSICIONES</H2>
    </div>
    <div class="tabla">
        <table class="tabla-posiciones">
            <thead>
                <tr>
                    <th>Posición</th>
                    <th>Equipo</th>
                    <th>PJ</th>
                    <th>PG</th>
                    <th>PE</th>
                    <th>PP</th>
                    <th>GF</th>
                    <th>GC</th>
                    <th>GD</th>
                    <th>Puntos</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Cordobra f.c</td>
                    <td>5</td>
                    <td>5</td>
                    <td>0</td>
                    <td>0</td>
                    <td>25</td>
                    <td>2</td>
                    <td>+23</td>
                    <td>15</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Seleccion Nidia</td>
                    <td>3</td>
                    <td>3</td>
                    <td>0</td>
                    <td>0</td>
                    <td>15</td>
                    <td>4</td>
                    <td>+11</td>
                    <td>9</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Cundinamarca</td>
                    <td>4</td>
                    <td>3</td>
                    <td>0</td>
                    <td>1</td>
                    <td>15</td>
                    <td>6</td>
                    <td>+9</td>
                    <td>9</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Gaitan f.c</td>
                    <td>4</td>
                    <td>3</td>
                    <td>0</td>
                    <td>1</td>
                    <td>8</td>
                    <td>4</td>
                    <td>+4</td>
                    <td>9</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>La Cueva F.C</td>
                    <td>4</td>
                    <td>2</td>
                    <td>1</td>
                    <td>1</td>
                    <td>7</td>
                    <td>10</td>
                    <td>-3</td>
                    <td>7</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Villas</td>
                    <td>4</td>
                    <td>1</td>
                    <td>2</td>
                    <td>1</td>
                    <td>5</td>
                    <td>6</td>
                    <td>-1</td>
                    <td>5</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Slayer F.C</td>
                    <td>4</td>
                    <td>1</td>
                    <td>2</td>
                    <td>1</td>
                    <td>7</td>
                    <td>10</td>
                    <td>-3</td>
                    <td>5</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>La 22 F.C</td>
                    <td>5</td>
                    <td>1</td>
                    <td>2</td>
                    <td>2</td>
                    <td>6</td>
                    <td>11</td>
                    <td>-5</td>
                    <td>5</td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>NAIKER MODAS</td>
                    <td>4</td>
                    <td>1</td>
                    <td>1</td>
                    <td>2</td>
                    <td>4</td>
                    <td>11</td>
                    <td>-7</td>
                    <td>4</td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>Combo de Gio</td>
                    <td>3</td>
                    <td>1</td>
                    <td>0</td>
                    <td>2</td>
                    <td>4</td>
                    <td>7</td>
                    <td>-3</td>
                    <td>3</td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>Corsaje</td>
                    <td>10</td>
                    <td>0</td>
                    <td>0</td>
                    <td>10</td>
                    <td>0</td>
                    <td>30</td>
                    <td>-30</td>
                    <td>0</td>
                </tr>
              

                <!-- agregar más filas según sea necesario -->
            </tbody>
        </table>

    </div>

    </main>


    <footer>
        <?php
        require_once('../layout/footer.php');
        ?>
    </footer>


</body>

</html>
