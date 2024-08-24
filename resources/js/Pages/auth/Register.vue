<script setup>
import { Link, router } from "@inertiajs/vue3";
import RegistrationLayout from "../../Layouts/Auth_Registration_Layout.vue";
import { reactive } from "vue";

const form = reactive({
  studentId: null,
  name: null,
  gender: null,
  email: null,
  password: null,
  passwordConfirmation: null,
})


const submit = () => {
  router.post()
  console.log(form);
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
        <v-text-field v-model="form.name" label="Name" type="text" color="primary"></v-text-field>
        <v-text-field v-model="form.email" label="Email" type="email" color="primary"></v-text-field>
        <v-select
          v-model="form.gender"
          label="Gender"
          :items="['Male', 'Female']"
          color="primary"
          outlined
        ></v-select>
        <v-text-field
        v-model="form.password"
          label="Password"
          type="password"
          color="primary"
        ></v-text-field>
        <v-text-field
        v-model="form.passwordConfirmation"
          label="Confirm Password"
          type="password"
          color="primary"
        ></v-text-field>
      </v-sheet>
      <v-btn class="bg-primary" type="submit" width="100%" height="50">Register</v-btn>
      <div class="d-flex text-center justify-center mt-2">
        <h5 class="me-1">Already Have An Account?</h5>
        <Link
          :href="route('login')"
          class="text-decoration-none font-weight-bold text-body-2 text-light-blue-darken-4"
          >Login Now</Link
        >
      </div>
    </v-form>
  </RegistrationLayout>
</template>

