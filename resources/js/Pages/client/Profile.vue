<script setup>
import ClientPageLayout from "../../Layouts/ClientPageLayout.vue";
defineProps({
  student: {
    type: Object,
    required: true,
  }
})

</script>

<template>
  <Head title="Profile" />
  <ClientPageLayout>
    <v-container fluid height="200">
      <v-row class="my-3 px-5">
        <v-col cols="3">
          <v-img
            :width="300"
            aspect-ratio="16/9"
            cover
            rounded
            src="https://cdn.vuetifyjs.com/images/parallax/material.jpg"
          ></v-img>
        </v-col>
        <v-col class="d-flex flex-column justify-center">
          <div class="text-h5 font-weight-bold text-capitalize">{{student.id}}</div>
          <div class="text-h5 font-weight-bold text-capitalize">{{student.name}}</div>
          <div class="text-subtitle-2">{{student.email}}</div>
        </v-col>
      </v-row>

      <!-- general information -->
      <v-row class=" d-flex flex-row">
        <v-col cols="8" class="">
          <v-card variant="outlined" class="mb-5" height="315">
            <v-card-title class="bg-indigo-darken-1 d-flex align-center px-4 mb-5" height="50">
              <div class="text-h6 white--text">General Information</div>
            </v-card-title>
            
            <v-card-text class="px-4">
              <v-row>
                <v-col cols="4" class="d-flex flex-row">
                  <div class="font-weight-bold me-4">Last Name:</div>
                  <div>Montermoso</div>
                </v-col>
                <v-col class="d-flex flex-row">
                  <div class="font-weight-bold me-4">First Name:</div>
                  <div>Jhon Barry</div>
                </v-col>
                <v-col class="d-flex flex-row">
                  <div class="font-weight-bold me-4">Middle Name:</div>
                  <div>Deiparine</div>
                </v-col>
              </v-row>
        
              <v-row>
                <v-col cols="5" class="d-flex flex-row">
                  <div class="font-weight-bold me-4">Date of Birth:</div>
                  <div>January 20, 2024</div>
                </v-col>
                <v-col class="d-flex flex-row">
                  <div class="font-weight-bold me-4">Place of Birth:</div>
                  <div>Cabitoonan Toledo City</div>
                </v-col>

              </v-row>
              <v-row class="mb-3">
                <v-col cols="5" class="d-flex flex-row">
                  <div class="font-weight-bold me-4">Phone Number:</div>
                  <div>+639 996 6001 848</div>
                </v-col>
                <v-col class="d-flex flex-row">
                  <div class="font-weight-bold me-4">Email:</div>
                  <div>johnjaranjan@gmail.com</div>
                </v-col>
              </v-row>

              <div class="font-weight-bold me-4 text-h6 mb-2">Bachelor of Science in Information Technology</div>
              <v-row>
                <v-col cols="5" class="d-flex flex-row">
                  <div class="font-weight-bold me-4">Year Level:</div>
                  <div>2nd Year</div>
                </v-col>
                <v-col class="d-flex flex-row">
                  <div class="font-weight-bold me-4">Block:</div>
                  <div>Block A</div>
                </v-col>
              </v-row>
            </v-card-text>
          </v-card>
        </v-col>

        
        

        <!-- Pendings -->
        <v-col >
          <v-card
          class="mx-auto"
          variant="outlined"
        >
          <v-card-title class="bg-indigo-darken-2 d-flex justify-between" >
            <div>Request History</div>
            <Link :href="route('client.history')" class="text-button" type="button">View</Link>
          </v-card-title>
      
          <v-card-text class="bg-surface-light">
            <v-list>
              <v-list-item>
                <v-btn height="50" block color="indigo">TOR  11/2/2024</v-btn>
              </v-list-item>
              <v-list-item>
                <v-btn block height="50"  color="indigo">THEO 2 Grade</v-btn>
              </v-list-item>
              <v-list-item>
                <v-btn block height="50" color="indigo">Button 3</v-btn>
              </v-list-item>
              <v-list-item>
                <v-btn block height="50" color="indigo">Button 4</v-btn>
              </v-list-item>
            </v-list>
          </v-card-text>
          
        </v-card>
        </v-col>
      </v-row>

    </v-container>
  </ClientPageLayout>
</template>