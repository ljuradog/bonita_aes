//========= CONSTANTES DE BONITA
//const bonitaProcessCallCenter = 6962342582800348611;
const bonitaInstanciaProceso = '/bonita/API/bpm/process/6962342582800348611/instantiation';

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
        }
    }, function (respuesta) {
        console.log(respuesta);
    });
});
