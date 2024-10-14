<!-- Main Component -->
<script setup>
import ClientPageLayout from "../../Layouts/ClientPageLayout.vue";
import Searchbar from "../../Components/Searchbar.vue";
import { ref, computed, onMounted } from 'vue';


const courses = ref([]);

const fetchCourses = async() => {
  const response = await axios.get('api/student/prospectus')
  courses.value = response.data.data
  console.log(courses.value)
}


const searchQuery = ref('');


const filteredCourses = computed(() => {
  if (!searchQuery.value) {
    return courses.value;
  }
  return courses.value.filter(course =>
    course.course_name.toLowerCase().includes(searchQuery.value.toLowerCase()) ||
    course.course_code.toLowerCase().includes(searchQuery.value.toLowerCase()) 
  );
});

const handleSearch = (query) => {
  searchQuery.value = query;
};

onMounted(()=> {
  fetchCourses()
})
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
            <th class="text-left">Grades</th>

          </tr>
        </thead>
        <tbody>
          <tr v-for="(course, index) in filteredCourses" :key="index">
            <td>{{course.course_code}}</td>
            <td>{{course.course_name}}</td>
          </tr>
        </tbody>
      </v-table>
    </v-container>
  </ClientPageLayout>
</template>
