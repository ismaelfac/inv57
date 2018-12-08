import 'babel-polyfill'
import Vue from 'vue'
import store from './store'
import { currency } from './currency'

Vue.filter('currency', currency)

Vue.component('App', require('./components/ShoppingCart/App.vue'));
Vue.component('app-clients', require('./components/Clients/App.vue'));

const app = new Vue({
  el: '#app',
  store
});