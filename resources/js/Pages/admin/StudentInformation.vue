<script setup>
import AdminPageLayout from "../../Layouts/AdminPageLayout.vue";
import Searchbar from "../../Components/Searchbar.vue";
import { ref, computed } from "vue";
import { router } from "@inertiajs/vue3";

const props = defineProps({
  error: Object,
  students: Object,
});

// Reactive state for the search query
const searchQuery = ref("");

// Computed property to filter students based on the search query
const filteredStudents = computed(() => {
  if (!searchQuery.value) {
    return props.students.data;
  }
  return props.students.data.filter(
    (student) =>
      student.name.toLowerCase().includes(searchQuery.value.toLowerCase()) ||
      student.email.toLowerCase().includes(searchQuery.value.toLowerCase())
  );
});

const handleSearch = (query) => {
  searchQuery.value = query;
};

function showStudent(id) {
  router.get('/admin/studentInfo/' + id);
}
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
            <tr 
              @click="showStudent(student.student_id)" 
              :class="{
                'hover:bg-gray-300 cursor-pointer': true // Add hover and pointer styles
              }"
            >
              <td>{{ student.student_id }}</td>
              <td>{{ student.name }}</td>
              <td>{{ student.gender }}</td>
              <td>{{ student.email }}</td>
            </tr>
          </template>
        </tbody>
      </v-table>

      <div class="flex justify-center mt-4">
        <Link
          v-for="link in props.students.links"
          :key="link.label"
          :href="link.url"
          v-html="link.label"
          :class="{
            'bg-indigo-500 text-white': link.active,
            'border-gray-300 text-gray-700': !link.active,
          }"
          class="border p-2 mx-1 rounded"
        />
      </div>
    </v-container>
  </AdminPageLayout>
</template>
