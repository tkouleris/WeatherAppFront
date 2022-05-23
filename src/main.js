import Vue from 'vue'
import App from './App.vue'
import axios from 'axios'
import router from './router.js'
import VueAxios from 'vue-axios'
import VueRouter from "vue-router";
Vue.config.productionTip = false

Vue.use(VueAxios, axios)
Vue.use(VueRouter);

new Vue({
  router,
  render: h => h(App),
}).$mount('#app')
