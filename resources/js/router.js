import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)
const routes = [
    {
        path: '/', component: () => import('./components/AppRoot.vue' /*webpackChunkName: "js/AppRoot.vue" */)
    },
    {
        path: '/login', component: () => import('./components/Login.vue' /*webpackChunkName: "js/Login.vue" */)
    },
    // {
    //     path: '/register', component: () => import('./components/Register.vue' /*webpackChunkName: "js/Home.vue" */)
    // }
]

const router = new VueRouter({
    routes,
    hashbang: false,
    mode: 'history',
})

// import User from './components/helpers/User';

// router.beforeEach(async (to, from, next) => {
//     if(to.matched.some(route => route.meta.requiresAuth)){
//         if(!User.loggedIn()){
//             next({path: '/login', replace: true})
//             return
//         }
//     }
//     if(to.path === "/login" || to.path === "/register"){
//         if(User.loggedIn()){
//             next({path: '/', replace: true})
//             return
//         }
//     }
//     next();
// })

export default router;


