import { createRouter, createWebHistory } from "vue-router";

import Welcome from "../components/Welcome.vue";
import Add from "../components/sujet/Add.vue";
import Login from "../components/auth/login.vue";
import Register from "../components/auth/register.vue";
import store from "../store";
const routes = [
    {
        path: "/",
        name: "home",
        component: Welcome,
    },
    {
        path: "/post",
        name: "postAdd",
        component: Add,
    },
   
    {
        path: "/login",
        name: "login",

        component: Login,
    },
    {
        path: "/register",
        name: "register",

        component: Register,
    },
];
const router = createRouter({
    history: createWebHistory(),
    routes,
});

router.beforeEach((to, from, next) => {
    if (to.meta.requiresAuth && !store.state.user.token) {
        next({ name: "login" });
    } else {
        next();
    }
});
export default router;
