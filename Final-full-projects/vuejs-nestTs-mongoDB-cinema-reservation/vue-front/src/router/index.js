import Vue from "vue";
import VueRouter from "vue-router";
import HomeView from "../views/HomeView.vue";
import MoviesIdView from "../views/MoviesIdView.vue";
import RegisterView from "../views/RegisterView.vue";
import HomePageView from "../views/HomePageView.vue";
import MyProfileView from "../views/MyProfileView.vue";
import LoginView from "../views/LoginView.vue";
import AdminView from "../views/AdminView.vue";

import MyUsersView from "../views/MyUsersView.vue";

Vue.use(VueRouter);

const routes = [
  {
    path: "/",
    name: "myhome",
    component: HomeView,
  },

  {
    path: "/Register",
    name: "Register",
    component: RegisterView,
  },
  {
    path: "/Login",
    name: "Login",
    component: LoginView,
  },

  {
    path: "/Home",
    name: "HomePage",
    component: HomePageView,
  },
  {
    path: "/Admin",
    name: "Admin",
    component: AdminView,
  },
  {
    path: "/MyUsers",
    name: "MyUsers",
    component: MyUsersView,
  },

  {
    path: "/MyProfile/:id", //
    name: "MyProfile",
    component: MyProfileView,
  },
  {
    path: "/:id",
    name: "MoviesId",
    component: MoviesIdView,
  },
];

const router = new VueRouter({
  mode: "history",
  base: process.env.BASE_URL,
  routes,
});

export default router;
