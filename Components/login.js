var urlBonita = 'http://ec2-54-242-25-62.compute-1.amazonaws.com:8080';
var bonitaLoginService = '/bonita/loginservice';
var bonitaGetSession = '/bonita/API/system/session/unusedid';

var appSetSession = 'session.php'

$('#login').submit(function (e) {
	e.preventDefault();
	Ajax('POST', urlBonita, bonitaLoginService, {
			redirect: false,
			'username': $('#usuario').val(),
			'password': $('#password').val()
		}, loginInProgress,
	);
});

function loginInProgress(result) {
	Ajax('GET', urlBonita, bonitaGetSession, {}, loginSuccess);	
}

function loginSuccess(result, status, xhr) {
	Ajax('POST', '', appSetSession, JSON.stringify({
		apiToken : xhr.getResponseHeader('X-Bonita-API-Token'),
		userId : result.user_id,
		userName: result.user_name,
	}), function (response) {
		console.log(response);
	});
	console.log('Usuario Logueado ' + result.user_id);
	console.log('Cookies '+ xhr.getResponseHeader('X-Bonita-API-Token'));
}


function Ajax(type, url, endpoint, params, callback) {
	$.ajax({
		url: url + endpoint,
		type: type,
		xhrFields: { withCredentials: true },
		data: params,
		success: callback,
		error: function (err) {
			console.log (err);
		}
	});
}
/*
$.ajax({
	url: "http://ec2-54-242-25-62.compute-1.amazonaws.com:8080/bonita/loginservice",
	type: 'POST',
	//dataType: 'JSON',
	//cache: true,
	xhrFields: { withCredentials: true },
	//headers : {'X-Bonita-API-Token'},
	data: {
		'redirect': false,
		'username': "cristian",
		'password': 'bpm'
	},
	success: function( result, status, xhr ) {
	  console.log('resultado ' + result);
	  console.log('Cookies '+ xhr.getResponseHeader('X-Bonita-API-Token'));

	  $.ajax({
		url: "http://ec2-54-242-25-62.compute-1.amazonaws.com:8080/bonita/API/system/session/unusedid",
		type: 'GET',
		xhrFields: { withCredentials: true },
		//dataType: 'json',
		//cache: true,
		success: function( result, status, xhr ) {
			console.log('resultado ' + result.user_name);
		  console.log('Cookies '+ xhr.getResponseHeader('X-Bonita-API-Token'));
		},
		error: function (err) {
			console.log (err);
		}
	  });
	},
	error: function (err, param2) {
		console.log (err);
		console.log (param2);
	}
  });

function logicaLogin (data) {
	console.log('Entro por Logica Login: ' +data);
}*/