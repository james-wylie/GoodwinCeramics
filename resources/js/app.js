import Vue from 'vue'
import VueRouter from 'vue-router'
import backend from './components/backend.vue'

import _ from 'lodash'

import { routes } from './routes'

require('./bootstrap');

// window.Vue = require('vue');

Vue.use(VueRouter)

const router = new VueRouter({
    mode: 'history',
    routes
})

//CMS Components
Vue.component('backend', require('./components/backend.vue').default)
Vue.component('addproduct', require('./components/addproduct.vue').default)
Vue.component('editproduct', require('./components/editproduct.vue').default)
Vue.component('products-list', require('./components/products-list.vue').default)
Vue.component('viewProduct', require('./components/ClientSide/viewProduct.vue').default)

// Client Side Components
Vue.component('clientViewProductList', require('./components/ClientSide/clientViewProductList.vue').default, {props: {id: {type: Number, default: 1}}})
Vue.component('home', require('./components/ClientSide/home.vue').default)
Vue.component('contact', require('./components/ClientSide/contact.vue').default)
Vue.component('about', require('./components/ClientSide/about.vue').default)
Vue.component('shop', require('./components/ClientSide/shop.vue').default)
Vue.component('navBar', require('./components/ClientSide/navBar.vue').default)

const app = new Vue({
    el: '#app',
    router
});
