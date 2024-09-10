<script setup>
import ClientPageLayout from "../../Layouts/ClientPageLayout.vue";
import { router } from "@inertiajs/vue3";

defineProps({
  student: {
    type: Object,
    required: true,
  },
});

function showHistory(id) {
  router.get("requestHistory/" + id);
}
</script>

<template>
  <Head title="Profile" />
  <ClientPageLayout>
    <v-container fluid>
      <div class="mb-5 ps-5">
        <div class="font-weight-bold text-h5">Student Profile</div>
      </div>
      <v-container height="auto">
        <v-row>
          <v-col cols="4" class="d-flex flex-col justify-center align-end">
            <v-card height="400" class="mb-5">
              <v-img
                :aspect-ratio="1"
                class="bg-white"
                src="https://cdn.vuetifyjs.com/images/parallax/material.jpg"
                width="300"
                cover
              ></v-img>
              <v-card-title class="d-flex flex-col justify-center align-center">
                <div class="text-h6">Jhon Barry Gutang</div>
                <div class="text-body-1">2002041</div>
                <div class="text-body-1">BSIT-4A</div>
              </v-card-title>
            </v-card>
            <v-card width="300" height="150">
              <v-card-title>Contact Information</v-card-title>
              <v-card-text>
                <h1>Email 1</h1>
                <h1>Phone Number</h1>
              </v-card-text>
            </v-card>
          </v-col>
          <v-col> 
            <v-card height="300" class="mb-5">
              <v-card-title>
                General Information
              </v-card-title>
            </v-card>  

            <div class="d-flex">
              <v-card height="250" class="me-5" width="350">
                <v-card-title>
                  Pending Request
                </v-card-title>
              </v-card>
              <v-card height="250" width="350">
                <v-card-title>
                  Missing Grade
                </v-card-title>
              </v-card>
            </div>
          </v-col>
        </v-row>
      </v-container>
    </v-container>
  </ClientPageLayout>
</template>