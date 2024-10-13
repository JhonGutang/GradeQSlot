<script setup>
import Sidebar from '../Components/Sidebar.vue';
import Header from '../Components/Header.vue';


const navItems = [
  { title: 'Home', route: '/student/home' },
  { title: 'Profile', route: '/student/profile'},
  { title: 'Prospectus', route: '/student/prospectus' },
  { title: 'Inquire', route: '/student/home'},
];

</script>

<template>
    <Sidebar :navItems="navItems" :sidebarWidth="200">
        <Header/>
        <slot>
            
        </slot>
    </Sidebar>
</template>

