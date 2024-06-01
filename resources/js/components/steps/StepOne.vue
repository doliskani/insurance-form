<template>
  <div class="grid grid-cols-2 gap-12 h-full  items-center">
    <img :src="bigImage" alt="" class="rounded-3xl h-screen w-full object-cover" />
    <div class="flex flex-col  pr-20">
        <div class="">
            <h2 class="font-bold text-gray-700 text-2xl mb-2">Let's get started</h2>
            <p class=" text-gray-400 text-xs mb-4">
                Please select one or more options below that you'd like to have quoted
                for insurance
            </p>
        </div>

        <div class="options  flex flex-col gap-6">
            <div class="relative cursor-pointer">
                <div class="flex items-center  absolute right-0 top-0  z-[11]">
                    <input id="home_insurance" v-model="step_one.home_insurance" type="checkbox" class="hidden peer" checked />
                    <label for="home_insurance"
                    class="relative flex items-center justify-center p-1 peer-checked:before:hidden before:block before:absolute before:w-full before:h-full before:bg-blue-500 w-6 h-6 cursor-pointer bg-blue-500 border  rounded-tr-md rounded-bl-md overflow-hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-full fill-white" viewBox="0 0 520 520">
                        <path
                        d="M79.423 240.755a47.529 47.529 0 0 0-36.737 77.522l120.73 147.894a43.136 43.136 0 0 0 36.066 16.009c14.654-.787 27.884-8.626 36.319-21.515L486.588 56.773a6.13 6.13 0 0 1 .128-.2c2.353-3.613 1.59-10.773-3.267-15.271a13.321 13.321 0 0 0-19.362 1.343q-.135.166-.278.327L210.887 328.736a10.961 10.961 0 0 1-15.585.843l-83.94-76.386a47.319 47.319 0 0 0-31.939-12.438z"
                        data-name="7-Check" data-original="#000000" />
                    </svg>
                    </label>
                </div>
                <img :src="checkboxImg" alt="" class=" h-20 rounded-md w-full  z-[11]">
                <div class="flex items-center absolute w-full top-4 left-5 gap-4  z-[11]">
                    <div class=" rounded-xl bg-white p-3 inline-flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 text-blue-700">
                            <path d="M11.47 3.841a.75.75 0 0 1 1.06 0l8.69 8.69a.75.75 0 1 0 1.06-1.061l-8.689-8.69a2.25 2.25 0 0 0-3.182 0l-8.69 8.69a.75.75 0 1 0 1.061 1.06l8.69-8.689Z" />
                            <path d="m12 5.432 8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 0 1-.75-.75v-4.5a.75.75 0 0 0-.75-.75h-3a.75.75 0 0 0-.75.75V21a.75.75 0 0 1-.75.75H5.625a1.875 1.875 0 0 1-1.875-1.875v-6.198a2.29 2.29 0 0 0 .091-.086L12 5.432Z" />
                        </svg>
                    </div>
                    <div class="flex flex-col justify-between gap-1">
                        <div class="font-medium text-md text-white">Home</div>
                        <p class=" text-gray-100 text-xs ">Your current or soon-to-be-home</p>
                    </div>
                </div>
                <div class=" absolute top-0 z-10 rounded-md bg-gradient-to-r from-gray-950 h-full w-full"></div>
            </div>
            <div class="relative cursor-pointer">
                <div class="flex items-center  absolute right-0 top-0  z-[11]">
                    <input id="auto_insurance"  v-model="step_one.auto_insurance" type="checkbox" class="hidden peer" checked />
                    <label for="auto_insurance"
                    class="relative flex items-center justify-center p-1 peer-checked:before:hidden before:block before:absolute before:w-full before:h-full before:bg-blue-500 w-6 h-6 cursor-pointer bg-blue-500 border  rounded-tr-md rounded-bl-md overflow-hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-full fill-white" viewBox="0 0 520 520">
                        <path
                        d="M79.423 240.755a47.529 47.529 0 0 0-36.737 77.522l120.73 147.894a43.136 43.136 0 0 0 36.066 16.009c14.654-.787 27.884-8.626 36.319-21.515L486.588 56.773a6.13 6.13 0 0 1 .128-.2c2.353-3.613 1.59-10.773-3.267-15.271a13.321 13.321 0 0 0-19.362 1.343q-.135.166-.278.327L210.887 328.736a10.961 10.961 0 0 1-15.585.843l-83.94-76.386a47.319 47.319 0 0 0-31.939-12.438z"
                        data-name="7-Check" data-original="#000000" />
                    </svg>
                    </label>
                </div>
                <img :src="checkboxImg" alt="" class=" h-20 rounded-md w-full  z-[11]">
                <div class="flex items-center absolute w-full top-4 left-5 gap-4  z-[11]">
                    <div class=" rounded-xl bg-white p-3 inline-flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 text-blue-700">
                            <path fill-rule="evenodd" d="M11.828 2.25c-.916 0-1.699.663-1.85 1.567l-.091.549a.798.798 0 0 1-.517.608 7.45 7.45 0 0 0-.478.198.798.798 0 0 1-.796-.064l-.453-.324a1.875 1.875 0 0 0-2.416.2l-.243.243a1.875 1.875 0 0 0-.2 2.416l.324.453a.798.798 0 0 1 .064.796 7.448 7.448 0 0 0-.198.478.798.798 0 0 1-.608.517l-.55.092a1.875 1.875 0 0 0-1.566 1.849v.344c0 .916.663 1.699 1.567 1.85l.549.091c.281.047.508.25.608.517.06.162.127.321.198.478a.798.798 0 0 1-.064.796l-.324.453a1.875 1.875 0 0 0 .2 2.416l.243.243c.648.648 1.67.733 2.416.2l.453-.324a.798.798 0 0 1 .796-.064c.157.071.316.137.478.198.267.1.47.327.517.608l.092.55c.15.903.932 1.566 1.849 1.566h.344c.916 0 1.699-.663 1.85-1.567l.091-.549a.798.798 0 0 1 .517-.608 7.52 7.52 0 0 0 .478-.198.798.798 0 0 1 .796.064l.453.324a1.875 1.875 0 0 0 2.416-.2l.243-.243c.648-.648.733-1.67.2-2.416l-.324-.453a.798.798 0 0 1-.064-.796c.071-.157.137-.316.198-.478.1-.267.327-.47.608-.517l.55-.091a1.875 1.875 0 0 0 1.566-1.85v-.344c0-.916-.663-1.699-1.567-1.85l-.549-.091a.798.798 0 0 1-.608-.517 7.507 7.507 0 0 0-.198-.478.798.798 0 0 1 .064-.796l.324-.453a1.875 1.875 0 0 0-.2-2.416l-.243-.243a1.875 1.875 0 0 0-2.416-.2l-.453.324a.798.798 0 0 1-.796.064 7.462 7.462 0 0 0-.478-.198.798.798 0 0 1-.517-.608l-.091-.55a1.875 1.875 0 0 0-1.85-1.566h-.344ZM12 15.75a3.75 3.75 0 1 0 0-7.5 3.75 3.75 0 0 0 0 7.5Z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="flex flex-col justify-between gap-1">
                        <div class="font-medium text-md text-white">Auto</div>
                        <p class=" text-gray-100 text-xs ">Your personal vehicle</p>
                    </div>
                </div>
                <div class=" absolute top-0 z-10 rounded-md bg-gradient-to-r from-gray-950 h-full w-full"></div>
            </div>
            <div class="relative cursor-pointer">
                <div class="flex items-center  absolute right-0 top-0  z-[11]">
                    <input id="recreational_vehicle_insurance" v-model="step_one.recreational_vehicle_insurance" type="checkbox" class="hidden peer" checked />
                    <label for="recreational_vehicle_insurance"
                    class="relative flex items-center justify-center p-1 peer-checked:before:hidden before:block before:absolute before:w-full before:h-full before:bg-blue-500 w-6 h-6 cursor-pointer bg-blue-500 border  rounded-tr-md rounded-bl-md overflow-hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-full fill-white" viewBox="0 0 520 520">
                        <path
                        d="M79.423 240.755a47.529 47.529 0 0 0-36.737 77.522l120.73 147.894a43.136 43.136 0 0 0 36.066 16.009c14.654-.787 27.884-8.626 36.319-21.515L486.588 56.773a6.13 6.13 0 0 1 .128-.2c2.353-3.613 1.59-10.773-3.267-15.271a13.321 13.321 0 0 0-19.362 1.343q-.135.166-.278.327L210.887 328.736a10.961 10.961 0 0 1-15.585.843l-83.94-76.386a47.319 47.319 0 0 0-31.939-12.438z"
                        data-name="7-Check" data-original="#000000" />
                    </svg>
                    </label>
                </div>
                <img :src="checkboxImg" alt="" class=" h-20 rounded-md w-full  z-[11]">
                <div class="flex items-center absolute w-full top-4 left-5 gap-4  z-[11]">
                    <div class=" rounded-xl bg-white p-3 inline-flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 text-blue-700">
                            <path d="M11.47 3.841a.75.75 0 0 1 1.06 0l8.69 8.69a.75.75 0 1 0 1.06-1.061l-8.689-8.69a2.25 2.25 0 0 0-3.182 0l-8.69 8.69a.75.75 0 1 0 1.061 1.06l8.69-8.689Z" />
                            <path d="m12 5.432 8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 0 1-.75-.75v-4.5a.75.75 0 0 0-.75-.75h-3a.75.75 0 0 0-.75.75V21a.75.75 0 0 1-.75.75H5.625a1.875 1.875 0 0 1-1.875-1.875v-6.198a2.29 2.29 0 0 0 .091-.086L12 5.432Z" />
                        </svg>
                    </div>
                    <div class="flex flex-col justify-between gap-1">
                        <div class="font-medium text-md text-white">Recreational Vehicle</div>
                        <p class=" text-gray-100 text-xs ">Your boat RV, motorcycle, etc</p>
                    </div>
                </div>
                <div class=" absolute top-0 z-10 rounded-md bg-gradient-to-r from-gray-950 h-full w-full"></div>
            </div>

            <button type="subbutton"
                @click="stepPlus()"
                class="px-5 py-3.5 rounded-xl text-white text-sm tracking-wider font-medium border border-current outline-none bg-blue-600 hover:bg-blue-800 active:bg-blue-700">
                Agree and Continue
            </button>

            <p class=" text-gray-400 text-xs mb-4">
                By continue this form you agree and share data with Frankie Insurance Service
                as defined in the Terms of Use and Privacy Policy.
            </p>

        </div>
    </div>
  </div>
</template>

<script>
export default {
    data() {
        return {
            bigImage: "/images/submissions/step_1.png",
            checkboxImg: "/images/submissions/car.jpeg",

            step_one : {
                "home_insurance" : false,
                "auto_insurance" : false,
                "recreational_vehicle_insurance" : false,
                "agreement" : false,
            }

        };
    },
    watch: {
        step_one: {
            handler(value) {
                this.$store.commit("form/setForm", { ...value });
            },
            deep: true,
        },
    },
    methods : {
       stepPlus(){
            this.step_one.agreement = true;
            this.updateStep()
       }
    }
};
</script>

<style>
</style>