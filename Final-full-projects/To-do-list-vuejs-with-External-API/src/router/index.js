import Vue from "vue";
import VueRouter from "vue-router";
import HomeView from "../views/HomeView.vue";
import NotesDetailsView from "../views/NotesDetailsView.vue";
import AllNotesView from "../views/AllNotesView.vue";
import AddNotesView from "../views/AddNotesView.vue";

Vue.use(VueRouter);

const routes = [
  {
    path: "/",
    name: "MyHome",
    component: HomeView,
  },
  {
    path: "/about",
    name: "about",
    // route level code-splitting
    // this generates a separate chunk (about.[hash].js) for this route
    // which is lazy-loaded when the route is visited.
    component: () =>
      import(/* webpackChunkName: "about" */ "../views/AboutView.vue"),
  },
  {
    path: "/addnotes",
    name: "addnotes",
    component: AddNotesView,
  },
  {
    path: "/notes",
    name: "notes",
    component: AllNotesView,
  },
  {
    path: "/notes/:id",
    name: "notesdetail",
    component: NotesDetailsView,
    props: true,
  },
  //{
  //path: "/.catchAll(.*)",
  // name: "notfound",
  // component: NotFound,
  // },
];

const router = new VueRouter({
  mode: "history",
  base: process.env.BASE_URL,
  routes,
});

export default router;
