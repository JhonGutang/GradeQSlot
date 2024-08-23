<template>
    <RegistrationLayout title="Register">
        <v-sheet height="280" class="overflow-y-scroll mb-5" >
          <v-text-field label="Student ID" type="number" color="primary" hide-spin-buttons></v-text-field>
            <v-text-field label="Name" type="text" color="primary"></v-text-field>
            <v-text-field label="Email" type="email" color="primary"></v-text-field>
            <v-select
            label="Gender"
            :items="['Male', 'Female']"
            color="primary"
            outlined
          ></v-select>
            <v-text-field
              label="Password"
              type="password"
              color="primary"
            ></v-text-field>
            <v-text-field
              label="Confirm Password"
              type="password"
              color="primary"
            ></v-text-field>
        </v-sheet>
        <v-btn class="bg-primary" width="100%" height="50">Register</v-btn>
        <div class="d-flex text-center justify-center mt-2">
          <h5 class="me-1">Already Have An Account?</h5>
          <Link
            :href="route('login')"
            class="text-decoration-none font-weight-bold text-body-2 text-light-blue-darken-4"
            >Login Now</Link
          >
        </div>
    </RegistrationLayout>
</template>

<script setup>

import { Link } from '@inertiajs/vue3';
import RegistrationLayout from '../../Layouts/Auth_Registration_Layout.vue'
</script>