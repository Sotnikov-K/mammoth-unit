import './bootstrap';
// import router from './router';
import { createApp } from 'vue';


const app = createApp({});


/**
 * COMPONENTS
 */
import HeaderComponent from './components/HeaderComponent.vue';
app.component('v-header', HeaderComponent);
// app.use(router);

import InsertnameComponent from './components/InsertnameComponent.vue';
app.component('v-insertname', InsertnameComponent);

import InputComponent from './components/InputComponent.vue';
app.component('v-input', InputComponent);





const vm = app.mount('#app');











