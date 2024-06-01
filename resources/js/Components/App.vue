<template>
  <section class=" h-screen overflow-hidden">
    <step-one v-if="step == 1"/>
    <step-two v-if="step == 2"/>
    <step-three v-if="step == 3"/>
  </section>
</template>

<script>
import StepOne from "./Steps/StepOne.vue"
import StepTwo from "./Steps/StepTwo.vue"
import StepThree from "./Steps/StepThree.vue"
export default {
    data(){
      return {
        step : 1
      }
    },
    components : {
        StepOne,
        StepTwo,
        StepThree,
    }

}
</script>

<style>

</style>