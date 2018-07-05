
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import 'vue-good-table/dist/vue-good-table.css'
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

import BootstrapVue from 'bootstrap-vue'

Vue.use(BootstrapVue);

import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'

Vue.use(require('vue-moment'));

Vue.component('projects-index',require('./components/projects/projects-index.vue'));
Vue.component('project-view',require('./components/projects/project-view.vue'));
Vue.component('person-index-component', require('./components/persons/PersonIndexComponent.vue'));

const app = new Vue({
    el: '#app',

});
