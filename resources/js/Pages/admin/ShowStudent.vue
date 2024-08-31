<script setup>
import AdminPageLayout from "../../Layouts/AdminPageLayout.vue";
defineProps({
  studentInfos: {
    type: Object,
    required: true,
  },
});
</script>


<template>
  <AdminPageLayout>
    <v-table>
      <thead>
        <tr>
          <th class="text-left">Student ID</th>
          <th class="text-left">Name</th>
          <th class="text-left">Email</th>
        </tr>
      </thead>
      <tbody>
        <tr v-if="studentInfos">
          <td>{{ studentInfos.id }}</td>
          <td>{{ studentInfos.name }}</td>
          <td>{{ studentInfos.email }}</td>
        </tr>
      </tbody>
    </v-table>
  </AdminPageLayout>
</template>
