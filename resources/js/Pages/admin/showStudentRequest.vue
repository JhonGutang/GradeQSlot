<script setup>
import AdminPageLayout from "../../Layouts/AdminPageLayout.vue";
defineProps({
  documentRequests: {
    type: Object,
    required: true,
  },
  // documentRequests: {
  //   type: Object,
  //   required: true,
  // }
});
</script>


<template>
  <AdminPageLayout>
    <v-table>
      <thead>
        <tr>
          <th class="text-left">Document Id</th>
          <th class="text-left">Student Name</th>
          <th class="text-left">Document Name</th>
          <th class="text-left">Reason</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td> {{ documentRequests.id}} </td>
          <td> {{ documentRequests.student.name}} </td>
          <td v-if="documentRequests.other_document_details"> {{ documentRequests.document.name + ": " + documentRequest.other_document_details}} </td>
          <td v-else> {{ documentRequests.document.name}} </td>
          <td> {{ documentRequests.request_reason}} </td>
        </tr>
      </tbody>
    </v-table>
  </AdminPageLayout>
</template>
