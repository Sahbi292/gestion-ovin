import { createRouter, createWebHistory } from "vue-router";

import Welcome from "../components/Welcome.vue";
import Login from "../components/auth/login.vue";
import Register from "../components/auth/register.vue";
import Add from "../components/sujet/add.vue";
import List from "../components/sujet/List.vue";
import Edit from "../components/sujet/Edit.vue";
import store from "../store";
const routes = [
    {
        path: "/",
        name: "home",
        component: Welcome,
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
    {
        path: "/list",
        name: "sujetList",
        component: List,
        meta: { requiresAuth: true },
    },
    {
        path: "/sujet",
        name: "sujetAdd",
        component: Add,
    },
    
    {
        path: "/sujet/:identifiant/edit",
        name: "sujetEdit",
        props: true,

        component: Edit,
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
