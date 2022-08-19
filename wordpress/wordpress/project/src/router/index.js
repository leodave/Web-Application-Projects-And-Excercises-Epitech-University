import Vue from "vue";
import VueRouter from "vue-router";
import DashboardView from "../views/DashboardView.vue";
import PostView from "@/views/PostView.vue";
import HomeView from "@/views/HomeView.vue";
import RegisterView from "@/views/RegisterView.vue";
import GoodByeView from "@/views/GoodByeView.vue";

Vue.use(VueRouter);

const routes = [
  {
    path: "/",
    name: "HomeView",
    component: HomeView,
    props: true,
    beforeEnter: (to, from, next) => {
      if(localStorage.getItem('isLoggedIn') !== "true"){
        next()
      } else{
        next({ name: 'allposts'})
      }
    }
  },
  {
    path: "/register",
    name: "register",
    component: RegisterView,
  },
  {
    path: "/goodbye",
    name: "goodbye",
    component: GoodByeView,
  },
  {
    path: "/dashboard",
    name: "dashboard",
    component: DashboardView,
    props: true,
    beforeEnter: (to, from, next) => {
      if(localStorage.getItem('isLoggedIn') == "true"){
        next()
      } else{
        next({ name: 'HomeView'})
      }
    }
  },
  {
    path: "/allposts",
    name: "allposts",
    component: () =>
      import("../views/AllPostsView.vue"),
    props: true,
    beforeEnter: (to, from, next) => {
      if(localStorage.getItem('isLoggedIn') == "true"){
        next()
      } else{
        next({ name: 'HomeView'})
      }
    }
  },
  {
    path: "/post/:id",
    name: "post",
    component: PostView,
    props: true,
    beforeEnter: (to, from, next) => {
      if(localStorage.getItem('isLoggedIn') == "true"){
        next()
      } else{
        next({ name: 'HomeView'})
      }
    }
  },
];

const router = new VueRouter({
  mode: "history",
  base: process.env.BASE_URL,
  routes,
});

export default router;
