import Vue from 'vue'
import Vuetify from 'vuetify'
import VueRouter from 'vue-router'
import router from './router.js'

Vue.use(router);

window.EventBus();

Vue.use(Vuetify({
    theme:'#FFFFFF',
    iconfont: 'md',
}))

const vue = new Vue({
    el: '#app',
    router,
    component: './AppRoot'
})