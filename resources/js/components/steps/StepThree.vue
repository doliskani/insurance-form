<template>
  <div class="grid grid-cols-2 gap-12 h-full  items-center">
    <img :src="bigImage" alt="" class="rounded-3xl h-screen w-full object-cover " />
    <div class="flex flex-col  pr-20">
        <div class="">
            <h2 class="font-bold text-gray-700 text-2xl mb-2">Address Information</h2>
            <p class=" text-gray-400 text-xs mb-4">
                We can help with that! What is your Address?
            </p>
        </div>

        <div class=" flex flex-col gap-6">
           
            <div class="grid grid-cols-2 gap-4 ">
                <div class="space-y-3">
                    <label for="street" class="text-sm text-gray-700">Street Address *</label>
                    <input type="text"  v-model="step_three.street" id="street" class="py-3 px-4 block w-full border border-gray-300 rounded-lg text-sm focus:border-gray-300  disabled:opacity-50 disabled:pointer-events-none focus-visible:outline-gray-300" placeholder="Enter Street Address">
                </div>
                <div class=" space-y-3">
                    <label for="apartment"  class="text-sm text-gray-700">Ste/Apt *</label>
                    <input type="text" id="apartment" v-model="step_three.apartment"  class="py-3 px-4 block w-full border border-gray-300 rounded-lg text-sm focus:border-gray-300  disabled:opacity-50 disabled:pointer-events-none focus-visible:outline-gray-300" placeholder="">
                </div>
               

                <div class="relative inline-block col-span-full">
                    <label for="city" class="block text-sm text-gray-700 ">City *</label>
                    <select id="city" v-model="step_three.city"  class="mt-3 appearance-none text-gray-600 w-full py-3 px-4 pe-9 text-base border border-gray-300 rounded-lg bg-white focus:outline-none focus:ring-2 focus:ring-gray-300 focus:border-gray-300">
                        <option value="tehran">Tehran</option>
                        <option value="esfehan">Esfahan</option>
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3 mt-8">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-3 stroke-black">
                            <path fill-rule="evenodd" d="M12.53 16.28a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 0 1 1.06-1.06L12 14.69l6.97-6.97a.75.75 0 1 1 1.06 1.06l-7.5 7.5Z" clip-rule="evenodd" />
                        </svg>
                    </div>
                </div>
                <div class="relative inline-block col-span-full">
                    <label for="state" class="block text-sm text-gray-700 ">State *</label>
                    <select id="state"  v-model="step_three.state"  class="mt-3 appearance-none text-gray-600 w-full py-3 px-4 pe-9 text-base border border-gray-300 rounded-lg bg-white focus:outline-none focus:ring-2 focus:ring-gray-300 focus:border-gray-300">
                        <option value="tehran">Tehran</option>
                        <option value="esfahan">Esfahan</option>
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3 mt-8">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-3 stroke-black">
                            <path fill-rule="evenodd" d="M12.53 16.28a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 0 1 1.06-1.06L12 14.69l6.97-6.97a.75.75 0 1 1 1.06 1.06l-7.5 7.5Z" clip-rule="evenodd" />
                        </svg>
                    </div>
                </div>
                <div class=" space-y-3 col-span-full">
                    <label for="zipcode" class="text-sm text-gray-700">Zip code *</label>
                    <input type="text" id="zipcode"  v-model="step_three.zipcode" class="py-3 px-4 block w-full border border-gray-300 rounded-lg text-sm focus:border-gray-300  disabled:opacity-50 disabled:pointer-events-none focus-visible:outline-gray-300" placeholder="">
                </div>
                <button type="button"
                    @click="storeForm()"
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
            bigImage: "/images/submissions/step_3.png",
            checkboxImg: "/images/submissions/car.jpeg",
            step_three : {
                "street" : "",
                "apartment" : "",
                "city" : "",
                "state" : "",
                "zipcode" : ""
            }
        };
    },
    watch: {
        step_three: {
            handler(value) {
                this.$store.commit("form/setForm", { ...value });
            },
            deep: true,
        },
    },
    methods : {
        storeForm(){
            const endPoint = `form/store`;
            this.$store.dispatch("form/storeForm", endPoint);
        }
    }
};
</script>

<style>
</style>