import Vue from 'vue'
import VueRouter from 'vue-router'
import backend from './components/backend.vue'

import { routes } from './routes'

require('./bootstrap');

// window.Vue = require('vue');

Vue.use(VueRouter)

const router = new VueRouter({
    mode: 'history',
    routes
})

Vue.component('backend', require('./components/backend.vue').default);
Vue.component('addproduct', require('./components/addproduct.vue').default);
Vue.component('editproduct', require('./components/editproduct.vue').default);
Vue.component('products-list', require('./components/products-list.vue').default)


const app = new Vue({
    el: '#app',
    router
});
