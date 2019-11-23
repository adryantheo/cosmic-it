window.vue = require('vue');
import Vue from 'vue'
import Vuetify from 'vuetify'
import router from './router.js'
import axios from 'axios'

Vue.use(router);

window.EventBus=new Vue();
window.axios= axios.create();

Vue.use(Vuetify,{
    iconfont: "md",
})
// import User from './components/helpers/User';
// Vue.prototype.$user= User;
import AppRoot from './components/AppRoot';
const vue = new Vue({
    el: '#app',
    router,
    Vuetify,
    components:{
        AppRoot,
    }  
})