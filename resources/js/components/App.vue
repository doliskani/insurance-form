<template>
  <section class=" h-screen overflow-hidden">
    <step-one v-if="getStep == 1"/>
    <step-two v-else-if="getStep == 2"/>
    <step-three v-else />
  </section>
</template>

<script>
import StepOne from "./steps/StepOne.vue";
import StepTwo from "./steps/StepTwo.vue";
import StepThree from "./steps/StepThree.vue";

export default {
    data(){
      return {
        
      }
    },
    components : {
        StepOne,
        StepTwo,
        StepThree,
    },
    computed : {
      
    }

}
</script>

<style>

</style>