
import 'babel-polyfill'
import Vue from 'vue'
import BootstrapVue from 'bootstrap-vue'


Vue.use(BootstrapVue);

Vue.component('properties-component', require('./components/properties_admin/properties.vue'));

const app = new Vue({
    el: '#app'
});