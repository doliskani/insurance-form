export default {
    data() {
        return {
        }
    },

    mounted() {

    },
    
    methods: {
        updateStep(isPlus = true){
            let step = this.getStep
            if(isPlus){
                if(step >= 1 && step <3 )
                    step++;
            }else{
                if(step > 1 )
                    step--;
            }
            
            this.$store.commit("form/setStep", step);
        }
    },
    computed: {
        getStep(){
            return this.$store.getters["form/getStep"]
          }
    }

}
