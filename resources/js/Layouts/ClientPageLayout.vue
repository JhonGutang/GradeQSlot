<script setup>
import Sidebar from '../Components/Sidebar.vue';
import Header from '../Components/Header.vue';

const navItems = [
  { title: 'Home', route: route('client.home') },
  { title: 'Profile', route: route('client.profile') },
  { title: 'Prospectus', route: route('client.prospectus') },
  { title: 'Inquire', route: route('client.inquire') },
];

</script>

<template>
    <Sidebar :navItems="navItems" :sidebarWidth="200">
        <Header/>
        <slot>
            
        </slot>
    </Sidebar>
</template>

