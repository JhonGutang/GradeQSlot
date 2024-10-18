<script setup>
import Sidebar from './Components/Sidebar.vue';
import Header from './Components/Header.vue';


const navLinks = [
  { title: 'Home', route: '/student' },
  { title: 'Profile', route: '/student/profile'},
  { title: 'Prospectus', route: '/student/prospectus' },
  { title: 'Inquire', route: '/student/inquire'},
];

</script>

<template>
    <Sidebar :navLinks="navLinks" :sidebarWidth="200">
        <Header/>
        <slot>

        </slot>
    </Sidebar>
</template>

