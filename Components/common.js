var urlBonita = 'http://localhost:8080';
var bonitaGetSession = '/bonita/API/system/session/unusedid';
var appSetSession = 'session.php'

var rutaLoginStatus = '';
var sesionBonita = {};



function loginStatus() {
	Ajax('GET', urlBonita, bonitaGetSession, {}, loginSuccess, loginError);	
}

function loginSuccess(result, status, xhr) {
    sesionBonita = {
		apiToken : xhr.getResponseHeader('X-Bonita-API-Token'),
		userId : result.user_id,
		userName: result.user_name,
    };

    $('#usuarioLogueado').html('Agente: <strong>' + sesionBonita.userName.toUpperCase() + '</strong>');

    // Se debe evaluar. Creo que no es necesario este manejo de sesion por PHP
	Ajax('POST', '', appSetSession, JSON.stringify(sesionBonita), function (response) {
		console.log(response);
    });
    
    if (rutaLoginStatus !== '') {
        window.location.href = rutaLoginStatus;
    }
}

function loginError(err) {
    alert('No hay sesion iniciada');
    window.location.href = "http://127.0.0.1/vueJs/";
}

function Ajax(type, url, endpoint, params, callbackFunction, errorFunction = ajaxError) {
	$.ajax({
		url: url + endpoint,
        type: type,
		xhrFields: { withCredentials: true },
		data: params,
		success: callbackFunction,
		error: errorFunction
	});
}

function AjaxBonita(type, url, endpoint, params, callbackFunction, errorFunction = ajaxError) {
	$.ajax({
		url: url + endpoint,
        type: type,
        contentType: "application/json",
        headers: {'X-Bonita-API-Token': sesionBonita.apiToken},
		xhrFields: { withCredentials: true },
		data: JSON.stringify(params),
		success: callbackFunction,
		error: errorFunction
	});
}

function ajaxError (err) {
    console.log(err);
}