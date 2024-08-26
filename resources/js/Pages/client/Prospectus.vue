<script setup>
import ClientPageLayout from "../../Layouts/ClientPageLayout.vue";
import Searchbar from "../../Components/Searchbar.vue";
const props = defineProps({
  courses: Object,
});

console.log(props.data);
</script>

<template>
  <Head title="Prospectus" />
  <ClientPageLayout>
    <v-container>
      <Searchbar />
      <v-table class="border border-indigo-400 rounded">
        <thead>
          <tr class="bg-indigo">
            <th class="text-left" width="200">Course Code</th>
            <th class="text-left">Course Name</th>
            <th class="text-left">Year Available</th>
          </tr>
        </thead>
      
        <tbody>
          <tr v-for="course in props.courses.data" :key="course.id">
            <td>{{ course.course_code }}</td>
            <td>{{ course.course_name }}</td>
            <td>{{ course.year_level }}</td>
          </tr>
        </tbody>
      </v-table>
      

      <div class="flex justify-center mt-4"> <!-- Flexbox for centering -->
        <Link
          v-for="link in props.courses.links"
          :key="link.label"
          :href="link.url"
          v-html="link.label"
          :class="{
            'bg-indigo-500 text-white': link.active,  // Active link styles
            'border-gray-300 text-gray-700': !link.active // Inactive link styles
          }"
          class="border p-2 mx-1 rounded"
        >
        </Link>
      </div>
    </v-container>
  </ClientPageLayout>
</template>
