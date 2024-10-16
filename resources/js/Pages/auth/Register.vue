<script setup>

import RegistrationLayout from "../../Layouts/AuthLayout.vue";


</script>


<template>
  <RegistrationLayout title="Register">
    <v-form >
      <v-sheet height="280" class="overflow-y-scroll mb-5">
        <v-text-field
          label="Student ID"
          type="number"
          color="primary"
          hide-spin-buttons
          class="mb-3"
        ></v-text-field>
        
        
        <v-text-field 
        label="Name" 
        type="text" 
        color="primary"
        class="mb-3" 

        ></v-text-field>

        
        <v-text-field 
        label="Email" 
        type="email" 
        color="primary"
        class="mb-3"

        >
      </v-text-field>
 
        
        <v-select
      
        label="Gender"
        :items="['Male', 'Female']"
        color="primary"
        class="mb-3"
        outlined

        ></v-select>

        
        
        <v-text-field
   
        label="Password"
        type="password"
        color="primary"
        class="mb-3"

        ></v-text-field>
        

        <v-text-field
     
        label="Confirm Password"
        type="password"
        color="primary"
        ></v-text-field>
      </v-sheet>
      <v-btn class="bg-primary" type="submit" width="100%" height="50">Register</v-btn>
      <div class="d-flex text-center justify-center mt-2 align-center">
        <h5 class="me-1 text-body-2">Already Have An Account?</h5>
        <v-btn height="30px" width="90px" class="text-body-2" to="/login" flat>Log In Now</v-btn>
      </div>
    </v-form>
  </RegistrationLayout>
</template>
