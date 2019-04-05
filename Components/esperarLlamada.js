//========= CONSTANTES DE BONITA
//
var procesoId = 6160510033048213437;
var bonitaInstanciaProceso = '/bonita/API/bpm/process/'+ procesoId +'/instantiation';
const appSetActiveProcess = 'activeProcess.php'
var reservaInput = 1;

$(document).ready(function () {
    loginStatus();
});

$('#crearInstancia').click(function () {
    AjaxBonita('POST', urlBonita, bonitaInstanciaProceso, {
        iniciaReservaInput: {
            idProceso:1,
            reservaId: 123,
            userId: sesionBonita.userId,
            clienteId: 1
        },
        idReserva2: reservaInput
    }, function (respuesta) {
        // Se debe evaluar. Creo que no es necesario este manejo de sesion por PHP
        Ajax('POST', '', appSetActiveProcess, JSON.stringify({bonitaProcess: respuesta.caseId}), function () {
            window.location.href = 'datosReserva.php';
        });
    });
});
