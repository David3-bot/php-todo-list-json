const { createApp } = Vue;


const app = createApp({

    data() {

        return {
            maybeList: [],
            maybeTab: {}
        };

    },
    methods: {
        submit() {
            axios.post("API/todomaybe.php", this.maybeTab, { headers: { "Content-Type": "multipart/form-data" }, })
                .then((resp) => {
                    this.fetchData();
                });
        },

        fetchData() {
            axios.get("API/maybe.php").then((resp) => { this.maybeList = resp.data });
        }
    },

    beforeMount() {
    },

}).mount("#app")