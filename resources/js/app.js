require('./bootstrap');

window.Vue = require('vue').default;

import VueRouter from 'vue-router';
import VueSweetAlert2 from 'vue-sweetalert2';

import Appmainvue from './components/App.vue';


import CommentIndex from './components/Comments/Index.vue';
import CommentCreate from './components/Comments/Create.vue';
import CommentEdit from './components/Comments/Edit.vue';

import CartClient from './components/Carts/Index.vue';


Vue.use(VueRouter);
Vue.use(VueSweetAlert2);
// importamos los estilos de Sweet Alert 2
import "sweetalert2/dist/sweetalert2.min.css";

const router = new VueRouter({
    mode:'history',
    routes:[
        {
            path:'/',
            component:CommentIndex,
            name:'comments.index'
        },
        {
            path:'/comments/create',
            component:CommentCreate,
            name:'comments.create'
        },
        {
            path:'/comments/edit/:id',
            component:CommentEdit,
            name:'comments.edit'
        },

    ]
})

/* Vue.component('comments-index',require('./components/Comments/Index.vue').default); */

Vue.component('pagination', require('laravel-vue-pagination'));


const app = new Vue({
    el:'#app',
    components:{Appmainvue},
    router
  });
