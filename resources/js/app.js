import './bootstrap';

import { createApp } from 'vue/dist/vue.esm-bundler.js';
import App from './components/App.vue';

import store from './store';
import globalMixin from "./mixins/global"



const app = createApp({});


app.mixin(
    globalMixin
);

app.use(store);

app.component('App', App);

app.mount("#app");

window.App = app;

