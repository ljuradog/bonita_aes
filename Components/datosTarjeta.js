var taskId;

$(document).ready(function () {
    loginStatus();
    esperarLlegadaDeProceso();
});

function esperarLlegadaDeProceso () {
    setTimeout( function() {
        Ajax('GET', urlBonita, '/bonita/API/bpm/activity?p=0&c=10&f=rootCaseId%3d' + numberCase, {},
            function (response) {
                if (response.length < 1 || response[0].displayName != 'Gestión de Pago de Reserva') {
                    esperarLlegadaDeProceso();
                } else {
                    taskId = response[0].id;
                    consultarDatosProceso();
                }
            })
    }, 2000);
}

function consultarDatosProceso () {
    Ajax('GET', urlBonita, '/bonita/API/bpm/caseVariable?p=0&c=50&f=case_id%3d' + numberCase, {}, function (response) {
        $("#datosProceso").show();
        $("#EnEspera").hide();
        if (response.length > 0) {
            response.forEach(function (atributos) {
                switch (atributos.name) {
                    case 'reservaValorReserva':
                        $("#"+atributos.name).html(new Intl.NumberFormat().format(atributos.value));
                        $("#reservaSubtotal").html(new Intl.NumberFormat().format(atributos.value));
                        break;
                    case 'clienteNombre':
                    case 'clienteApellido':
                    case 'clienteEdad':
                    case 'clienteEstadoCivil':
                    case 'clienteGenero':
                    case 'clienteTelefono':
                    case 'clienteEmail':
                        $("#"+atributos.name).val(atributos.value);
                        break;
                    default:
                        $("#"+atributos.name).html(atributos.value);
                }
            });
        }
        //console.log(response);
    });
}

$('#finalizarReserva').click( function (e) {
    e.preventDefault();
    AjaxBonita('PUT', urlBonita, '/bonita/API/bpm/userTask/'+ taskId, {
        "assigned_id" : sesionBonita.userId,
    }, function (responseAsigned) {
        console.log(responseAsigned);
        AjaxBonita('PUT', urlBonita, '/bonita/API/bpm/task/'+ taskId, {
            "state": 'completed'
        }, function (response2) {
            window.location.href = 'esperarLlamada.php';
        });
    });
});
