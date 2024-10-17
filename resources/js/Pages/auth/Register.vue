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
  email: '',
  age: '',
  gender: '',
  birthdate: null,
  contactNumber: '',
  password: '',
  password_confirmation: '',
});

const errorMessages = ref({}); 

const register = async() => {
  try {
    errorMessages.value = {};
    const response = await axios.post('api/register', studentInfo.value);
    const token = response.data.token;
    if (token) {
      localStorage.setItem('authToken', token);
      axios.defaults.headers.common['Authorization'] = `Bearer ${token}`;
    }
  } catch (error) {
    if (error.response && error.response.data.errors) {
      errorMessages.value = error.response.data.errors;
    }
  }
}
</script>





<template>
  <v-container class="bg-primary d-flex justify-center">
    <v-alert v-if="Object.keys(errorMessages).length > 0" type="error" dismissible class="mb-3 position-absolute mx-auto">
      Registration Failed, Please Double Check your Information.
    </v-alert>
  </v-container>
  
  <RegistrationLayout title="Register">
    <v-form @submit.prevent="register()">
      <div>
        <v-text-field type="number" v-model="studentInfo.id" label="Student ID" variant="outlined"></v-text-field>
        <v-text-field v-model="studentInfo.firstName" label="First Name" variant="outlined"></v-text-field>
        <v-text-field v-model="studentInfo.lastName" label="Last Name" variant="outlined"></v-text-field>
        <v-text-field v-model="studentInfo.middleName" label="Middle Name" variant="outlined"></v-text-field>
        <v-text-field v-model="studentInfo.email" type="email" label="Email" variant="outlined"></v-text-field>
        <div class="d-flex">
          <v-text-field v-model="studentInfo.age" label="Age" variant="outlined" class="me-5" type="number"></v-text-field>
          <v-select v-model="studentInfo.gender" width="400px" variant="outlined" label="Gender" :items="['Male', 'Female']"></v-select>
        </div>
        <v-date-input v-model="studentInfo.birthdate" :prepend-icon="null" prepend-inner-icon="mdi-calendar-range" label="Birthdate" variant="outlined"/>
        <v-text-field v-model="studentInfo.contactNumber" label="Contact Number" variant="outlined" type="number"></v-text-field>
        <PasswordToggle v-model="studentInfo.password" passwordLabel="Password" />
        <PasswordToggle v-model="studentInfo.password_confirmation" passwordLabel="Confirm Password" />
      </div>

      <AuthButton buttonText="Register" authMessage="Already Have An Account?" authLink="/login" :authTextWidth="80" authText="Login Now"/>
    </v-form>
  </RegistrationLayout>
</template>
