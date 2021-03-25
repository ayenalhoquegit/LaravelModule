require('./bootstrap');
window.Vue = require('vue');
import App from './App.vue';
// Mixin for global properties manage
/*import Mixin from './mixin';
Vue.mixin(Mixin);
*/
// vue router
import routes from './routes';

import VueRouter from 'vue-router';
Vue.use(VueRouter);
const router = new VueRouter({
	routes:routes
});

const app = new Vue({
   el: '#app',
    router,
    components:{
   		App
    }
});