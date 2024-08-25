<script setup>
import Sidebar from '../Components/Sidebar.vue';
import Header from '../Components/Header.vue';
</script>

<template>
    <Sidebar>
        <Header/>
        <slot>
            
        </slot>
    </Sidebar>
</template>