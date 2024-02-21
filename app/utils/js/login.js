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
                // Agregar la clave API como un encabezado en la solicitud
                axios.post('http://127.0.0.1:8000/auth/login', {
                        username: this.requestFormLogin.username,
                        password: this.requestFormLogin.password
                    }).then(response => {
                        if (response.data === "true") {
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