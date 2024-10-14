<script setup>
import AdminPageLayout from "../../Layouts/AdminPageLayout.vue";
import Searchbar from "../../Components/Searchbar.vue";
import { ref, computed } from "vue";


const searchQuery = ref("");


// const filteredStudents = computed(() => {
//   if (!searchQuery.value) {
//     return props.students.data;
//   }
//   return props.students.data.filter(
//     (student) =>
//       student.name.toLowerCase().includes(searchQuery.value.toLowerCase()) ||
//       student.email.toLowerCase().includes(searchQuery.value.toLowerCase())
//   );
// });

// const handleSearch = (query) => {
//   searchQuery.value = query;
// };


</script>

<template>
  <Head title="Student Info" />
  <AdminPageLayout>
    <v-container>
      <Searchbar @search="handleSearch" />
      <v-table class="border border-indigo-400 rounded">
        <thead>
          <tr class="bg-indigo">
            <th class="text-left" width="200">Student Id</th>
            <th class="text-left">Student Name</th>
            <th class="text-left">Gender</th>
            <th class="text-left">Email</th>
          </tr>
        </thead>
        <tbody>
          <template v-for="student in filteredStudents" :key="student.id">

          </template>
        </tbody>
      </v-table>

    </v-container>
  </AdminPageLayout>
</template>
