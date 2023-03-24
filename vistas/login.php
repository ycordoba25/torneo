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
    <main class="contenido-login">
        <form class="login-form">
            <h1>INICIAR SESION </h1>
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
            <button class="button-login" type="submit">Login</button>
        </form>

    </main>


    <footer>
        <?php
        require_once('../layout/footer.php');
        ?>
    </footer>


</body>

</html>