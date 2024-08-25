<script setup>
import ClientPageLayout from "../../Layouts/ClientPageLayout.vue";
import Searchbar from "../../Components/Searchbar.vue";
const props = defineProps({
  courses: Object,
});

console.log(props.courses);
</script>

<template>
  <Head title="Prospectus" />
  <ClientPageLayout>
    <Searchbar/>
    <v-table>
      <thead>
        <tr>
          <th class="text-left">Course Code</th>
          <th class="text-left">Course Name</th>
          <th class="text-left">Year Available</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="course in props.courses" :key="course.id">
          <td>{{ course.course_code }}</td>
          <td>{{ course.course_name }}</td>
          <td>{{ course.year_level }}</td>
        </tr>
      </tbody>
    </v-table>
  </ClientPageLayout>
</template>

