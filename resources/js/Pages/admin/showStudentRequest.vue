<script setup>
import AdminPageLayout from "../../Layouts/AdminPageLayout.vue";
defineProps({
  documentRequests: {
    type: Object,
    required: true,
  }
});
</script>


<template>
  <AdminPageLayout>
    <v-sheet width="100%" height="600" class="mx-auto border d-flex justify-center align-center" >
      <v-card width="700" height="500" class="py-10 px-4">
        <v-card-title>
          {{
            documentRequests.document_id === 3
              ? documentRequests.specify_other_document
              : documentRequests.document.name
          }}
        </v-card-title>
        <v-card-subtitle class="mb-3 d-flex justify-between">
          <div>
            Requested By: {{ documentRequests.student.name }}
          </div>
          <div>
            Status: <span>{{ documentRequests.status }}</span> 
          </div>
        </v-card-subtitle>

        <v-card-text class="border mb-4" style="height: 300px;">
          <div class="d-flex flex-col">
            <div class="font-weight-bold mb-7">
              Reason of Request
            </div>
            <div class="mx-auto">
              {{ documentRequests.request_reason }}
            </div>
          </div>
        </v-card-text>
        <v-card-actions class="d-flex justify-center">
          <v-btn color="success" class="font-weight-bold">Approve</v-btn>
          <v-btn color="error" class="font-weight-bold">Decline</v-btn>
          
        </v-card-actions>
      </v-card>
    </v-sheet>
  </AdminPageLayout>
</template>
