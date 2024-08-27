<script setup>
import Sidebar from '../Components/Sidebar.vue';
import Header from '../Components/Header.vue';

const navItems = [
  { title: 'Home', route: route('admin.home') },
  { title: 'Student Information', route: route('admin.studentInfo') },
  { title: 'Requests', route: route('admin.requests') },
];

</script>

<template>
    <Sidebar :navItems="navItems" :sidebarWidth="210">
        <Header/>
        <slot>
            
        </slot>
    </Sidebar>
</template>

