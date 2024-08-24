<script setup>
import { Link, router, useForm } from "@inertiajs/vue3";
import RegistrationLayout from "../../Layouts/Auth_Registration_Layout.vue";

const form = useForm({
  studentId: null,
  name: null,
  gender: null,
  email: null,
  password: null,
  password_confirmation: null,
})


const submit = () => {
  form.post('/auth/register')
  onError: () => form.reset("password", "passwordConfirmation")
}
</script>


<template>
  <RegistrationLayout title="Register">
    <v-form @submit.prevent="submit">
      <v-sheet height="280" class="overflow-y-scroll mb-5">
        <v-text-field
        v-model="form.studentId"
          label="Student ID"
          type="number"
          color="primary"
          hide-spin-buttons
        ></v-text-field>
        <small class="text-red-darken-4 error">{{form.errors.studentId}}</small>
        
        <v-text-field v-model="form.name" label="Name" type="text" color="primary" ></v-text-field>
        <small class="text-red-darken-4 error">{{form.errors.name}}</small>
        
        <v-text-field v-model="form.email" label="Email" type="email" color="primary"></v-text-field>
        <small class="text-red-darken-4 error">{{form.errors.email}}</small>
        
        <v-select
        v-model="form.gender"
        label="Gender"
        :items="['Male', 'Female']"
        color="primary"
        outlined
        ></v-select>
        <small class="text-red-darken-4 error">{{form.errors.gender}}</small>
        
        
        <v-text-field
        v-model="form.password"
        label="Password"
        type="password"
        color="primary"
        ></v-text-field>
        <small class="text-red-darken-4 error">{{form.errors.password}}</small>

        <v-text-field
        v-model="form.password_confirmation"
        label="Confirm Password"
        type="password"
        color="primary"
        ></v-text-field>
      </v-sheet>
      <v-btn class="bg-primary" type="submit" width="100%" height="50" :disabled="form.processing">Register</v-btn>
      <div class="d-flex text-center justify-center mt-2 ">
        <h5 class="me-1 text-body-2">Already Have An Account?</h5>
        <Link
          :href="route('login')"
          class="text-decoration-none font-weight-bold text-body-2 text-light-blue-darken-4"
          >Login Now</Link
        >
      </div>
    </v-form>
  </RegistrationLayout>
</template>

<style scoped>
  .error {
    position: relative;
    top: -20px;
  }
</style>