<script setup>
import ClientPageLayout from '../../Layouts/ClientPageLayout.vue';

defineProps({
    auth: Object
})
</script>

<template>
    <Head title="Home"/>
    <ClientPageLayout>
        
         <div class="relative p-4 h-screen">
            <h1 class="text-2xl font-bold mb-6">This is Homepage boss</h1>

          
            <div class="absolute top-0 left-0 w-full md:w-1/2 bg-white p-6 rounded-lg shadow-md box-border"
                 style="top: 0; left: 0; margin-bottom: 1rem; height: calc(50vh - 1rem);">
                <h2 class="text-lg font-semibold mb-2">Box 1</h2>
                <p>for graph</p>
            </div>

         
            <div class="absolute top-0 right-0 w-full md:w-1/2 bg-white p-6 rounded-lg shadow-md box-border"
                 style="top: 0; right: 0; bottom: 0; margin-bottom: 1rem;">
                <h2 class="text-lg font-semibold mb-2">Box 3</h2>
                <p>pending req</p>
            </div>

         
            <div class="absolute bottom-0 left-0 w-full bg-white p-6 rounded-lg shadow-md box-border"
                 style="bottom: 0; left: 0; margin-top: 1rem; height: calc(50vh - 1rem);">
                <h2 class="text-lg font-semibold mb-2">Box 2</h2>
                <p>missing grdes</p>
            </div>
        </div>
    </ClientPageLayout>
</template>
<!-- {{auth.student.name}} -->