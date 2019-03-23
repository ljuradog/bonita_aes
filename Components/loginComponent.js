
var login = new Vue({
	el: '#login',
	data () { 
		return {
			usuario: null,
            password: null,
            token: null,
            sesionIniciada: false
		}
	},
	methods: {
		conectarAPIBonita(){
            this.iniciarSesionBonita()
        },
        
        iniciarSesionBonita () {
            axios.post('http://ec2-54-242-25-62.compute-1.amazonaws.com:8080/bonita/loginservice', {
                withCredentials: true,
                params: {
                    'redirect': false,
                    'username': this.usuario,
                    'password': this.password
				}
            }).then(function (response) {
                    // handle success
                    axios.get('http://ec2-54-242-25-62.compute-1.amazonaws.com:8080/bonita/API/system/session/unusedid',
                    {
                        withCredentials: true
                    })
                    .then(function (resultado) {
                        // handle success
                        // data,status,statusText,headers,config,request
                        console.log('resultado ' + resultado.headers['x-bonita-api-token']);
                        console.log('resultado ' + resultado.data.user_name);
                        console.log('Logueo Exitoso');
                    }).catch(function (e) {
                        console.log("Error: " + e);
                        console.log('Logueo Fallido');
                    })

                    return;
                }
            ).catch(function (e) {
                    console.log("Error: " + e);
                    console.log('Logueo Fallido');
                }
			)
        },
	}
})