

require('./bootstrap');

import Vue from 'vue';
import VueRouter from 'vue-router';
Vue.use(VueRouter);


//var item = ;
const routes = [
	{path: '/home3', name: 'home3', component: require('./components/Items3.vue').default},
	{path: '/home2', name: 'home2', component: require('./components/Items2.vue').default},
	{path: '/home', name: 'items', component: require('./components/Items.vue').default}
];

const router = new VueRouter({
   routes, // short for `routes: routes`
   mode:'history'
});

//Vue.component('items', require('./components/Items.vue'));

const app = new Vue({
    el: '#app',
    router,
});
