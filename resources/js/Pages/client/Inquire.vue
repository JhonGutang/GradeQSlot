<script setup>
import { useForm } from "@inertiajs/inertia-vue3";
import ClientPageLayout from "../../Layouts/ClientPageLayout.vue";
import { ref } from "vue";


const documentOptions = ['TOR', 'Diploma', 'Others']



defineProps({
  auth: {
    type: Object,
    required: true, // if this prop is required
  },
  // documents: {
  //   type: Object,
  //   required: true, // if this prop is required
  // },
})


const handleDocumentChange = () => {
  if (selectedDocument.value !== "Others") {
    otherDocument.value = ""; // Clear the text field if 'Others' is not selected
  }
};

const form = useForm({
    documentType : null,
    otherDocument : null,
    stateReason : null,
})

function onSubmit(id){
  console.log(form)
  form.post('/client/inquire/' + id)
  
}
</script>

<template>
  <Head title="Inquire" />
  <ClientPageLayout>
    <v-container fluid height="100vh">
      <v-row class="fill-height" justify="center">
        <v-col cols="12" md="auto">
          <v-sheet width="700">
            <v-form class="border pa-5" @submit.prevent="onSubmit(auth.student.id)" >
              <div class="text-h5 font-weight-bold text-center mb-10">Inquire Documents</div>
              <!-- Choose Document -->
               
              <div class="d-flex flex-row">
                <div class="text-body-2 font-weight-bold me-5">Choose Document</div>
                <v-select
                  v-model="form.documentType"
                  :items="documentOptions"
                  label="Choose Document"
                  outlined
                  @change="handleDocumentChange"
                ></v-select>
              </div>
  
              <!-- Others -->
              <v-container v-if="form.documentType === 'Others'" class="d-flex flex-row">
                <div class="text-body-2 font-weight-bold me-5">Others: </div>
                <v-text-field
                  v-model="form.otherDocument"
                  label="Please specify"
                  outlined
                ></v-text-field>
              </v-container >
  
              <div class="d-flex flex-row mb-4">
                <div class="text-body-2 font-weight-bold me-5">
                  State Reason: 
                </div>
  
                <v-textarea
                  v-model="form.stateReason"
                  label=""
                  outlined
                  rows="4"
                ></v-textarea> 
              </div>

              <div align="end">
                <v-btn type="submit" color="success">Submit</v-btn>
              </div>
            </v-form>
          </v-sheet>
        </v-col>
      </v-row>
    </v-container>
  </ClientPageLayout>
</template>




     
      
