import { createRouter, createWebHistory } from "vue-router";
import { components } from "vuetify/dist/vuetify-labs.js";

const routes = [
    {
        path: "/",
        component: () => import("./Pages/Homes.vue"),
    },
    {
        path: "/login",
        component: () => import("./Pages/auth/Login.vue"),
    },
    {
        path: "/register",
        component: () => import("./Pages/auth/REgister.vue"),
    },
    {
        path: "/student/home",
        component: () => import("./Pages/client/Home.vue"),
    },
    {
        path: "/student/prospectus",
        component: () => import("./Pages/client/Prospectus.vue"),
    },
];

export default createRouter({
    history: createWebHistory(),
    routes,
});
