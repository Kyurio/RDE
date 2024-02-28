const app = Vue.createApp({
    data() {

        return {


            Areas: [],
            Sistemas: [],

            Data: {

                "id": 1,
                "nombre": "Producto 1",
                "precio": 10.99,
                "cantidad": 20

            },

            //sweet alert
            Toast: Swal.mixin({
                toast: true,
                position: "top-end",
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.onmouseenter = Swal.stopTimer;
                    toast.onmouseleave = Swal.resumeTimer;
                }
            }),


        }

    },


    mounted() {

        this.GetAreas();
        this.GetSistema(1);

    },

    methods: {


        /**
         * 
         * 
         * FUNCIONES GET
         * 
         * 
         */

        async GetAreas() {

            try {

                axios.get('http://127.0.0.1:8000/areas/GetAreas/')
                    .then(response => {
                        this.Areas = response.data;
                    })
                    .catch(error => {
                        // Manejar cualquier error que ocurra durante la llamada
                        console.error('Error al obtener las áreas:', error);
                    });


            } catch (error) {
                console.error('Error al realizar la solicitud:', error);
            }

        },

        async GetSistema(id) {

            try {

                axios.get('http://127.0.0.1:8000/areas/GetSistemas/')
                    .then(response => {
                        this.Areas = response.data;
                    })
                    .catch(error => {
                        // Manejar cualquier error que ocurra durante la llamada
                        console.error('Error al obtener las áreas:', error);
                    });


            } catch (error) {
                console.error('Error al realizar la solicitud:', error);
            }

        },




    },


});
app.mount('#app');