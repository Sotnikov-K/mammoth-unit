import './bootstrap';
// import router from './router';
import { createApp } from 'vue';


const app = createApp({});


/**
 * COMPONENTS
 */
import HeaderComponent from './components/HeaderComponent.vue';
app.component('v-header', HeaderComponent);

import FooterComponent from './components/FooterComponent.vue';
app.component('v-footer', FooterComponent);

// app.use(router);

// import InsertnameComponent from './components/InsertnameComponent.vue';
// app.component('v-insertname', InsertnameComponent);

// import InputComponent from './components/InputComponent.vue';
// app.component('v-input', InputComponent);

// import Lesson2Component from "./components/Lesson2Component.vue";
// app.component('v-lesson2', Lesson2Component);

import Lesson3Component from "./components/Lesson3Component.vue";
app.component('v-lesson3', Lesson3Component);

const vm = app.mount('#app');
