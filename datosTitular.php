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
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 order-md-2 mb-4">
                        <h4 class="d-flex justify-content-between align-items-center mb-3">
                            <span class="text-muted">Tu carrito</span>
                            <span class="badge badge-secondary badge-pill">1</span>
                        </h4>
                        <ul class="list-group mb-3">
                            <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>
                                <h6 id="planNombre" class="my-0">Reserva</h6>
                                <small id="planDescripcion" class="text-muted">Todo Incluido - Sin tiquetes</small>
                            </div>
                            <span class="text-muted">$ <span id="reservaSubtotal">12</span></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                            <span>Total (COP)</span>
                            <strong>$ <span id="reservaValorReserva"> </span></strong>
                            </li>
                        </ul>

                        <form class="card p-2">
                            <div class="input-group">
                            <input type="text" class="form-control" placeholder="Promo code">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-secondary">Redimir</button>
                            </div>
                            </div>
                        </form>
                        </div>
                        <div class="col-md-8 order-md-1">
                        <h4 class="mb-3">Reserva: <span id="idReserva"></span></h4>
                        <form class="needs-validation" novalidate="">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="clienteNombre">Nombres</label>
                                    <input type="text" class="form-control" id="clienteNombre" placeholder="" value="" required="">
                                    <div class="invalid-feedback">
                                        Valid first name is required.
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="clienteApellido">Apellidos</label>
                                    <input type="text" class="form-control" id="clienteApellido" placeholder="" value="" required="">
                                    <div class="invalid-feedback">
                                    Valid last name is required.
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <label for="clienteEdad">Edad</label>
                                    <input type="text" class="form-control" id="clienteEdad" placeholder="" value="" required="">
                                    <div class="invalid-feedback">
                                        Valid first name is required.
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="clienteEstadoCivil">Estado Civil</label>
                                    <input type="text" class="form-control" id="clienteEstadoCivil" placeholder="" value="" required="">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="clienteGenero">Género</label>
                                    <input type="text" class="form-control" id="clienteGenero" placeholder="" value="" required="">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <label for="clienteTelefono">Teléfono</label>
                                    <input type="email" class="form-control" id="clienteTelefono" placeholder="you@example.com">
                                </div>
                                <div class="col-md-8 mb-3">
                                    <label for="clienteEmail">Email</label>
                                    <input type="email" class="form-control" id="clienteEmail" placeholder="you@example.com">
                                </div>
                            </div>

                            <hr class="mb-4">
                            <div class="text-right">
                                <button id="continuarReserva" class="btn btn-primary btn-lg ">Continuar</button>
                                <button id="anularReserva" class="btn btn-danger btn-lg ">Anular Reserva</button>
                            </div>
                        </form>
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
        <script src="./Components/datosTitular.js"></script>
    </body>
</html>

