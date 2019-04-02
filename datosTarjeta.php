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
                <div class="col-md-8 order-md-2 mb-4">

                    <h4 class="mb-3">Pago</h4>

                    <div class="d-block my-3">
                    <div class="custom-control custom-radio">
                        <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked="" required="">
                        <label class="custom-control-label" for="credit">Tarjeta de Crédito</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required="">
                        <label class="custom-control-label" for="paypal">Efectivo</label>
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="cc-name">Nombre Tarjeta</label>
                        <input type="text" class="form-control" id="cc-name" placeholder="" required="">
                        <small class="text-muted">Full name as displayed on card</small>
                        <div class="invalid-feedback">
                        Name on card is required
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="cc-number">Número de tarjeta</label>
                        <input type="text" class="form-control" id="cc-number" placeholder="" required="">
                        <div class="invalid-feedback">
                        Credit card number is required
                        </div>
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-md-3 mb-3">
                        <label for="cc-expiration">Expiración</label>
                        <input type="text" class="form-control" id="cc-expiration" placeholder="" required="">
                        <div class="invalid-feedback">
                        Expiration date required
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="cc-expiration">CVV</label>
                        <input type="text" class="form-control" id="cc-cvv" placeholder="" required="">
                        <div class="invalid-feedback">
                        Security code required
                        </div>
                    </div>
                    </div>
                    <hr class="mb-4">
                    <div class="text-right">
                        <button id="finalizarReserva" class="btn btn-primary btn-lg" type="submit">Enviar a Pago</button>
                    </div>
                    </form>
                    </div>

                    <div class="col-md-4 order-md-2 mb-4">
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class=
                        "text-muted">Tu carrito</span>
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
                </div>

                
                <div class="col-md-8 order-md-1">
                <div>
                        
                </div>

                <footer class="my-5 pt-5 text-muted text-center text-small">
                    <p class="mb-1">© 2019</p>
                </footer>
            </div>

        <script>
            var numberCase = <?= $_SESSION['bonitaProcess'] ?>;
        </script>

        <script src="./Assets/jquery-3.3.1.min.js"></script>
        <script src="./Components/common.js"></script>
        <script src="./Components/datosTarjeta.js"></script>
    </body>
</html>

