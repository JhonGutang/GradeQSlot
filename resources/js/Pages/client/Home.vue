<script setup>
import ClientPageLayout from '../../Layouts/ClientPageLayout.vue';

defineProps({
    auth: Object
})
</script>

<template>
    <Head title="Home"/>
    <ClientPageLayout>
        <h1>This is Homepage boss </h1>
    </ClientPageLayout>
</template>
<!-- {{auth.student.name}} -->