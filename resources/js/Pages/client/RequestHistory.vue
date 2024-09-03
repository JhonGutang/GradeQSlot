<script setup>
import ClientPageLayout from '../../Layouts/ClientPageLayout.vue';
defineProps({
    student: {
        type: Object,
        required: true,
    }
})
</script>


<template>
    <ClientPageLayout>

        <v-table>
          <thead>
            <tr>
              <th class="text-left">
                Document Id
              </th>
              <th class="text-left">
                Document Name
              </th>
              <th class="text-left">
                Request Reason
              </th>
              <th class="text-left">
                Status
              </th>
            </tr>
          </thead>
          <tbody>
            <tr
              v-for="document in student.document_requests"
              :key="document.id"
            >
              <td>{{ document.id }}</td>
              <td>{{ document.document.name }}</td>
              <td>{{ document.request_reason }}</td>
              <td>{{ document.status }}</td>
            </tr>
          </tbody>
        </v-table>
    </ClientPageLayout>
  </template>