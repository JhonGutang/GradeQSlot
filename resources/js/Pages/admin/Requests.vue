<script setup>
import { ref } from "vue";
import AdminPageLayout from "../../Layouts/AdminPageLayout.vue";
defineProps({
  document_requests: {
    type: Object,
    required: true,
  },
  request_history: {
    type: Object,
    required: true
  }
});

const formatDate = (dateString) => {
  const options = {
    hour: "2-digit",
    minute: "2-digit",
    hour12: false,
    year: "numeric",
    month: "short",
    day: "numeric",
  };
  // Ensure the date string is parsed correctly
  const date = new Date(dateString);
  return date.toLocaleString("en-US", options); // Format and return the date
};

const isHistory = ref(false); // Track the current view


function buttonToggle() {
  isHistory.value = !isHistory.value; // Toggle between true and false
}


</script>


<template>
  <AdminPageLayout>
<v-container v-if="isHistory">
  <v-container align="end" >
    <!-- <v-btn color="warning" @click="buttonToggle">
      Request
    </v-btn> -->
  </v-container>
  <v-container>
    <v-table class="border border-indigo-400 rounded">
      <thead>
        <tr class="bg-indigo">
          <th class="text-left" width="60">Document Id</th>
          <th class="text-left">Student Name</th>
          <th class="text-left">Document Requested</th>
          <th class="text-left">Date Requested</th>
          <th class="text-left">Status</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="request in request_history.data" :key="request.id">
          <td>{{ request.id }}</td>
          <td>{{ request.student.name }}</td>
          <td>{{ request.document.name }}</td>
          <td>{{ formatDate(request.created_at) }}</td>
          <td>{{ request.status }}</td>
        </tr>
      </tbody>
    </v-table>
    <div class="flex justify-center mt-4">
      <Link
        v-for="link in request_history.links"
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
</v-container>

<v-container v-else>

  <v-container align="end">
    <!-- <v-btn color="warning" @click="buttonToggle">
      History
    </v-btn> -->
  </v-container>
  <v-container>
    <v-table class="border border-indigo-400 rounded">
      <thead>
        <tr class="bg-indigo">
          <th class="text-left" width="60">Document Id</th>
          <th class="text-left">Student Name</th>
          <th class="text-left">Document Requested</th>
          <th class="text-left">Date Requested</th>
          <th class="text-left">Status</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="request in document_requests.data" :key="request.id">
          <td>{{ request.id }}</td>
          <td>{{ request.student.name }}</td>
          <td>{{ request.document.name }}</td>
          <td>{{ formatDate(request.created_at) }}</td>
          <td>{{ request.status }}</td>
        </tr>
      </tbody>
    </v-table>
    <div class="flex justify-center mt-4">
      <Link
        v-for="link in document_requests.links"
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
</v-container>

  </AdminPageLayout>
</template>
