import { createRouter, createWebHistory } from "vue-router";

const routes = [
    {
        path: "/",
        component: () => import("./Pages/Homes.vue"),
        meta: { title: 'GradeQSlot' }, 
    },
    {
        path: "/login",
        component: () => import("./Pages/auth/Login.vue"),
        meta: { title: 'Login | GradeQSlot', guest: true }, 
    },
    {
        path: "/register",
        component: () => import("./Pages/auth/Register.vue"),
        meta: { title: 'Register | GradeQSlot', guest: true }, 
    },
    {
        path: "/student",
        component: () => import("./Pages/client/Home.vue"),
        meta: { title: 'Home | GradeQSlot', requiresAuth: true },
    },
    {
        path: "/student/profile",
        component: () => import("./Pages/client/Profile.vue"),
        meta: { title: 'Profile | GradeQSlot', requiresAuth: true },
    },
    {
        path: "/student/prospectus",
        component: () => import("./Pages/client/Prospectus.vue"),
        meta: { title: 'Prospectus | GradeQSlot', requiresAuth: true },
    },
    {
        path: "/student/inquire",
        component: () => import("./Pages/client/Inquire.vue"),
        meta: { title: 'Inquire | GradeQSlot', requiresAuth: true },
    },
    {
        path: "/admin",
        component: () => import("./Pages/admin/Home.vue"),
        meta: { title: 'Home | GradeQSlot', requiresAuth: true, isAdmin: true },
    },
    {
        path: "/admin/studentInfo",
        component: () => import("./Pages/admin/StudentInformation.vue"),
        meta: { title: 'Student Info | GradeQSlot', requiresAuth: true, isAdmin: true },
    },
    {
        path: "/admin/request",
        component: () => import("./Pages/admin/Requests.vue"),
        meta: { title: 'Requests | GradeQSlot', requiresAuth: true, isAdmin: true },
    },
];


const router = createRouter({
    history: createWebHistory(),
    routes,
});

router.beforeEach((to, from, next) => {
    if (to.meta.title) {
        document.title = to.meta.title;
    }

    if (to.meta.requiresAuth) {
        const token = localStorage.getItem('auth_token'); 

        if (!token) {
         
            return next({ path: '/login' });
        }
    }

    if (to.meta.isAdmin) {
        const user = JSON.parse(localStorage.getItem('user')); 
        if (!user || !user.isAdmin) {
           
            return next({ path: '/student' });
        }
    }
   
    if (to.meta.guest && localStorage.getItem('auth_token')) {
      
        return next({ path: '/student' });
    }
    next();
});

export default router;
