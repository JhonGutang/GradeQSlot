import { createRouter, createWebHistory } from "vue-router";

const routes = [
    {
        path: "/",
        component: () => import("./Pages/Homes.vue"),
        meta: { title: 'Home | GradeQSlot' }, 
    },
    {
        path: "/login",
        component: () => import("./Pages/auth/Login.vue"),
        meta: { title: 'Login | GradeQSlot' }, 
    },
    {
        path: "/register",
        component: () => import("./Pages/auth/Register.vue"),
        meta: { title: 'Register | GradeQSlot' }, 
    },
    {
        path: "/student",
        component: () => import("./Pages/client/Home.vue"),
        meta: { title: 'Dashboard | GradeQSlot' }, 
    },
    {
        path: "/student/profile",
        component: () => import("./Pages/client/Profile.vue"),
        meta: { title: 'Profile | GradeQSlot' }, 
    },
    {
        path: "/student/prospectus",
        component: () => import("./Pages/client/Prospectus.vue"),
        meta: { title: 'Prospectus | GradeQSlot' }, 
    },
    {
        path: "/student/inquire",
        component: () => import("./Pages/client/Inquire.vue"),
        meta: { title: 'Inquire | GradeQSlot' }, 
    },
    {
        path: "/admin",
        component: () => import("./Pages/admin/Home.vue"),
        meta: { title: 'Dashboard | GradeQSlot' }, 
    },
    {
        path: "/admin/studentInfo",
        component: () => import("./Pages/admin/StudentInformation.vue"),
        meta: { title: 'Student Info | GradeQSlot' }, 
    },
    {
        path: "/admin/request",
        component: () => import("./Pages/admin/Requests.vue"),
        meta: { title: 'Requests | GradeQSlot' }, 
    },
];


const router = createRouter({
    history: createWebHistory(),
    routes,
});

router.beforeEach((to, from, next) => {

    if (to.meta.title) {
        document.title = to.meta.title;
    } else {
        document.title = 'Default Title';
    }
    next();
});

export default router;
