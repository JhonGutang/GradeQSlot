<script setup>
import Sidebar from '../Components/Sidebar.vue';
import Header from '../Components/Header.vue';

const navItems = [
  { title: 'Home', route: "/admin" },
  { title: 'Student Information', route: "/admin/studentInformation"},
  { title: 'Requests', route: "/admin/requests"},
];

</script>

<template>
    <Sidebar :navItems="navItems" :sidebarWidth="250">
        <Header/>
        <slot>
            
        </slot>
    </Sidebar>
</template>

