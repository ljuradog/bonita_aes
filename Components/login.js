var bonitaLoginService = '/bonita/loginservice';

$('#login').submit(function (e) {
	e.preventDefault();
	rutaLoginStatus = 'esperarLlamada.php';
	Ajax('POST', urlBonita, bonitaLoginService, {
			redirect: false,
			'username': $('#usuario').val(),
			'password': $('#password').val()
		}, loginStatus,
	);
});
