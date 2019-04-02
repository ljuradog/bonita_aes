<?php
    session_start();
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
            <div id="EnEspera">
                Consulta de la información en proceso...
            </div>
            <div id="datosProceso" class="row" style="display: none">
                <div class="col col-lg-12">
                    <div class="card mb-4 shadow-sm">
                        <div class="card-header">
                            <h4 class="my-0 font-weight-normal"><span id="clienteNombre"></span> <span id="clienteApellido"></span> <span id="idCliente" class="small text-muted"> ... </span></h4>
                            Telefono: <span id="clienteTelefono"></span><br>
                            Email: <span id="clienteEmail"></span><br>
                            <span id="clienteTipo" class="badge badge-success"> </span>
                        </div>

                        <div class="card-body">
                            <div class="card-deck mb-3 text-center">
                                <div class="card mb-4 shadow-sm">
                                    <div class="card-header">
                                        <h4 class="my-0 font-weight-normal">Res: <span id="idReserva"></span></h4>
                                    </div>
                                    <div class="card-body">
                                        <h1 class="card-title pricing-card-title">$ <span id="reservaValorReserva"></span> <small class="text-muted">/ noche</small></h1>
                                        <ul class="list-unstyled mt-3 mb-4">
                                            <div class="row justify-content-md-center">
                                                <label for="reservaCantAdu" class="col-2 col-form-label">Adultos</label>
                                                <div class="col-2"><input type:"text" class="form-control text-right" id="reservaCantAdu"/></div>
                                            </div>
                                            <div class="row justify-content-md-center">
                                                <label for="reservaCantNin" class="col-2 col-form-label">Niños</label>
                                                <div class="col-2"><input type:"text" class="form-control text-right" id="reservaCantNin"/></div>
                                            </div>
                                            <li>Fecha Entrada: <span id="reservaFechaEntrada"></span></li>
                                            <li>Fecha Salida: <span id="reservaFechaSalida"></span></li>
                                        </ul>
                                        <button type="button" class="btn btn-lg btn-block btn-outline-primary reservar">Seleccionar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="card-deck mb-3 text-center">
                            <div class="card mb-4 shadow-sm">
                                    <div class="card-header">
                                        <h4 class="my-0 font-weight-normal">Opcion 1</h4>
                                    </div>
                                    <div class="card-body">
                                        <h1 class="card-title pricing-card-title">$15 <small class="text-muted">/ noche</small></h1>
                                        <ul class="list-unstyled mt-3 mb-4">
                                        <li>20 users included</li>
                                        <li>10 GB of storage</li>
                                        <li>Priority email support</li>
                                        <li>Help center access</li>
                                        </ul>
                                        <button type="button" class="btn btn-lg btn-block btn-primary">Get started</button>
                                    </div>
                                    </div>
                                    <div class="card mb-4 shadow-sm">
                                    <div class="card-header">
                                        <h4 class="my-0 font-weight-normal">Opción 2</h4>
                                    </div>
                                    <div class="card-body">
                                        <h1 class="card-title pricing-card-title">$29 <small class="text-muted">/ mo</small></h1>
                                        <ul class="list-unstyled mt-3 mb-4">
                                        <li>30 users included</li>
                                        <li>15 GB of storage</li>
                                        <li>Phone and email support</li>
                                        <li>Help center access</li>
                                        </ul>
                                        <button type="button" class="btn btn-lg btn-block btn-primary">Contact us</button>
                                    </div>
                            </div>
                        </div>
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

        <script>
            var numberCase = <?= $_SESSION['bonitaProcess'] ?>;
        </script>

        <script src="./Assets/jquery-3.3.1.min.js"></script>
        <script src="./Components/common.js"></script>
        <script src="./Components/datosReserva.js"></script>
    </body>
</html>

