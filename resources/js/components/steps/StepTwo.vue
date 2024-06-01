<template>
  <div class="grid grid-cols-2 gap-12 h-full  items-center">
    <img :src="bigImage" alt="" class="rounded-3xl h-screen w-full object-cover "/>
    <div class="flex flex-col  pr-20">
        <div class="">
            <h2 class="font-bold text-gray-700 text-2xl mb-2">Personal Information</h2>
            <p class=" text-gray-400 text-xs mb-4">
                Ok, Great! before we continue, please let us know how we can contact you
                regarding your qoute.
            </p>
        </div>

        <div class=" flex flex-col gap-6">
           
            <div class="grid grid-cols-2 gap-4 ">
                <div class="space-y-3">
                    <label for="first_name" class="text-sm text-gray-700">First name *</label>
                    <input type="text" id="first_name" v-model="step_two.first_name"  class="py-3 px-4 block w-full border border-gray-300 rounded-lg text-sm focus:border-gray-300  disabled:opacity-50 disabled:pointer-events-none focus-visible:outline-gray-300" placeholder="Enter First name">
                </div>
                <div class="space-y-3">
                    <label for="last_name" class="text-sm text-gray-700">Last name *</label>
                    <input type="text" id="last_name" v-model="step_two.last_name"  class="py-3 px-4 block w-full border border-gray-300 rounded-lg text-sm focus:border-gray-300  disabled:opacity-50 disabled:pointer-events-none focus-visible:outline-gray-300" placeholder="Enter Last name">
                </div>
                <div class="space-y-3 col-span-full">
                    <label for="email" class="text-sm text-gray-700">Email Address *</label>
                    <input type="text" id="email" v-model="step_two.email"  class="py-3 px-4 block w-full border border-gray-300 rounded-lg text-sm focus:border-gray-300  disabled:opacity-50 disabled:pointer-events-none focus-visible:outline-gray-300" placeholder="Enter Email Address">
                </div>
                <div class="space-y-3 col-span-full">
                    <label for="phone" class="text-sm text-gray-700">Phone No *</label>
                    <input type="text" id="phone" v-model="step_two.phone"  class="py-3 px-4 block w-full border border-gray-300 rounded-lg text-sm focus:border-gray-300  disabled:opacity-50 disabled:pointer-events-none focus-visible:outline-gray-300" placeholder="Enter Phone No">
                </div>

                <div class="relative inline-block col-span-full">
                    <label for="contact_preference" class="block text-sm text-gray-700 ">Contact Preference *</label>
                    <select id="contact_preference" v-model="step_two.contact_preference"  class="mt-3 appearance-none text-gray-600 w-full py-3 px-4 pe-9 text-base border border-gray-300 rounded-lg bg-white focus:outline-none focus:ring-2 focus:ring-gray-300 focus:border-gray-300">
                        <option value="email">Email</option>
                        <option value="phone">Phone</option>
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3 mt-8">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-3 stroke-black">
                            <path fill-rule="evenodd" d="M12.53 16.28a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 0 1 1.06-1.06L12 14.69l6.97-6.97a.75.75 0 1 1 1.06 1.06l-7.5 7.5Z" clip-rule="evenodd" />
                        </svg>
                    </div>
                </div>
                <button type="button"
                    @click="updateStep()"
                    class="px-5 py-3.5 mt-2 col-span-2 rounded-xl text-white text-sm tracking-wider font-medium border border-current outline-none bg-blue-600 hover:bg-blue-800 active:bg-blue-700">
                    Continue
                </button>
                <div class=" col-span-full text-center">
                    <a href="" @click.prevent="updateStep(false)" class="text-blue-700  mx-auto ">Back</a>
                </div>
            </div>

           


        </div>
    </div>
  </div>
</template>

<script>
export default {
    data() {
    return {
        bigImage: "/images/submissions/step_2.png",
        checkboxImg: "/images/submissions/car.jpeg",
        step_two : {
            "first_name" : "",
            "last_name" : "",
            "email" : "",
            "phone" : "",
            "contact_preference" : "",
        }
    };
    },
    watch: {
        step_two: {
            handler(value) {
                this.$store.commit("form/setForm", { ...value });
            },
            deep: true,
        },
    },
};
</script>

<style>
</style>