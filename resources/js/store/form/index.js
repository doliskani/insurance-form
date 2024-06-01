export default {
    namespaced: true,
    state: {
        form: {
            "agreement" : false,
            "home_insurance" : false,
            "auto_insurance" : false,
            "recreational_vehicle_insurance" : false,

            "first_name" : "",
            "last_name" : "",
            "email" : "",
            "phone" : "",
            "contact_preference" : "",

            "street" : "",
            "apartment" : "",
            "city" : "",
            "state" : "",
            "zipcode" : ""
        },
        step : 1
    },
    getters: {
        getForm(state) {
            return state.form
        },
        getStep(state) {
            return state.step
        }

    },
    mutations: {
        setForm(state, val) {
            const keys = Object.keys(val);
            keys.map(key => {
                state.form[key] = val[key]
            });
            console.log(state.form);
        },
        setStep(state , val) {
            return state.step = val
        }
    },
    actions: {
        storeForm({ commit , state } , endPoint) {
            axios.post(endPoint , state.form).then((response) => {
                
            })
        },
    },

}
