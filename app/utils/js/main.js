const app = Vue.createApp({
    data() {

        return {


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

    computed: {


    },

    mounted() {


    },

    methods: {


    },


});
app.mount('#app');