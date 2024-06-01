import './bootstrap';

import { createApp } from 'vue/dist/vue.esm-bundler.js';
import App from './Components/App.vue';


const app = createApp({});

app.component('App', App);

app.mount("#app");
