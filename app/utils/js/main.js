const app = Vue.createApp({
    data() {

        return {


            Areas: [],

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
                
                axios.get('http://127.0.0.1:8000/areas/GetAreas/').then(response => {
                    console.log(response.data);
                    this.Areas = response.data
                })
                    .catch(error => {
                        console.error('Error al realizar la solicitud:', error);
                    });
            } catch (error) {
                console.error('Error al realizar la solicitud:', error);
            }

        }

    },


});
app.mount('#app');