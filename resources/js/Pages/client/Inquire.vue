<script setup>
import ClientPageLayout from "../../Layouts/ClientPageLayout.vue";
import DocumentRequestModal from "../../Components/DocumentRequestModal.vue";
import { ref } from "vue";

const isRequesting = ref(false);
const documentId = ref("");
const isClicked = ref(false);
const isConfirmationVisible = ref(false);


const handleDocumentChange = () => {
  if (form.documentType !== 3) {
    otherDocument.value = "";
    console.log(form.documentType);
  }
};

function onSubmit(id) {
  console.log(form);
  form.post("/client/inquire/" + id);
  isConfirmationVisible.value = true; // Open the confirmation modal
  isRequesting.value = false; // Close the first modal
}

function displayRequestDocumentModal() {
  isRequesting.value = true;
}

function previewRequest(id) {
  documentId.value = id;
  isClicked.value = true;
  console.log(isClicked.value);
}

function closeRequestDocumentModal() {
  isRequesting.value = false;
  
}

function closeConfirmationModal() {
  isConfirmationVisible.value = false;
  location.reload();
}
</script>

<template>
  <Head title="Inquire" />
  <ClientPageLayout>
    <div>
      <div class="d-flex justify-end pe-10 mb-10">
        <v-btn @click="displayRequestDocumentModal" color="primary" flat>
          <v-icon>mdi-plus</v-icon> Request Document
        </v-btn>
      </div>

      <v-dialog
        transition="dialog-top-transition"
        max-width="700"
      >
        <v-sheet>
          <v-form class="border pa-5">
            <div
              class="text-h5 font-weight-bold text-center d-flex justify-between"
            >
              Inquire Documents
              <v-btn @click="closeRequestDocumentModal" flat color="red">
                <v-icon>mdi-close</v-icon>
              </v-btn>
            </div>
            <div class="mb-10">
              <div class="text-body-2">
                <span class="text-red"> Note!</span> One Request Per Day Only
              </div>
            </div>

            <div class="d-flex flex-row mb-4">
              <div class="text-body-2 font-weight-bold me-5">
                Choose Document
              </div>
            </div>

            <!-- Conditionally display "Other" document input field -->
            <v-container
              class="d-flex flex-row mb-4"
            >
              <div class="text-body-2 font-weight-bold me-5">Others:</div>
              <v-text-field
                label="Please specify"
                outlined
              ></v-text-field>
            </v-container>

            <div class="d-flex flex-row mb-4">
              <div class="text-body-2 font-weight-bold me-5">State Reason:</div>
              <v-textarea
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

      <!-- Second Modal: Confirmation or Success Modal -->
      <v-dialog
        transition="dialog-top-transition"
        max-width="500"
      >
        <v-sheet height="250" class="d-flex flex-col align-center justify-center">
          <div class="text-h5 font-weight-bold text-center mb-5">
            Request Submitted
          </div>

          <div class="text-body-2 text-center mb-5">
            Your document request has been submitted successfully.
          </div>

          <div class="text-center">
            <v-btn @click="closeConfirmationModal" color="primary">Okay</v-btn>
          </div>
        </v-sheet>
      </v-dialog>
    </div>

    <v-container width="1000">
      <v-table class="border border-indigo-400 rounded">
        <thead>
          <tr class="bg-indigo">
            <th class="text-left">Document Id</th>
            <th class="text-left">Document Name</th>
            <th class="text-left">Status</th>
            <th class="text-left" width="200"></th>
          </tr>
        </thead>
        <tbody>
        </tbody>
      </v-table>
    </v-container>

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