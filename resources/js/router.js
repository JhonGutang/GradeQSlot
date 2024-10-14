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
        path: "/student",
        component: () => import("./Pages/client/Home.vue"),
        children: [
            {
                path: "home", 
                component: () => import("./Pages/client/Home.vue"),
            }
        ],
        redirect: "/student/home", 
    },
    
    {
        path: "/student/profile",
        component: () => import("./Pages/client/Profile.vue"),
    },
    {
        path: "/student/prospectus",
        component: () => import("./Pages/client/Prospectus.vue"),
    },
    {
        path: "/student/inquire",
        component: () => import("./Pages/client/Inquire.vue"),
    },
    {
        path: "/admin",
        component: () => import("./Pages/admin/Home.vue"),
    }
];

export default createRouter({
    history: createWebHistory(),
    routes,
});
