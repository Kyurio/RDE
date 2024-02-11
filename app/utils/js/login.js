const app = Vue.createApp({
    data() {

        return {

            requestFormLogin: {

                username: '',
                password: ''

            },

            csrfToken: '',
            error: '',

        }

    },

    methods: {


        Login() {
            try {
                // Obtener la clave API del almacenamiento local o de donde la tengas
                const apiKey = 'ñacksonfy'; // Ejemplo: Obtener la clave API del almacenamiento local

                // Agregar la clave API como un encabezado en la solicitud
                axios.post('http://127.0.0.1:8000/login/', {
                        username: this.requestFormLogin.username,
                        password: this.requestFormLogin.password
                    }).then(response => {
                        console.log(response.data);
                        if (response.data == true) {
                            location.href = 'index';
                        } else {
                            this.error = 'Usuario o Contraseña incorrectos';
                        }
                    })
                    .catch(error => {
                        console.error('Error al realizar la solicitud:', error);
                    });
            } catch (error) {
                console.error('Error al realizar la solicitud:', error);
            }
        },


    }

});

app.mount('#app');