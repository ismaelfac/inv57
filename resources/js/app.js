require('./bootstrap');
import 'babel-polyfill'
import Vue from 'vue'
import EventBus from './event-bus'
import ToggleButton from 'vue-js-toggle-button'
import * as VueGoogleMaps from 'vue2-google-maps'
import vSelect from 'vue-select'

Vue.use(ToggleButton)
window.EventBus = EventBus
Vue.component('v-select', vSelect)
Vue.use(VueGoogleMaps, {
  load: {
    key: 'AIzaSyDS43cFcBtUkfOzix_kD5DVl_q7oI8t-N4'
  }
});
Vue.component('propertieshome-component', require('./components/properties_client/properties_home.vue'));
Vue.component('property-component', require('./components/properties_client/properties.vue'));
Vue.component('blog-component', require('./components/needs/blog.vue'));

const app = new Vue({
  el: '#app'
});