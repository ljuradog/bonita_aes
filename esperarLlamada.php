<?php
    session_start();
    if (isset($_SESSION["apiToken"])) {
        
    }
?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
    <head>
        <meta name="viewport" charset=UTF-8 http-equiv="Content-Type">
        <title>AltaGama - Decameron2</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    
    <body>
        <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
            <img class="my-0 mr-md-auto" src="./Assets/Decameron-logo.png" alt="" width="auto" height="50">
            <a class="btn btn-outline-primary" href="#">Cerrar Sesion</a>
        </div>

        <div class="container">
            <div class="card-deck col col-lg-4 text-center">
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 id="usuarioLogueado" class="my-0 font-weight-normal">Leonardo</h4>
                    </div>
                    <div class="card-body">
                        Activo
                        <button id="crearInstancia" type="button" class="btn btn-lg btn-block btn-outline-primary">Asignar Llamada</button>
                    </div>
                </div>
            </div>
        
            <footer class="pt-4 border-top">
                <div class="row">
                <div class="col-12 col-md">
                    <small class="d-block mb-3 text-muted">© 2019</small>
                </div>
            </footer>
        </div>

        <script src="./Assets/jquery-3.3.1.min.js"></script>
        <script src="./Components/common.js"></script>
        <script src="./Components/esperarLlamada.js"></script>
    </body>
</html>

