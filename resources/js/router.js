import VueRouter from 'vue-router'
import axios from 'axios';

const routes = [

    { path: '/register', component: './components/Dashboard.vue' },
    { path: '/login', component: './components/Login.vue' },
    { path: '/', component: './component/Dashboard.vue'},
]


export default router;