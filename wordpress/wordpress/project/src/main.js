import Vue from "vue";
import "./plugins/axios";
import App from "./App.vue";
import vuetify from "./plugins/vuetify";
import router from "./router";
import axios from "axios";
import store from "./store";
import 'animate.css';

axios.defaults.withCredentials = true;
Vue.config.productionTip = false;

new Vue({
  store,
  axios,
  vuetify,
  router,
  render: (h) => h(App),
}).$mount("#app");

// WORDPRESS APIKEY PASSWORD = Vc4k ItZt BwDG jAqd nJRs xgIM
