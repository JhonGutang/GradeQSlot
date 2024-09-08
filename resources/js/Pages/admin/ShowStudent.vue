<script setup>
import AdminPageLayout from "../../Layouts/AdminPageLayout.vue";
import StudentProspectus from "../../Components/StudentProspectus.vue";
import { ref } from "vue";

const studentProfile = ref(true);
const prospectus = ref(false);
defineProps({
  studentInfos: {
    type: Object,
    required: true,
  },
});
</script>


<template>
  <AdminPageLayout>
    <div class="d-flex justify-end px-5">
      <v-btn
        :color="studentProfile ? 'blue' : 'white'"
        @click="(prospectus = false), (studentProfile = true)"
        class="me-5"
      >
        Student Profile
      </v-btn>
      <v-btn
        :color="prospectus ? 'blue' : 'white'"
       @click="(prospectus = true), (studentProfile = false)">
        Prospectus
      </v-btn>
    </div>
    <v-container v-if="studentProfile">
      <v-container class="d-flex flex-row">
        <div class="text-h5 me-10">Student Profile</div>

      </v-container>
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
    </v-container>
    <StudentProspectus
      :prospectus="studentInfos.coursesWithGrades"
      v-if="prospectus"
    />
  </AdminPageLayout>
</template>
