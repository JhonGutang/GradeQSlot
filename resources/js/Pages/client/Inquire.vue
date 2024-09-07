<script setup>
import { useForm } from "@inertiajs/inertia-vue3";
import ClientPageLayout from "../../Layouts/ClientPageLayout.vue";
import { ref } from "vue";

const isRequesting = ref();

defineProps({
  auth: {
    type: Object,
    required: true, // if this prop is required
  },
  student: {
    type: Object,
    required: true,
  },
  documents: {
    type: Object,
    required: true,
  },
});

const form = useForm({
  documentType: null,
  otherDocument: null,
  stateReason: null,
});

const handleDocumentChange = () => {
  if (form.documentType !== 3) {
    otherDocument.value = "";
    console.log(form.documentType);
  }
};

function onSubmit(id) {
  console.log(form);
  form.post("/client/inquire/" + id);
}

function displayRequestDocumentModal() {
  isRequesting.value = true;
}

function closeRequestDocumentModal() {
  isRequesting.value = false;
}
</script>

<template>
  <Head title="Inquire" />
  <ClientPageLayout>
    <div>
      <div class="d-flex justify-end pe-10 mb-10" >
        <v-btn @click="displayRequestDocumentModal" color="primary" flat>Request Document</v-btn>
      </div>
  
      <v-dialog v-model="isRequesting" max-width="700">
        <v-sheet>
          <v-form class="border pa-5" @submit.prevent="onSubmit(student.id)">
            <div class="text-h5 font-weight-bold text-center mb-10 d-flex justify-between">
              Inquire Documents
              <v-btn @click="closeRequestDocumentModal" flat color="red">
                <v-icon>mdi-close</v-icon>
              </v-btn>
            </div>
  
            <div class="d-flex flex-row mb-4">
              <div class="text-body-2 font-weight-bold me-5">Choose Document</div>
              <v-select
                v-model="form.documentType"
                :items="documents"
                item-title="name"
                item-value="id"
                item-text="name"
                label="Choose Document"
                outlined
                @change="handleDocumentChange"
                :rules="[v => !!v || 'Document is required']"
              ></v-select>
            </div>
  
            <!-- Conditionally display "Other" document input field -->
            <v-container v-if="form.documentType === 3" class="d-flex flex-row mb-4">
              <div class="text-body-2 font-weight-bold me-5">Others:</div>
              <v-text-field
                v-model="form.otherDocument"
                label="Please specify"
                outlined
              ></v-text-field>
            </v-container>
  
            <div class="d-flex flex-row mb-4">
              <div class="text-body-2 font-weight-bold me-5">State Reason:</div>
              <v-textarea
                v-model="form.stateReason"
                label="State your reason"
                outlined
                rows="4"
              ></v-textarea>
            </div>
  
            <div align="end">
              <v-btn type="submit" color="success">Submit</v-btn>
            </div>
          </v-form>
        </v-sheet>
      </v-dialog>
    </div>

    <v-table>
      <thead>
        <tr>
          <th class="text-left">Document Id</th>
          <th class="text-left">Document Name</th>
          <th class="text-left">Request Reason</th>
          <th class="text-left">Status</th>
        </tr>
      </thead>
      <tbody>
        <tr
          v-for="documentRequest in student.document_requests"
          :key="documentRequest.id"
        >
          <td>{{ documentRequest.id }}</td>
          <td>{{ documentRequest.document.name }}</td>
          <td>{{ documentRequest.request_reason }}</td>
          <td>{{ documentRequest.status }}</td>
        </tr>
      </tbody>
    </v-table>
  </ClientPageLayout>
</template>




<style scoped>
.fade-enter-active,
.fade-leave-active {
  transition: opacity 0.5s;
}
.fade-enter,
.fade-leave-to {
  opacity: 0;
}
</style>