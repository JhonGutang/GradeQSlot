<!-- Main Component -->
<script setup>
import ClientPageLayout from "../../Layouts/ClientPageLayout.vue";
import Searchbar from "../../Components/Searchbar.vue";
import { ref, computed } from 'vue';

const props = defineProps({
  courses: Object,
});

// Reactive state for the search query
const searchQuery = ref('');

// Computed property to filter courses based on the search query
const filteredCourses = computed(() => {
  if (!searchQuery.value) {
    return props.courses.data;
  }
  return props.courses.data.filter(course =>
    course.course_name.toLowerCase().includes(searchQuery.value.toLowerCase()) ||
    course.course_code.toLowerCase().includes(searchQuery.value.toLowerCase()) 
  );
});

// Method to handle search event from the Searchbar component
const handleSearch = (query) => {
  searchQuery.value = query;
};
</script>

<template>
  <Head title="Prospectus" />
  <ClientPageLayout>
    <v-container>
      <Searchbar @search="handleSearch" />
      <v-table class="border border-indigo-400 rounded">
        <thead>
          <tr class="bg-indigo">
            <th class="text-left" width="200">Course Code</th>
            <th class="text-left">Course Name</th>
            <th class="text-left">Year Available</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="course in filteredCourses" :key="course.id">
            <td>{{ course.course_code }}</td>
            <td>{{ course.course_name }}</td>
            <td>{{ course.year_level }}</td>
          </tr>
        </tbody>
      </v-table>

      <div class="flex justify-center mt-4">
        <Link
          v-for="link in props.courses.links"
          :key="link.label"
          :href="link.url"
          v-html="link.label"
          :class="{
            'bg-indigo-500 text-white': link.active,
            'border-gray-300 text-gray-700': !link.active
          }"
          class="border p-2 mx-1 rounded"
        />
      </div>
    </v-container>
  </ClientPageLayout>
</template>
