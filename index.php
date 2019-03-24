<!DOCTYPE html>
<html lang="es" dir="ltr">
    <head>
        <meta name="viewport" charset=UTF-8 http-equiv="Content-Type">
        <title>AltaGama - Decameron2</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body class="text-center">
        <div style="width: 100%; max-width: 330px; padding: 15px; margin: auto;">
            <form id="login" class="form-signin" @submit.prevent="conectarAPIBonita">
                <img class="mb-4" src="./Assets/Decameron-logo.png" alt="" width="auto" height="90">
                <p class="mt-3 font-weight-normal">Por favor iniciar sesion</p>
                <label for="usuario" class="sr-only">Usuario</label>
                <input type="text" id="usuario" class="mb-3 form-control" placeholder="Usuario" required="" autofocus="">
                <label for="password" class="sr-only">Password</label>
                <input type="password" id="password" class="form-control" placeholder="Password" required="">
                
                <button class="mt-3 btn btn-lg btn-primary btn-block" type="submit">Iniciar Sesion</button>
                <p class="mt-5 mb-3 text-muted">© AltaGama</p>
            </form>
        </div>

        <script src="./Assets/jquery-3.3.1.min.js"></script>
        <script src="./Components/common.js"></script>
        <script src="./Components/login.js"></script>
    </body>
</html>