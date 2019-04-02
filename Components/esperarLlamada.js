//========= CONSTANTES DE BONITA
// 
const bonitaInstanciaProceso = '/bonita/API/bpm/process/7660356212200998210/instantiation';
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
