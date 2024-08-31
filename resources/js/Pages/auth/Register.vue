<script setup>
import { Link, router, useForm } from "@inertiajs/vue3";
import RegistrationLayout from "../../Layouts/AuthRegistrationLayout.vue";

const form = useForm({
  id: null,
  name: null,
  gender: null,
  email: null,
  password: null,
  password_confirmation: null,
})


const onRegister = () => {
  form.post(route('register'))
  onError: () => form.reset("password", "passwordConfirmation")
}
</script>


<template>
  <RegistrationLayout title="Register">
    <v-form @submit.prevent="onRegister">
      <v-sheet height="280" class="overflow-y-scroll mb-5">
        <v-text-field
        v-model="form.id"
          label="Student ID"
          type="number"
          color="primary"
          hide-spin-buttons
          class="mb-3"
          :error="!!form.errors.id"
          :error-messages="form.errors.id ? [form.errors.id] : []"
        ></v-text-field>
        
        
        <v-text-field 
        v-model="form.name" 
        label="Name" 
        type="text" 
        color="primary"
        class="mb-3" 
        :error="!!form.errors.name"
        :error-messages="form.errors.name ? [form.errors.name] : []"
        ></v-text-field>

        
        <v-text-field 
        v-model="form.email" 
        label="Email" 
        type="email" 
        color="primary"
        class="mb-3"
        :error="!!form.errors.email"
        :error-messages="form.errors.email ? [form.errors.email] : []"
        >
      </v-text-field>
 
        
        <v-select
        v-model="form.gender"
        label="Gender"
        :items="['Male', 'Female']"
        color="primary"
        class="mb-3"
        outlined
        :error="!!form.errors.gender"
        :error-messages="form.errors.gender ? [form.errors.gender] : []"
        ></v-select>

        
        
        <v-text-field
        v-model="form.password"
        label="Password"
        type="password"
        color="primary"
        class="mb-3"
        :error="!!form.errors.password"
        :error-messages="form.errors.password ? [form.errors.password] : []"
        ></v-text-field>
        

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
