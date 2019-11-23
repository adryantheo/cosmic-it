import VueRouter from 'vue-router'
import axios from 'axios';

const routes = [

    { path: '/register', component: './components/Dashboard.vue' },
    { path: '/login', component: './components/Login.vue' },
    { path: '/', component: './component/Dashboard.vue'},
]


export default router;

import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)
const routes = [
    {
        path: '/', component: () => import('./components/Dashboard.vue' /* webpackChunkName: "js/App-Root" */), meta: {requiresAuth: true},
        children: [
            {
                path: '/', component: () => import('./components/Menu.vue'),
            },
            {
                path: 'test', component: () => import('./components/Test.vue'),
            },
        ]
    },
    {
        path: '/login', component: () => import('./components/Login.vue' /*webpackChunkName: "js/Home.vue" */)
    },
    {
        path: '/register', component: () => import('./components/Register.vue' /*webpackChunkName: "js/Home.vue" */)
    }
]

const router = new VueRouter({
    routes,
    hashbang: false,
    mode: 'history',
})

import User from './components/helpers/User';

router.beforeEach(async (to, from, next) => {
    if(to.matched.some(route => route.meta.requiresAuth)){
        if(!User.loggedIn()){
            next({path: '/login', replace: true})
            return
        }
    }
    if(to.path === "/login" || to.path === "/register"){
        if(User.loggedIn()){
            next({path: '/', replace: true})
            return
        }
    }
    next();
})

export default router;
