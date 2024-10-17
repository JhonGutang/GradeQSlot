<script setup>
import PasswordToggle from "../../Components/PasswordToggle.vue";
import RegistrationLayout from "../../Layouts/StudentAuthLayout.vue";
import AuthButton from "../../Components/AuthButtonWithLink.vue";
</script>


<template>
  <RegistrationLayout title="Register">
    <v-form>
      <div>
        <v-text-field label="Student ID" variant="outlined"></v-text-field>
        <v-text-field label="First Name" variant="outlined"></v-text-field>
        <v-text-field label="Last Name" variant="outlined"></v-text-field>
        <v-text-field label="Middle Initial" variant="outlined"></v-text-field>
        <div class="d-flex">
          <v-text-field label="Age" variant="outlined" class="me-5" type="number"></v-text-field>
          <v-select width="400px" variant="outlined" label="Gender" :items="[
            'Male',
            'Female',
          ]"></v-select>
        </div>
        <v-text-field label="Birthdate" variant="outlined"></v-text-field>
        <v-text-field label="Contact Number" variant="outlined" type="number"></v-text-field>
        <PasswordToggle passwordLabel="Password" />
        <PasswordToggle passwordLabel="Confirm Password" />
      </div>
      <AuthButton buttonText="Register" buttonLink="/student" authMessage="Already Have An Account?" authLink="/login" :authTextWidth="80" authText="Login Now"/>
    </v-form>
  </RegistrationLayout>
</template>
