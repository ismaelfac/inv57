
import 'babel-polyfill'
import Vue from 'vue'
import BootstrapVue from 'bootstrap-vue'


Vue.use(BootstrapVue);

Vue.component('properties-component', require('./components/properties_admin/properties.vue'));
Vue.component('galleries-properties', require('./components/galleries/galleries.vue'));
Vue.component('owner-properties', require('./components/owners/owners.vue'));
const app = new Vue({
    el: '#panel'
});