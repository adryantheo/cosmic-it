import Vue from 'vue'
import Vuetify from 'vuetify'
import VueRouter from 'vue-router'
import router from './router.js'

Vue.use(router);
window.vue= require('vue)';
window.EventBus= ;
window.axios= create.axios();

Vue.use(Vuetify({
    theme:'#FFFFFF',
    iconfont: 'md',
}))
import User from '';

Vue.prototype.$user= User;
const vue = new Vue({
    el: '#app',
    router,
    component: './AppRoot'
})