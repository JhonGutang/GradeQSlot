<script setup>
import AdminPageLayout from "../../Layouts/AdminPageLayout.vue";
import Searchbar from "../../Components/Searchbar.vue";
import { ref, computed, onMounted } from "vue";

const students = ref([]);
const searchQuery = ref("");


const fetchStudents = async () => {
  const response = await axios.get("/api/students");
  students.value = response.data.data
};


const filteredStudents = computed(() => {
  if (!searchQuery.value) {
    return students.value;
  }
  return students.value.filter(
    (student) =>
      student.name.toLowerCase().includes(searchQuery.value.toLowerCase()) ||
      student.email.toLowerCase().includes(searchQuery.value.toLowerCase())
  );
});

const handleSearch = (query) => {
  searchQuery.value = query;
};

onMounted(() => {
  fetchStudents()
})
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
            <tr>
              <td>{{student.id}}</td>
              <td>{{student.name}}</td>
              <td>{{student.gender}}</td>
              <td>{{student.email}}</td>
            </tr>
          </template>
        </tbody>
      </v-table>
    </v-container>
  </AdminPageLayout>
</template>
