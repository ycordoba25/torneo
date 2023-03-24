<link rel="stylesheet" href="../product/css/estilos.css">

<body background="../product/img/fondotorneo.png">
    <HEADer>
        <?php
        require_once('../layout/header.php');
        ?>
    </HEADer>
    <main>
        <div class="tabla-posiciones">
            <h1 class="titulo-tabla">TORNEO CANCHA</h1>
            <h1 class="subtitulo">BELEN</h1>

            <H2 class="texto-posiciones">TABLA DE GOLEADORES</H2>
        </div>
        <div class="tabla">
            <table class="tabla-posiciones">
                <thead>
                    <tr>
                        <th>Posición</th>
                        <th>Jugador</th>
                        <th>Equipo</th>
                        <th>Goles</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Lionel Messi</td>
                        <td>FC Barcelona</td>
                        <td>25</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Cristiano Ronaldo</td>
                        <td>Manchester United</td>
                        <td>21</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Robert Lewandowski</td>
                        <td>Bayern Munich</td>
                        <td>20</td>
                    </tr>
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