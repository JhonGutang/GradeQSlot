<script setup>
import { ref } from "vue";
import AdminPageLayout from "../../Layouts/AdminPageLayout.vue";

const isButtonClicked = ref(false);
defineProps({
  documentRequests: {
    type: Object,
    required: true,
  },
});

function displayModal() {
  isButtonClicked.value = true;
}
</script>


<template>
  <AdminPageLayout>
    <v-container>
      <Link :href="route('admin.requests')">
        <v-btn>
          <v-icon>mdi-arrow-left</v-icon>
        </v-btn>
      </Link>
    </v-container>
    <v-sheet width="100%" height="600" class="mx-auto d-flex justify-center">
      <v-card width="700" height="470" class="pb-10">
        <v-sheet color="primary ">
          <v-card-title class="pt-4">
            Requesting
            {{
              documentRequests.document_id === 3
                ? documentRequests.specify_other_document
                : documentRequests.document.name
            }}
          </v-card-title>
          <v-card-subtitle class="pb-2 d-flex justify-between">
            <div>Requested By: {{ documentRequests.student.name }}</div>
            <div>
              Status:
              <span color="orange-darken-2">{{ documentRequests.status }}</span>
            </div>
          </v-card-subtitle>
        </v-sheet>

        <v-card-text class="border mb-4" style="height: 300px">
          <div class="d-flex flex-col">
            <div class="font-weight-bold mb-7">Reason of Request</div>
            <div class="mx-auto">
              {{ documentRequests.request_reason }}
            </div>
          </div>
        </v-card-text>
        <v-card-actions class="d-flex justify-center">
          <v-btn color="success" @click="displayModal" class="font-weight-bold"
            >Approve</v-btn
          >
          <v-btn color="error" @click="displayModal" class="font-weight-bold">Decline</v-btn>
        </v-card-actions>
      </v-card>
    </v-sheet>

    <v-dialog v-model="isButtonClicked" width="auto">
      <v-card
        width="700"
        height="700"
        prepend-icon="mdi-email"
        title="Responding Requests"
      >
      <v-card-subtitle>
        <div>From Admin</div>
        <div>To Admin</div>
        <div>Subject: In Response to Requesting {{  documentRequests.document_id === 3
          ? documentRequests.specify_other_document
          : documentRequests.document.name }}</div>
      </v-card-subtitle>
      <v-card-text>
        <v-textarea  counter no-resize>
        </v-textarea>
        <v-container height="100">
          <div>Select Schedule for Release</div>
          <v-date-input label="Date input"  clearable width="300" prepend-icon="" append-inner-icon="mdi-calendar"></v-date-input>
        </v-container>
      </v-card-text>
        <v-card-actions>
          <v-btn class="bg-success"
            @click="isButtonClicked = false"
          >Submit</v-btn>
          <v-btn class="bg-indigo"
            @click="isButtonClicked = false"
          >Close</v-btn>
        </v-card-actions>
      </v-card>
    </v-dialog>
  </AdminPageLayout>
</template>
