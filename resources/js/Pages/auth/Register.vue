<script setup>
import PasswordToggle from "../../Components/PasswordToggle.vue";
import RegistrationLayout from "../../Layouts/StudentAuthLayout.vue";
import AuthButton from "../../Components/AuthButtonWithLink.vue";
import { ref } from "vue";

const studentInfo = ref({
  id: '',
  firstName: '',
  lastName: '',
  middleName: '',
  age: '',
  gender: '',
  birthdate: null,
  contactNumber: '',
  password: '',
  confirmPassword: '',
});

const errorMessage = ref(''); 

const register = () => {
  if (studentInfo.value.password !== studentInfo.value.confirmPassword) {
    errorMessage.value = 'Passwords do not match!';
    setTimeout(() => {
      errorMessage.value = '';
    }, 3000);
    
  } else {
    errorMessage.value = ''; 
    console.log(studentInfo.value);

  }
}
</script>




<template>
  <v-container class="bg-primary d-flex justify-center">
    <v-alert v-if="errorMessage" type="error" dismissible class="mb-3 position-absolute mx-auto">
      {{ errorMessage }}
    </v-alert>
  </v-container>
  
  <RegistrationLayout title="Register">
    <v-form @submit.prevent="register()">
      <div>
        <v-text-field type="number" v-model="studentInfo.id" label="Student ID" variant="outlined"></v-text-field>
        <v-text-field v-model="studentInfo.firstName" label="First Name" variant="outlined"></v-text-field>
        <v-text-field v-model="studentInfo.lastName" label="Last Name" variant="outlined"></v-text-field>
        <v-text-field v-model="studentInfo.middleName" label="Middle Name" variant="outlined"></v-text-field>
        <div class="d-flex">
          <v-text-field v-model="studentInfo.age" label="Age" variant="outlined" class="me-5" type="number"></v-text-field>
          <v-select v-model="studentInfo.gender" width="400px" variant="outlined" label="Gender" :items="['Male', 'Female']"></v-select>
        </div>
        <v-date-input v-model="studentInfo.birthdate" :prepend-icon="null" prepend-inner-icon="mdi-calendar-range" label="Birthdate" variant="outlined"/>
        <v-text-field v-model="studentInfo.contactNumber" label="Contact Number" variant="outlined" type="number"></v-text-field>
        <PasswordToggle v-model="studentInfo.password" passwordLabel="Password" />
        <PasswordToggle v-model="studentInfo.confirmPassword" passwordLabel="Confirm Password" />
      </div>

      <AuthButton buttonText="Register" authMessage="Already Have An Account?" authLink="/login" :authTextWidth="80" authText="Login Now"/>
    </v-form>
  </RegistrationLayout>
</template>
