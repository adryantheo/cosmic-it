window.vue= require('vue');
import Vue from 'vue'
import Vuetify from 'vuetify'
import VueRouter from 'vue-router'
import router from './router.js'
Vue.use(router);

window.EventBus= ;
window.axios= create.axios();

Vue.use(Vuetify({
    theme:'#FFFFFF',
    iconfont: 'md',
}))
import User from './components/helpers/User';

Vue.prototype.$user= User;
const vue = new Vue({
    el: '#app',
    router,
    VueRouter,
    component: './AppRoot'
})